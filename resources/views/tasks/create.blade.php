@extends('app')

@section('content')


	 	<h1 id="header">Add a Task</h1>

	 	<hr>
	 	@include('errors.list')

	 	{!! Form::open(['url' => 'tasks', 'id' => 'create_form']) !!}
			 @include('tasks.form', ['submitBtnText' => 'Add Item'])
	 	{!! Form::close() !!}
		 

@stop