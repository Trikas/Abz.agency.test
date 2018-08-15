<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminPanel extends Controller
{
    function show(){
    	return view('admin');
    }//
}
