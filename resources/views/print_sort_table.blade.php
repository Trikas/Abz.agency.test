
<table class="table table-hover">
       @section('paginator')               
<?php echo $user->render(); ?>
    @show
                  <tr>
	                	<th style="cursor:pointer;" onclick="sort('id')">ID<i class="{{$id}}" aria-hidden="true" id="id"  style="cursor:pointer;"></i></th>
	                    <th  style="cursor:pointer;" onclick="sort('last_name')">Фамилия<i class="{{$last_name}}" aria-hidden="true" id="last_name"  style="cursor:pointer;"></i></th>
	                    <th  style="cursor:pointer;" onclick="sort('first_name')" >Имя<i class="{{$first_name}}" aria-hidden="true" id="first_name"  style="cursor:pointer;"></i></th>
	                    <th  style="cursor:pointer;" onclick="sort('nameFather')">Отчество<i class="{{$nameFather}}" aria-hidden="true" id="nameFather"  style="cursor:pointer;"></i></th>
	                    <th  style="cursor:pointer;"  onclick="sort('position_value')">Должность<i class="{{$position}}" aria-hidden="true" id="position_value"  style="cursor:pointer;"></i></th>
	                    <th  style="cursor:pointer;" onclick="sort('first_day')">Дата приема на работу<i class="{{$first_day}}" aria-hidden="true" id="first_day"  style="cursor:pointer;"></i></th>
	                    <th style="cursor:pointer;"  onclick="sort('salary')">Зароботная плата<i class="{{$salary}}" aria-hidden="true" id="salary"  style="cursor:pointer;"></i></th> 

	                </tr>

                  @foreach($user as $us_al)
                  <tr>
                
                    <td id="id">{{$us_al->id}}</td>
                    <td id="last_name">{{$us_al->last_name}}</td>
                    <td id="first_name">{{$us_al->first_name}}</td>
                    <td id="father_name">{{$us_al->nameFather}}</td>
                    <td id="position">{{$us_al->position}}</td>
                    <td id="first_day">{{$us_al->first_day}}</td>
                    <td id="salary">{{$us_al->salary}}</td>
             
                  </tr>
                   @endforeach
    
</table>


