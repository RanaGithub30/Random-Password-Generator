@if(Session::has('create_success'))
<div class="alert alert-success" style="margin: 20px;"><span class="glyphicon glyphicon-ok"></span><em> {{ session('create_success') }}</em></div>
@endif

@if(Session::has('login_error'))
<div class="alert alert-danger" style="margin: 20px;"><span class="glyphicon glyphicon-ok"></span><em> {{ session('login_error') }}</em></div>
@endif

@if(Session::has('logout'))
<div class="alert alert-success" style="margin: 20px;"><span class="glyphicon glyphicon-ok"></span><em> {{ session('logout') }}</em></div>
@endif