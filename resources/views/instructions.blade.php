@extends('index')

@section('content')

	<h1>Instructions</h1>
<br>
	<a href="/add" class="btn btn-primary">Add New Instruction</a>
<br>
<br>
	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Instruction</th>
				<th>Category</th>
				<th>Actions</th>
				
			</tr>
		</thead>
		<tbody>
			@foreach($instructions as $instruction)
				<tr>
					<td>{{ $instruction->id }}</td>
					<td>
						<a href="{{ route('instruction.show', $instruction->id) }}">
						{{ $instruction->name }}</a>
					</td>
						
					<td>{{ $instruction->category }}</td>
				
					<td>
						<a  class="btn btn-info btn-xs" href="{{ route('edit', $instruction->id) }}">
					Edit</a>
					

					<form  style="display: inline;" method="POST" action="{{ route('destroy', $instruction->id )}}">
						{!! csrf_field() !!}
						{!! method_field('DELETE') !!}
						<button class="btn btn-danger btn-xs" type="submit">Delete</button>
						
					</form>


					</td>
				</tr>

			@endforeach
		</tbody>
	</table>



@stop