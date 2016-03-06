<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>@yield('titre')</title>

	<meta name="theme-color" content="#0c84e4">
	<meta name="description" content="PlanifProjet, gérez vos projets et vos tâches simplement et rapidement">
	<meta name="keywords" content="tache, projet, gestion, application de gestion, gestion de projet">
	<link rel="shortcut icon" href="{{ asset('/resources/assets/img/favicon.ico') }}" />
	<link href="{{ asset('/resources/assets/fonts/font-awesome.min.css') }}" rel="stylesheet">

	<link rel="stylesheet" type="text/css" title="material" href="{{ asset('/resources/assets/css/bootstrap.css') }}">

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
		</head>
		<body>
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="{{ route('projets.index') }}">PlanifProjet</a>
					</div>

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
					</div>
				</div>
			</nav>

			<div class="main">
				<div class="main-inner">
					<div class="container">
						<div class="row">
							<div id="alert">
								@if (Session::has('message_success'))
								<div class="alert alert-dismissible alert-success">
									<button type="button" class="close" data-dismiss="alert">×</button>
									{{ Session::get('message_success') }}
								</div>
								@elseif (Session::has('message_delete'))
								<div class="alert alert-dismissible alert-danger">
									<button type="button" class="close" data-dismiss="alert">×</button>
									{{ Session::get('message_delete') }}
								</div>
								@elseif (Session::has('message_modif'))
								<div class="alert alert-dismissible alert-info">
									<button type="button" class="close" data-dismiss="alert">×</button>
									{{ Session::get('message_modif') }}
								</div>
								@endif
							</div>
							@yield('contenu')
						</div>
					</div>
				</div>
			</div>


<!-- Le javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="{{ asset('/resources/assets/js/bootstrap.min.js') }}"></script>

	<script>
		setTimeout(function() {
			$('#alert').fadeOut('fast');
		}, 3000);
	</script>

</body>
</html>
