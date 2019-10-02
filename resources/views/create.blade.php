@extends('layouts.baseLayout');

@section('content')

	<a href="{{ route('plc.index') }}">BACK</a>
	<div class="edit">
	  <form method="post" action="{{ route('plc.store') }}">
	    @csrf
	    @method('POST')
	    <div class="form-group">
	      <label for="name">name</label>
	      <input type="text" name="name" value="">
	    </div>
	    <div class="form-group">
	      <label for="address">address</label>
	      <input type="text" name="address" value="">
	    </div>
	    <div class="form-group">
	      <label for="city">city</label>
	      <input type="text" name="city" value="">
	    </div>
	    <div class="form-group">
	      <label for="nation">nation</label>
	      <input type="text" name="nation" value="">
	    </div>
	    <button type="submit">Save</button>
	  </form>
	</div>

@endsection
