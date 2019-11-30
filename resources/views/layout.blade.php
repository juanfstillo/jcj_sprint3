<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" type="text/css" href="/css/indexClara.css">
	<link rel="stylesheet" type="text/css" href="/css/master.css">
	<link rel="stylesheet" type="text/css" href="/css/footer.css">
	<link rel="stylesheet" type="text/css" href="/css/index.css">
</head>

<body>
	<header>
		<nav class="d-flex navbar navbar-expand-lg navbar-dark bg-dark ">
		  <div class="d-flex flex-grow-1">
		     <span class="w-100 d-lg-none d-block"></span>
		      <a href="index.php"><img class="__imglogo" src="img/op3ok.svg" alt="JCJ tenis profesional"></a>

		      <div class="w-100 text-right">
		        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar7">
		            <span class="navbar-toggler-icon"></span>
		        </button>
		      </div>
		  </div>

		  	<div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar7">
		      <ul class="navbar-nav flex-nowrap __navbar text-center">
		            
		            <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          				
          				@foreach($productos as $cat)
          					<a class="dropdown-menu" href="#">  {{ $cat->name_cat }}</a>
       					@endforeach
          				
          				</a>
          				<ul>
          					<li>
          						 <div class="dropdown-toggle" aria-labelledby="navbarDropdown">
					        @foreach($brands as $producto)
          						<a class="dropdown-item" href="#">  {{ $producto->name_brand }}</a>
       						 @endforeach
				        </div>
          						
          					</li>
          				</ul>
				        
			      	</li>
			    </ul>
			</div>

		         
	</header>

	<main>
		

		@yield('main')
	</main>

	<footer>
		<h3>Aca va el footer</h3>
	</footer>

</body>
</html>