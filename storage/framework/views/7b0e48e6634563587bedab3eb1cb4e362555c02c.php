<!DOCTYPE html>
<html>
<head>
	<title>JCJ / Detalle de producto</title>
	<link rel="stylesheet" type="text/css" href="/css/indexClara.css">
	<link rel="stylesheet" type="text/css" href="/css/master.css">
	<link rel="stylesheet" type="text/css" href="/css/footer.css">
	<link rel="stylesheet" type="text/css" href="/css/index.css">
</head>
<body>
	<header>
		<nav class="d-flex navbar navbar-expand-lg navbar-dark bg-dark ">
		  <div class="d-flex flex-grow-1">
		      <span class="w-100 d-lg-none d-block"><!-- hidden spacer to center brand on mobile --></span>
		      <a href="index.php"><img class="__imglogo" src="images/op3ok.svg" alt="JCJ tenis profesional"></a>

		      <div class="w-100 text-right">
		        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar7">
		            <span class="navbar-toggler-icon"></span>
		        </button>
		      </div>
		  </div>

		  <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar7">
		      <ul class="navbar-nav flex-nowrap __navbar text-center">
		          <li class="nav-item dropdown pr-0">
		            <a class="nav-link dropdown-toggle" href="raquetas.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		            Raquetas
		            </a>
		            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		              <a class="dropdown-item" href="raquetas-babolat.php">Babolat</a>
		              <a class="dropdown-item" href="raquetas-tecnifibre.php">Tecnifibre</a>
		              <a class="dropdown-item" href="raquetas-head.php">Head</a>
		              <a class="dropdown-item" href="raquetas-wilson.php">Wilson</a>
		              <a class="dropdown-item" href="raquetas-yonex.php">Yonex</a>
		              <a class="dropdown-item" href="raquetas.php">Ver todo</a>
		            </div>
		          </li>

		          <li class="nav-item dropdown pr-0">
		            <a class="nav-link dropdown-toggle" href="pelotas.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		            Pelotas
		            </a>
		            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		              <a class="dropdown-item" href="pelotas-head.php">Head</a>
		              <a class="dropdown-item" href="pelotas-penn.php">Penn</a>
		              <a class="dropdown-item" href="pelotas-wilson.php">Wilson</a>
		              <a class="dropdown-item" href="pelotas.php">Ver todo</a>
		          </li>

		          <li class="nav-item dropdown pr-0">
		            <a class="nav-link dropdown-toggle" href="cuerdas.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		            Cuerdas
		            </a>
		            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		            <a class="dropdown-item" href="cuerdas-luxilon.php">Luxilon</a>
		            <a class="dropdown-item" href="cuerdas-kirschbaum.php">Kirschbaum</a>
		            <a class="dropdown-item" href="cuerdas-solinco.php">Solinco</a>
		            <a class="dropdown-item" href="cuerdas.php">Ver todo</a>
		          </li>

		          <li class="nav-item dropdown pr-0">
		            <a class="nav-link dropdown-toggle" href="bolsos.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		            Bolsos
		            </a>
		            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		            <a class="dropdown-item" href="bolsos-babolat.php">Babolat</a>
		            <a class="dropdown-item" href="bolsos-head.php">Head</a>
		            <a class="dropdown-item" href="bolsos-tecnifibre.php">Tecnifibre</a>
		            <a class="dropdown-item" href="bolsos-wilson.php">Wilson</a>
		            <a class="dropdown-item" href="bolsos-yonex.php">Yonex</a>
		            <a class="dropdown-item" href="bolsos.php">Ver todo</a>
		          </li>
		          <li class="nav-item">
		           <a class="nav-link" href="accesorios.php">Accesorios</a>
		         </li>

		        <div id="products">
		        </div>
		        

	          <form class="form-inline my-2 my-md-0 my-lg-0 d-flex flex-row justify-content-center" id="loginSection">
	            <li class="nav-item o_navitem">
	              <a href="login.php" class="nav-link">Ingresar</a>
	            </li>

	            <li class="nav-item o_navitem">
	              <a href="register.php" class="nav-link">Crear cuenta</a>
	            </li>

	            <li class="nav-item o_navitem pr-0">
	              <a href="carrito.php"><img src="images/shopping-cart-solid.svg" alt="shopping" width="30px"></a>
	            </li>
	          </form>
		      </ul>
		  </div>
		</nav>
	</header>

	<section>
		<?php echo $__env->yieldContent('index'); ?>
	</section>

	<footer>
		<h3>Aca va el footer</h3>
	</footer>

</body>
</html><?php /**PATH C:\Program Files\laravel-master\laravel-master\jcj_tenis\resources\views/productDetail.blade.php ENDPATH**/ ?>