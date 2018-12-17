@extends('layouts.app')

@section('content')
	<div class="container">
		<h1>Add New Component</h1>

		{!! Form::open(['method' => 'POST', 'route' => 'comp.store']) !!}

			<div class="form-group">
				{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Component Name'])!!}
			</div>
			<div class="form-group">
				{!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Component Description'])!!}
			</div>
			<div class="form-group">
				{!! Form::text('model_number', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Model Number'])!!}
			</div>
			<div class="form-group">
				{!! Form::text('quantity', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Quantity'])!!}
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Add">
			</div>

		{{Form::close()}}

	</div> 
	
@endsection