<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SortData extends Controller
{
    function Sort(Request $request){
    	$pagination = '<li class="page-item disabled" aria-disabled="true" aria-label="« Previous"> <span class="page-link" aria-hidden="true">‹</span></li>
<li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
<li class="page-item"><a class="page-link" href="http://test.work/all_pers?page=2">2</a></li>
<li class="page-item"><a class="page-link" href="http://test.work/all_pers?page=3">3</a></li>
<li class="page-item"><a class="page-link" href="http://test.work/all_pers?page=4">4</a></li>
<li class="page-item"><a class="page-link" href="http://test.work/all_pers?page=5">5</a></li>
<li class="page-item"><a class="page-link" href="http://test.work/all_pers?page=2" rel="next" aria-label="Next »">›</a></li>';





	

			$this->whoSort($request->whomSort, $request->printIc);
			
    		if($request->sortId=='desk'){
				$user= DB::table('personal')->orderBy($request->whomSort, 'desk')->paginate(30);
				session(['whomSort' => $request->whomSort, 'sortId' =>$request->sortId]);
    		}
    		elseif($request->sortId=='ask'){
    			$user= DB::table('personal')->orderBy($request->whomSort)->paginate(30);
				session(['whomSort' => $request->whomSort, 'sortId' =>$request->sortId]);
    		}
    		elseif($request->sortId==NULL){
    			$user= DB::table('personal')->paginate(30);
				session(['whomSort' => $request->whomSort, 'sortId' =>$request->sortId]);
    		}
    		
    		$tabl = view('print_sort_table', ['user'=>$user, 
    			'howSort'=>session('howSort'), 
    			'whomSort'=>session('whomSort'), 
    			'id'=> 1,
    			'last_name'=>session('last_name'),
    			'first_name'=>session('first_name'), 
    			'nameFather'=>session('nameFather'), 
    			'position_value'=>session('position_value'), 
    			'first_day'=>session('first_day'),
    			'salary'=>session('salary')
    		]);

    	
    		 echo json_encode($tabl, JSON_HEX_TAG); 		
   }

   function whoSort ($who_sort, $how_sort){
  
			session(['id' =>'fas fa-sort-numeric-up']); 
			session(['last_name' =>'fas fa-sort-alpha-down']); 
			session(['first_name'=>'fas fa-sort-alpha-down']);
			session(['nameFather'=>'fas fa-sort-alpha-down']);
			session(['position_value'=>'fas fa-sort-alpha-down']);
			session(['first_day'=>'fas fa-sort-numeric-down']);
			session(['salary'=>'fas fa-sort-numeric-down']);	

			if (session(session('whomSort'))!=NULL){
				session(['id' =>'fas fa-sort-numeric-down']); 
			}
	

   			session([$who_sort=>$how_sort]);

		
}
   			

 
   		

			 	 

 
	}//


