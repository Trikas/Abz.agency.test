<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Helpers\Facades\genName;

class SearchData extends Controller
{
	function whoIs($str){
		$firstName = GetName::firstName(true);
		// $lastName = $gen->lastName(true);
		// $fatherName = $gen->fatherName(true);

		var_dump($fatherName);
		// $isStr = is_string($str);
		// if(!$isStr){
		// 	return 'id';
		// }
		// for ($i=0; $i < count(firstName(true)); $i++) { 
					
		
		


	}

	function search (Request $request){
		var_dump(DB::table('personal')->select('first_name')->distinct()->get());

		var_dump($this->whoIs('1'));


		// $answ = DB::table("personal")->where('id', 'LIKE', '%' . 'Чистяков' . '%')->get();

		// var_dump($answ);
	}


}

    //

