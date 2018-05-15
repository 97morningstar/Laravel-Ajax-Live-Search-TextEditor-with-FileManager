@extends('index')

@section('content')

	<h1>Instructions</h1>

	<div>
		<h3>{{ $instruction->name }}</h3>
		<h4>Category: {{ $instruction->category }}</h4>
		{!! $instruction->content !!}

	</div>

@stop