@extends('app')

@section('content')
	 
		 <h1 id="header">Tasks</h1>

		 <hr>
		 <div class="row" id="items_list">
		 @if(!$items->count())
		 	<h2>You have no items yet</h2>
	 	 @else
		 <ul class="list-unstyled">
		 	@foreach($items as $item)
		 		<li>
		 		{!! Form::open(['method' => 'DELETE', 'url' => ['tasks', $item->id]]) !!}

				 		<div class="col-sm-10">
				 			<h2>
					 			<a href="{{ url('/tasks', $item->id) }}" id="itemName">
					 				<span class="item {{ $item -> done ? ' done' : '' }} "</span>
					 				{{ $item->item_name }}
					 			</a>
					 		</h2>
					 		<p>{{ $item->date_created }}</p>
					 		
					 	</div>
					 	
					 	@if($item->done!=true)
                            {!! Form::model($item, ['method' => 'PUT', 'url' => array('tasks', $item->id) ]) !!}
                            	{!! Form::submit('Mark as Done', ['class' => 'btn btn-info btn-xs', 'id' => 'doneButton']) !!}
                        	{!! Form::close() !!}
                    	@else
                    		{!! Form::model($item, ['method' => 'PUT', 'url' => array('tasks', $item->id) ]) !!}
                            	{!! Form::submit('Mark as Undone', ['class' => 'btn btn-info btn-xs', 'id' => 'doneButton']) !!}
                        	{!! Form::close() !!}
                    	@endif

                        	{!! Form::model($item, ['method' => 'DELETE', 'url' => array('tasks', $item->id) ]) !!}
    							{!! Form::submit('Delete', array('class' => 'btn btn-xs btn-danger', 'id' =>'deleteButton')) !!}
							{!! Form::close() !!}

                        	<hr>

			 	{!! Form::close() !!}
				</li>
		 	@endforeach
	 	 </ul>
	 	 @endif
	 	</div>
@stop