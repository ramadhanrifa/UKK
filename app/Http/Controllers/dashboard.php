<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\purchase;
use Illuminate\Container\Attributes\Auth;

class dashboard extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
}
