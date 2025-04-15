<?php

namespace App\Http\Controllers;

use App\Models\customers;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function searchByPhone($phoneNumber)
    {
        $phone = customers::where('phone', $phoneNumber);
        if($phone != null) {
            return $phone;
        }
        return null;
        
    }

    public function createPhoneNumber(Request $request){
       $customer = customers::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'poin'=>$request->poin 
         ]);
        return $customer;
    }
}
