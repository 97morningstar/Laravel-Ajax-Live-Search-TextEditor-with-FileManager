@extends('index')

@section('content')
	<h1>Procedures Manual for Wingo Service Company Inc, website: wingoservicecompanies.com</h1>
		<h3>Select a category or use the live search feature</h3>

			<form id="form">
			
			<div class="input-group">
				<input type="text" name="search" class="form-control pull-left">
				<span class="input-group-btn">
					<button type="submit" class="btn btn-default">Search</button>
				</span>
			</div>
		</form>

<h3>Categories: </h3>

	<div class="row">
		<ol>
		@foreach($instructions as $instruction)
			<h4><li><a href="/category/{{ $instruction->category }}/">{{$instruction->category }}</a></li></h4>
		@endforeach
		</ol>
	</div>


	<br>
	<h3>All Instructions</h3>

		<div class="row container">
			<table class="table">
				<thead>
					 <tr>
						<th>Name</th>
						<th>Category</th>
					  </tr>
				</thead>
				<tbody id="data">

					@foreach($all as $alls)
					<tr>
						<td> {{ $alls->name }}</td>
						<td> {{ $alls->category }}</td>
						<td><a href="/show/{{ $alls->id }}" class="btn btn-primary btn-sm">Show</a></td>
					<tr>
					@endforeach
				</tbody>
			</table>
		</div>





{{--
dd($instructions) --}}


@stop