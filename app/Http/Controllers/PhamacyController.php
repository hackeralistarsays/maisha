<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhamacyController extends Controller
{
    public function index(){
        return view('pharmacy.index');
    }

    public function products(){
        return view('pharmacy.products');
    }
}
