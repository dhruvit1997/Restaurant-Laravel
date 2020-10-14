@extends('layout')

@section('content')
<div class="container">
<h1> User Login </h1>
<div class="col-sm-8">
<form method="post" action="login">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Enter password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
@endsection