<?php

namespace App\Http\Controllers;

use App\Models\detail_sales;
use Illuminate\Http\Request;

class DetailSalesController extends Controller
{
    public function findDetail($id){
       $detail = detail_sales::findOrFail($id);
    //    lebih cocok ke component
        return view('pegawai.sales.detail');
    }

    public function createDetail(Request $request)
    {

        //TODO: ubah 'quantity' menjadi 'amount'

        $detail = detail_sales::create([
            'sale_id' => $request->sale_id,
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'sub_total'=> $request->subTotal
        ]);

        return $detail;
    }
    
}
