@extends('layouts.app')

@section('content')

	<div class="container">
		<h3>List of Components</h3>
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Description</th>
					<th>Model Number</th>
					<th>Quantity</th>
					<th>Date</th>
					<th>Modify</th>
				</tr>
			</thead>

			<tbody>
			@foreach($components as $component)
				<tr>
					<td>{{$loop->iteration}}</td>
					<td>{{$component->name}}</td>
					<td>{{$component->description}}</td>
					<td>{{$component->model_number}}</td>
					<td>{{$component->quantity}}</td>
					<td>{{$component->created_at}}</td>
					<td>
						<a href="{{route('comp.edit', $component->id)}}"><button class="btn btn-primary">Edit</button></a>

						<form method="post" action="{{route('comp.destroy', $component->id)}}" class="inline-form">
							{{method_field('delete')}}
							{{csrf_field()}}
							<input class="btn btn-danger" type="submit" value="Delete">
						</form>
						
						<a href="{{route('comp.show', $component->id)}}"><button class="btn btn-primary">View</button></a>
					</td>
				</tr>
			@endforeach
			</tbody>	
		</table>
	</div>

@endsection