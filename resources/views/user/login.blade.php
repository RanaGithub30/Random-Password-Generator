@extends('commons.header')
@section('content')

<form class="form-horizontal" action='{{route("post-login")}}' method="POST">
    @csrf

  <fieldset>
    <div id="legend">
      <legend class="">Login</legend>
    </div>
    
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">E-mail</label>
      <div class="controls">
        <input type="text" id="email" name="email" placeholder="Enter Email" class="input-xlarge" required>
        <p class="help-block">Please provide your E-mail</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="Enter Password" class="input-xlarge" required>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button type="submit" id="login" class="btn btn-primary">Register</button>
      </div>
    </div>
  </fieldset>
</form>

@endsection