@extends('layouts.layout')

@section('title' , 'Ingresar nuevo control')

@section('content')
<br><br>
<style>
.abs-center {
  display: flex;
  align-items: center;
  justify-content: center;
}
</style>
<br><br>
<h1 align="center">SELECT CRITERIA</h1>
<br><br>
<br><br>
<div class="abs-center" align="center">
<div class='container'>
  <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Select Option
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <form action="{{route('stretcher.index')}}" method="get">
          <li><a class="dropdown-item" href="{{route('stretcher.index')}}">ECRI</a></li>
        </form>
        <form action="{{route('stretcher.index')}}" method="get">
          <li><a class="dropdown-item" href="{{route('stretcher.per1')}}">Personalized 1</a></li>
          </form>
        <form action="{{route('stretcher.index')}}" method="get">
          <li><a class="dropdown-item" href="{{route('stretcher.per2')}}">Personalized 2</a></li>
          </form>
        <form action="{{route('stretcher.index')}}" method="get">
          <li><a class="dropdown-item" href="{{route('stretcher.per3')}}">Personalized 3</a></li>            
          </form>           
  </ul>
</div>
</div>
</div>

     <br><br>
    <br><br>
    <br><br>
    <br><br>
@endsection