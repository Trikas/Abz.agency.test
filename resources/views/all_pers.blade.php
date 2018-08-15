@extends('layout.table_us')
@section('content')

        
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Все сорудники</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search" id="search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
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
              
                @section('paginator')
                  <?php echo $user->render(); ?>
                @show
                </table>
                   @section('paginator')
                  <?php echo $user->render(); ?>
                @show
            

             
                
            </div>
              <!-- /.card-body -->
              
            </div>
            <a href="{{url('/sort')}}">v</a>
            <!-- /.card -->
         
@endsection
@section('script')
<script>
  function sort(id){
  if ($('#'+id).attr('class')=='fas fa-sort-numeric-down'){
      $howSort = 'fas fa-sort-numeric-down';
      $printIc = 'fas fa-sort-numeric-up';
      $ask_or_desk = 'ask';
    }

  if ($('#'+id).attr('class')=='fas fa-sort-numeric-up'){
      $howSort = 'fas fa-sort-numeric-up';
      $printIc = 'fas fa-sort-numeric-down';
      $ask_or_desk = 'desk';
    }
  if ($('#'+id).attr('class')=='fas fa-sort-alpha-down'){
      $howSort = 'fas fa-sort-alpha-down';
      $printIc = 'fas fa-sort-alpha-up';
      $ask_or_desk = 'ask';
    }

  if ($('#'+id).attr('class')=='fas fa-sort-alpha-up'){
      $howSort = 'fas fa-sort-alpha-up';
      $printIc = 'fas fa-sort-alpha-down';
      $ask_or_desk = 'desk';
    }
    $.ajax({
      url: '/sort',
   
      data:{
        "_token": "{{ csrf_token() }}",
        "whomSort":id,
        "howSort":$howSort,
        'sortId':$ask_or_desk,
        'printIc':$printIc,
      },
      success: function (data){
console.log(data);
        obj = $.parseJSON(data);
        setLocation('all_pers?page=1');
        $('table').html(obj.tabl);
       

       

      }
    });
  }

  function setLocation(curLoc){
  location.href = curLoc;
  location.hash = curLoc;
 
}

 
</script>
@endsection
