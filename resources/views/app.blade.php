<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>To-Do App</title>
	
	<!-- Custom CSS -->
	<link href="/css/styles.css" type="text/css" rel="stylesheet">
	
	<!-- Bootstrap CSS -->
	<link href="/css/app.css" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<link href="http://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default" id="navigation_bar">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#" id="navtext">SimpleDo.</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="/" id="navtext">Home</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="/auth/login" id="navtext">Login</a></li>
						<li><a href="/auth/register" id="navtext">Register</a></li>
					@else
						<li id="add"><a href="/tasks/create" id="navtext"><span class="glyphicon glyphicon-plus"></span> Add a Task</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" id="navtext" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="/auth/logout">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>
	
	<div class="container">

		@yield('content')

	</div><!-- end of container -->

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

	<!-- Custom Script -->
	<script src="/js/script.js"></script>

</body>
</html>
