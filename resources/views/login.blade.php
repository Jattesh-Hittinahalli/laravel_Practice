
@extends('layout')

@section('content')
<h2> Login Page</h2>
<form action="/loginsubmit" method="POST">
@csrf
  <div class="form-group">
    <label for="email">Enter Email :</label>
    <input type="text" class="form-control" name="email" placeholder="Enter email" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="password" placeholder="Enter password" id="password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection