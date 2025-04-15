<?php

namespace App\Http\Controllers;

use App\Models\sales;
use Illuminate\Http\Request;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DetailSalesController;
use Illuminate\Support\Facades\Validator;

class SalesController extends Controller
{

    protected $customerController;
    protected $detailSalesController;

   public function __construct(CustomerController $customerController, DetailSalesController $detailSalesController){
    $this->detailSalesController = $detailSalesController;
   }

    public function index()
    {
        $sales = sales::with("customer", "staff")->paginate(10);
        return view('pegawai.sales.index');
    }

    public function create(){
        return view('pegawai.sales.addPurchase');
    }

    public function cart(Request $request){
        $validator =[
            'items' => 'array',
            'total_price'
        ];

        $validate = Validator::make($request->all(), $validator);
        if ($validate->fails()){
            return redirect()->back()->withErrors($validate)->withInput();
        }

        // $this->detailSalesController->findDetail()

        // return ke halaman pembayaran
        return null;
        

    }

    public function store(Request $request, $items){

        $validator = [
            'total_price'=> 'required',
            'total_pay'=>'required',
            'total_return' => 'required',
            'phoneNumber' => 'nullable',
            'customerName' => 'nullable',
            'staff_id' => 'required',
            'poin' => 'nullable',
            'usePoint' => 'boolean||',
            'total_poin' => 'nullable'
        ];
        

        $validate = Validator::make($request->all(), $validator);
        if ($validate->fails()){
            return redirect()->back()->withErrors($validate)->withInput();
        }

        if($request->phoneNumber != null){
            $name = $request->name;
            $phoneNumber = $request->phone;
            $poin = 00.1 * $request->total_price;

            $foundCustomer = $this->customerController->searchByPhone($request->phoneNumber);

            if($foundCustomer != null){
                $newCustomer = $this->customerController->createPhoneNumber($name, $phoneNumber, $poin);
                $sales = Sales::created([
                    'sale_date' => now(),
                    'total_price' => $request->total_pice,
                    'total_pay' => $request->total_pay,
                    'customer_id' => $newCustomer->get("id"),
                    'staff_id' => $request->staff_id,
                    'poin' => $poin,
                    "total_poin" => $poin
                ]);
            }

            $customerPoin = $foundCustomer->get('poin');
            $totalPoin = $customerPoin + $poin;

            if($request->usePoint == true){
                $price = $request->total_price - $totalPoin;
                $customerPoin -= $totalPoin;

                $sales = Sales::created([
                    'sale_date' => now(),
                    'total_price' => $price,
                    'total_pay' => $request->total_pay,
                    'customer_id' => $newCustomer->get("id"),
                    'staff_id' => $request->staff_id,
                    'poin' => $poin,
                    "total_poin" => $customerPoin
                ]);
            }

            $sales = Sales::created([
                'sale_date' => now(),
                'total_price' => $request->total_price,
                'total_pay' => $request->total_pay,
                'customer_id' => $newCustomer->get("id"),
                'staff_id' => $request->staff_id,
                'poin' => $poin,
                "total_poin" => $totalPoin
            ]);                      

        }else {
            $sales = Sales::created([
                'sale_date' => now(),
                'total_price' => $request->total_price,
                'total_pay' => $request->total_pay,
                'customer_id' => "",
                'staff_id' => $request->staff_id,
                'poin' => "",
                "total_poin" => ""
            ]);
        }

        // TODO: cek bagian ini
        //TODO: buat function baru khusus buat detailnya
        
        foreach($items as $i){
            $product_id = $i->product->id;
            $amount = $i->amount;
            $sub_total = $i->sub_total;
            $this->detailSalesController->createDetail(
                $sales, $product_id, $amount, $sub_total
            );
        }
        

        // return to listView
        return null;
        
    }

    

     
}
