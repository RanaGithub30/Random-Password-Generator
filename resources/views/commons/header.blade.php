<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Password Generator</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{url('css/password.css')}}">
    <script src="{{url('js/home.js')}}"></script>
</head>
<body>
    
<!-- navbar code starts -->

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Random-Password-Generator</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{route('/')}}">Home</a></li>
      @guest
      <li><a href="{{route('register')}}">Register</a></li>
      <li><a href="{{route('login')}}">Login</a></li>
      @else
      <li><a href="{{route('logout')}}">Logout</a></li>
      @endguest
    </ul>
  </div>
</nav>

<!-- navbar code ends -->

<div class="container">
        @include('commons.session_error')
        @include('commons.validation_error')

        @yield('content')
</div>

</body>
</html>