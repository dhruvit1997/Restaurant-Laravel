@extends('layout')

@section('content')
<div class="container">
<h1>Edit Restaurants</h1>

<form method="post" action="/edit">
@csrf
  <div class="form-group">
  <input type="hidden" name="id" value="{{$data->id}}">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name="name" value="{{$data->name}}" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" name="email" value="{{$data->email}}" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="textarea" class="form-control" name="address" value="{{$data->address}}" placeholder="Enter address">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection