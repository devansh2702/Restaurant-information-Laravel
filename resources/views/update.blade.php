@extends('layout')

@section('content')
<h1>update restaurant page here</h1>
<div class='col-sm-6'>
<form method='POST' action="/update">
@csrf
<div class="form-group">
    
    <input type="hidden" name="id" class="form-control" value="{{$data->id}}" >
  </div>
  <div class="form-group">
    <label>name </label>
    <input type="text" name="name" class="form-control" value="{{$data->name}}">
  </div>
  <div class="form-group">
    <label>Email </label>
    <input type="email" name="email" class="form-control" value="{{$data->email}}">
  </div>
  <div class="form-group">
    <label>address </label>
    <input type="text" name="address" class="form-control" value="{{$data->address}}">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@stop 