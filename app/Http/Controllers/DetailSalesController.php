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

    

    public function createDetail($sale_id, $product_id, $amount, $sub_total){
        $detail = detail_sales::create([
            'sale_id' => $sale_id,
            'product_id' => $product_id,
            'quantity' => $amount,
            'sub_total'=> $sub_total
        ]);

        return $detail;
    }
    
}
