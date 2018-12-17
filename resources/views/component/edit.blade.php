@extends('layouts.app')

@section('content')
	<div class="container">
		<h1>Update Component</h1>

		{!! Form::model($components, ['route' => ['comp.update', $components->id]]) !!}
			{{method_field('PUT')}}
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
				<input type="submit" class="btn btn-primary" value="Update">
			</div>

		{{Form::close()}}

	</div> 
	
@endsection