<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TablePersonal extends Controller
{
    function show (){

    	
  		if(session('sortId')=='desk'&&session('whomSort')!=NULL){

  			$all_pers = DB::table('personal')->orderBy(session('whomSort'), session('sortId'))->paginate(30);
  		}
  		elseif(session('sortId')=='ask'&&session('whomSort')!=NULL){
			$all_pers = DB::table('personal')->orderBy(session('whomSort'))->paginate(30);
  		}
		elseif (session('sortId')==NULL&&session('whomSort')==NULL) {
			$all_pers = DB::table('personal')->paginate(30);
			$this->sort();

		}
  		
  	
 
    	return view ('all_pers', ['user'=>$all_pers, 'sortStat'=>session('sortStat'), 
    			'id'=> session('id'),
    			'last_name'=>session('last_name'),
    			'first_name'=>session('first_name'), 
    			'nameFather'=>session('nameFather'), 
    			'position_value'=>session('position_value'), 
    			'first_day'=>session('first_day'),
    			'salary'=>session('salary')]);
    }
    function sort(){
    		session(['id' =>'fas fa-sort-numeric-up']); 
			session(['last_name' =>'fas fa-sort-alpha-down']); 
			session(['first_name'=>'fas fa-sort-alpha-down']);
			session(['nameFather'=>'fas fa-sort-alpha-down']);
			session(['position_value'=>'fas fa-sort-alpha-down']);
			session(['first_day'=>'fas fa-sort-numeric-down']);
			session(['salary'=>'fas fa-sort-numeric-down']);	
    }

 
}

