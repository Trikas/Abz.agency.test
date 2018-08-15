<?php

use Illuminate\Database\Seeder;
use App\Helpers\Facades\genName;
use Illuminate\Support\Facades\DB;

class TablePersonal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(genName $gen)
    {
    	DB::table('personal')->insert([
						'last_name'=>$gen->lastName(),
						'first_name'=>$gen->firstName(),
						'nameFather'=>$gen->fatherName(),
						'position'=>'Президент компании',
						'position_value'=>5,
						'first_day_on_work'=>date('Y|m|j', rand(296545881, 788929201)),
						'salary'=>'$'.rand(100000, 200000)//добавление президента компании
						]);
    	DB::table('personal')->insert([
						'last_name'=>$gen->lastName(),
						'first_name'=>$gen->firstName(),
						'nameFather'=>$gen->fatherName(),
						'position'=>'Генеральный директор',
						'position_value'=>6,
						'first_day_on_work'=>date('Y|m|j', rand(296545881, 788929201)),
						'salary'=>'$'.rand(50000, 100000)//добавление ген директора
						]);
    		for($i=0; $i<=50; $i++){
    		$x = rand(1, 4);
    		echo $x;
    		switch ($x) {
    			case '1':
    			if(count(DB::table('personal')->where('position_value', 7)->get())<=20000){
    				DB::table('personal')->insert([
						'last_name'=>$gen->lastName(),
						'first_name'=>$gen->firstName(),
						'nameFather'=>$gen->fatherName(),
						'position'=>'Директор филиала',
						'position_value'=>7,
						'first_day_on_work'=>date('Y|m|j', rand(296545881, 788929201)),
						'salary'=>'$50000',//добавление директора филиала
						]);
    			}
    		
    			
    			case '2':
    			if(count(DB::table('personal')->where('position_value', 8)->get())<=20000){ 
    				DB::table('personal')->insert([
						'last_name'=>$gen->lastName(),
						'first_name'=>$gen->firstName(),
						'nameFather'=>$gen->fatherName(),
						'position'=>'Зам директора филиала',
						'position_value'=>8,
						'first_day_on_work'=>date('Y|m|j', rand(296545881, 788929201)),
						'salary'=>'$20000'//добавление зам директора филиала
					]);
				
    			}
    			case '3':
    			if(count(DB::table('personal')->where('position_value', 9)->get())<=20000){  
    			DB::table('personal')->insert([
						'last_name'=>$gen->lastName(),
						'first_name'=>$gen->firstName(),
						'nameFather'=>$gen->fatherName(),
						'position'=>'Управляющий персоналом',
						'position_value'=>9,
						'first_day_on_work'=>date('Y|m|j', rand(296545881, 788929201)),
						'salary'=>'$10000'//управляющий персоналом
									]);
    		}
    			
    			case 4:
    			if(count(DB::table('personal')->where('position_value', 10)->get())<=20000){   	
    			DB::table('personal')->insert([
						'last_name'=>$gen->lastName(),
						'first_name'=>$gen->firstName(),
						'nameFather'=>$gen->fatherName(),
						'position'=>'Рабочий',
						'position_value'=>10,
						'first_day_on_work'=>date('Y|m|j', rand(296545881, 788929201)),
						'salary'=>'$4500'//управляющий персоналом
						]);
    		}

    			
    	}
    			
    		
			var_dump(count(DB::table('personal')->where('position_value', 8)->get()));
			var_dump(count(DB::table('personal')->where('position_value', 7)->get()));
			var_dump(count(DB::table('personal')->where('position_value', 6)->get()));
			var_dump(count(DB::table('personal')->where('position_value', 5)->get()));


    		}


    	}
    }

    			


	

    	
    		



