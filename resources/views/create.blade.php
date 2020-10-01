
@extends('layout')

@section('content')
<h2>Create New Account Page</h2>
<form action="/createsubmit" method="POST">
@csrf
<div class="form-group">
    <label for="name">Enter your Name:</label>
    <input type="text" class="form-control" name="name" placeholder="Enter name" id="name">
  </div>
  <div class="form-group">
    <label for="email">Enter your Email :</label>
    <input type="text" class="form-control" name="email" placeholder="Enter email" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Enter your Password:</label>
    <input type="password" class="form-control" name="password" placeholder="Enter password" id="password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection