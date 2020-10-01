<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>
<body>

<div class="header">
@section('header')
<nav class="navbar navbar-expand-md bg-Yellow navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Welcome </a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="list">Users List </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="create">Create New Account</a>
      </li>
    </ul>
  </div>
</nav>

@show
</div>
<div class="content">
@section('content')
<h2> your content Part</h2>
@show
</div>
<div class="footer">
@section('Footer')
<h2>{xelpmoc}</h2>
@show
</div>
</body>
</html>