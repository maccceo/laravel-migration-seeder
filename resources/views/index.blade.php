@extends('layouts.baseLayout');

@section('content')

	<a href="{{ route('plc.create') }}">Aggiungi elementi</a>

	@foreach ($places as $place)
		<div class="city">
			<p>
				<strong>{{ $place -> name }}</strong><br>
				{{ $place -> address }}, {{ $place -> city }} ({{ $place -> nation }})<br>
			</p>
		</div>
	@endforeach

@endsection
