@extends('app')

@section('content')


		 <h1 id="header">{{ $item->item_name }}</h1>

		 <hr>

			 <h3>Created at: {{ $item->date_created->diffForHumans() }}</h3>

			 @if($item->done!=true)
			 	<h3>Completed at: Pending completion</h3>
			 @else
			 	<h3>Completed at: {{ $item->updated_at->diffForHumans() }}</h3>
			 @endif

			 @if($item->done!=true)
			 	<h3>Status: Not Completed</h3>
			 @else
			 	<h3>Status: Completed</h3>
			 @endif

@stop