@extends('app')

@section('content')

	<div class="row" id="WelcomePanel">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Welcome, {{ Auth::user()->name }}</div>

				<div class="panel-body">
					You are logged in!<br>
					<h2>
						<a href="{{ url('/create') }}">Create a New Task</a><br>
						<hr>
						<a href="{{ url('/tasks') }}">View your Tasks</a>
					</h2>
				</div>
			</div><!-- end of panel -->
		</div>
	</div><!-- end of WelcomePanel -->

@endsection
 