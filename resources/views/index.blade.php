<!DOCTYPE html>
<html>
<head>
	<title>Hello</title>
<link rel="stylesheet" type="text/css" href="/css/app.css">
<meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>

		<header>

		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Wingo</a>
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">							
							
						
 
						<li><a href="/home">Home</a></li>
						<li><a href="/instructions">Instructions</a></li>
						

					</ul>
						<ul class="nav navbar-nav navbar-right">
						
						@if(auth()->guest())
							<li ><a
								href="/login">Login</a></li>
						@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ auth()->user()->name }} <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="/logout">Logout</a></li>
							</ul>
						</li> 

						@endif




					

					</ul>
				
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
	</header>


	<div class="container">


	@yield('content')





</div>
</body>















<script type="text/javascript" src="/js/app.js"></script>
<script type="text/javascript" src="/js/search.js"c></script>
</html>