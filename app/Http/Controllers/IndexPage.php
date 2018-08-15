<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class IndexPage extends Controller
{
    function show(){

    	return view('index', ['user'=>Auth::user()]);
    }//
}
