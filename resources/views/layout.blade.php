<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>

	<link href=“https://fonts.googleapis.com/css?family=Raleway:300,400,500,700” rel=“stylesheet”>
	<link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/app.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/stylesClara.css">
	<link rel="stylesheet" href="css/master.css">


	<link rel="icon" type="favicon" href="img/__logo/flavicon.ico">
</head>

<body>
	<header>
		@include('navbar')
	</header>

<!-- MAIN CONTENT -->
	<main>
		@yield('main')
	</main>


	@include('footer')


	<script type="text/javascript" src="/js/app.js"></script>

</body>
</html>
