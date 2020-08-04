<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function welcome(Request $request){
        return view('welcome',["namaDepan" => $request->first , 'namaBelakang'=> $request->last]);
    }
}
