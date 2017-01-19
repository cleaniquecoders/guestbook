@extends('layouts.app')

@section('content')
<form class="form-horizontal" action="/form" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<fieldset>

<!-- Form Name -->
<legend>&nbsp;Visitor Form</legend>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<input type="hidden" name="user_id" value="{{ $id }}">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name</label>  
  <div class="col-md-4"> 
  <input id="textinput" name="name" type="text" placeholder="" class="form-control input-md" value="{{ $name }}" disabled> 
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ic">IC/Passport Number</label>  
  <div class="col-md-4">
  <input id="textinput" name="ic" type="text" placeholder="" class="form-control input-md" value="{{ $ic }}" disabled>    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="phone">Telephone</label>  
  <div class="col-md-4">
  <input id="textinput" name="phone" type="text" placeholder="" class="form-control input-md" value="{{ $phone }}" disabled>    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="tenant">Tenant</label>
  <div class="col-md-4">
    <select id="tenant" name="tenant" class="form-control">
      <option value="">Select</option>
      <option value="1">Option one</option>
      <option value="2">Option two</option>
    </select>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="purpose">Purpose</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="purpose">{{ old('purpose') }}</textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>

@stop
{{-- comment --}}