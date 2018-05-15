@extends('index')

@section('content')
	

	<h3>Category: {{ $category }}</h3>


<br><br>



	<ol>
	@foreach($instructions as $instruction)

		<h4><li><a href="/show/{{ $instruction->id }}">{{ $instruction->name }}</a></li></h4>




	@endforeach
	</ol>





@stop