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
    	for($x=0; $x<=50000; $x++){
		
			$position = $gen->getPosition();
			
			switch ($position) {
				case 'Президент компании':
					if (count(DB::table('personal')->where('position_value', 10)->get())==0){
					DB::table('personal')->insert([
						'last_name'=>$gen->lastName(),
						'first_name'=>$gen->firstName(),
						'nameFather'=>$gen->fatherName(),
						'position'=>$position,
						'position_value'=>10,
						'first_day_on_work'=>date('j|m|Y', rand(296545881, time())),
						'salary'=>rand(100000, 200000)//добавление президента компании
						]);
			    }
					break;
				case 'Генеральный директор':
					if (count(DB::table('personal')->where('position_value', 9)->get())==0){
		    		DB::table('personal')->insert([
						'last_name'=>$gen->lastName(),
						'first_name'=>$gen->firstName(),
						'nameFather'=>$gen->fatherName(),
						'position'=>$position,
						'position_value'=>9,
						'first_day_on_work'=>date('j|m|Y', rand(296545881, time())),
						'salary'=>rand(50000, 100000)//добавление ген директора
						]);
		    		}	
					break;
				case 'Директор филиала':
				if (count(DB::table('personal')->where('position_value', 8)->get())<=count(DB::table('personal')->where('position_value', 7)->get())){
		    		DB::table('personal')->insert([
						'last_name'=>$gen->lastName(),
						'first_name'=>$gen->firstName(),
						'nameFather'=>$gen->fatherName(),
						'position'=>$position,
						'position_value'=>8,
						'first_day_on_work'=>date('j|m|Y', rand(296545881, time())),
						'salary'=>rand(40000, 90000)//добавление директора филиала
						]);
		    		}
		    		break;
		    	case 'Зам директора филиала':
		    	$countMidBoss = count(DB::table('personal')->where('position_value', 7)->get());
		    	$countBossPersonal = count(DB::table('personal')->where('position_value', 6)->get());
				if ($countMidBoss<=$countBossPersonal){
		    		DB::table('personal')->insert([
						'last_name'=>$gen->lastName(),
						'first_name'=>$gen->firstName(),
						'nameFather'=>$gen->fatherName(),
						'position'=>$position,
						'position_value'=>7,
						'first_day_on_work'=>date('j|m|Y', rand(296545881, time())),
						'salary'=>rand(30000, 80000)//добавление зам директора филиала
						]);
		    		}
		    		break;
		    	case 'Управляющий персоналом':
		    	$countBossPersonal= count(DB::table('personal')->where('position_value', 6)->get());
		    	$countPers = count(DB::table('personal')->where('position_value', 5)->get());
				if ($countBossPersonal<=$countPers){
		    		DB::table('personal')->insert([
						'last_name'=>$gen->lastName(),
						'first_name'=>$gen->firstName(),
						'nameFather'=>$gen->fatherName(),
						'position'=>$position,
						'position_value'=>6,
						'first_day_on_work'=>date('j|m|Y', rand(296545881, time())),
						'salary'=>rand(20000, 70000)//управляющий персоналом
						]);
		    		}
		    		break;
		    	case 'Рабочий': 
		    	$countPers = count(DB::table('personal')->where('position_value', 5)->get());
		    		DB::table('personal')->insert([
						'last_name'=>$gen->lastName(),
						'first_name'=>$gen->firstName(),
						'nameFather'=>$gen->fatherName(),
						'position'=>$position,
						'position_value'=>5,
						'first_day_on_work'=>date('j|m|Y', rand(296545881, time())),
						'salary'=>rand(10000, 30000)//управляющий персоналом
						]);
		    		
		    		break;

				default:
					echo "error";
					break;
			}
		 	

		}
    }//
    
}
