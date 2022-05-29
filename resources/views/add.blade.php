@extends('layout')

@section('content')
<h1>add restaurant  page here</h1>
<div class='col-sm-6'>
<form method='post' action="">
@csrf
<div class="form-group">
    <label>id </label>
    <input type="int" name="id" class="form-control" placeholder="Enter id">
  </div>
  <div class="form-group">
    <label>name </label>
    <input type="text" name="name" class="form-control" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label>Email </label>
    <input type="email" name="email" class="form-control" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label>address </label>
    <input type="text" name="address" class="form-control" placeholder="Enter address">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@stop 