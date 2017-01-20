@extends('layouts.app')

@section('content')


<form action="/" method="post" enctype="multipart/form-data" class="form-horizontal">
{{ csrf_field() }}

<fieldset>
<legend>&nbsp;Review Visitor</legend>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Text input-->
<div class="form-group">

  <label class="col-md-4 control-label" for="number"><b>IC<i> or </i>PASSPORT NUMBER</b></label>  
  <div class="col-md-4">
  <input id="number" name="number" type="text" class="form-control input-md" placeholder="Please insert"></div>
  <div class="col-md-4">
    <button  id="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>
@stop