@extends('layout.table_us')
@section('aside')
   <div class="row">
      <div class="sidenav col-sm-7s">
     <a href="{{route('all_personal')}}"><i class="fas fa-users"></i> Все сотрудники</a>
     <a href="{{route('admin')}}">{{$user}}<i class="fas fa-lock"></i> Админ панель</a>
   </div>
   @show
@section('content')

@endsection