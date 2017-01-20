@extends('layouts.app')

@section('content')
	<form class="form-horizontal" action="{{ route('visitors.store') }}" method="post" enctype="multipart/form-data">
		
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

		<input type="hidden" name="user_id" value="{{ $user->id }}">
		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="name">Name</label>  
		  <div class="col-md-4"> 
		  <input id="name" name="name" type="text" placeholder="" class="form-control input-md" value="{{ $user->name }}" disabled> 
		  </div>
		</div>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="ic">IC/Passport Number</label>  
		  <div class="col-md-4">
		  <input id="ic" name="ic" type="text" placeholder="" class="form-control input-md" value="{{ $user->ic }}" disabled>    
		  </div>
		</div>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="phone">Telephone</label>  
		  <div class="col-md-4">
		  <input id="phone" name="phone" type="text" placeholder="" class="form-control input-md" value="{{ $user->phone }}" disabled>    
		  </div>
		</div>

		<!-- Select Basic -->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="company_id">Company</label>
		  <div class="col-md-4">
		    <select id="company_id" name="company_id" class="form-control">
	    	<option value="">Please Select</option>
		    @foreach($companies as $company)
		    	<option value="{{ $company->id }}"  {{ (old('company_id') == $company->id) ? "selected":"" }}>{{ $company->name }}</option>
		    @endforeach
		    </select>
		  </div>
		</div>

		<!-- Textarea -->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="purpose">Purpose</label>
		  <div class="col-md-4">                     
		    <textarea class="form-control" id="purpose" name="purpose">{{ old('purpose') }}</textarea>
		  </div>
		</div>

		<!-- Button -->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="singlebutton"></label>
		  <div class="col-md-4">
		    <button id="submitbutton" name="submitbutton" class="btn btn-primary">Submit</button>
		  </div>
		</div>

		</fieldset>
	</form>
@stop
