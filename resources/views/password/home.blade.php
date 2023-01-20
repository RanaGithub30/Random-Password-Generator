@extends('commons.header')
@section('content')

<form>
        <div class = "form-group" id="generation">
            <input type = "text" class = "form-control" id="generation-box" name="actual_password" style="height: 100px;" readonly>
            <i class="fa fa-refresh" aria-hidden="true" id="refresh"></i>
         </div>
</form>

<form>
       {{ csrf_field() }}
       <center><h2> Customize your password</h2></center>

       <div>
            <div class="form-group">
            <label for="pass_length">Passwword Length:</label>
            <input type="number" class="form-control" min="1" max="40" id="pass_length" name="pass_length">
            </div>     
       </div>

       <center><h2> Customize your password A Little Bit</h2></center>
       <div id="checkboxes">
                <div class="form-check">
                <input type="checkbox" class="form-check-input" id="check1" name="uppercase" >
                <label class="form-check-label" for="check1">Uppercase</label>
                </div>
                <div class="form-check">
                <input type="checkbox" class="form-check-input" id="check2" name="lowercase" >
                <label class="form-check-label" for="check2">Lowercase</label>
                </div>
                <div class="form-check">
                <input type="checkbox" class="form-check-input" id="check3" name="numbers" >
                <label class="form-check-label" for="check2">Numbers</label>
                </div>
                <div class="form-check">
                <input type="checkbox" class="form-check-input" id="check4" name="symbols" >
                <label class="form-check-label" for="check2">Symbols</label>
                </div>
       </div>

       <div>
          <a id="submit" class="btn btn-primary">Submit</a>
       </div>

</form>

@endsection