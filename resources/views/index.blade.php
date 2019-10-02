@extends('layouts.baseLayout');

@section('content')

	@foreach ($places as $place)
		<div class="city">
			<p>
				<strong>{{ $place -> name }}</strong><br>
				{{ $place -> address }}, {{ $place -> city }} ({{ $place -> nation }})<br>
			</p>
		</div>
	@endforeach

@endsection
