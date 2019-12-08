<!DOCTYPE html>
<html>
<head>
	<title><?php echo $__env->yieldContent('title'); ?></title>
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
          				
          				<?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          					<a class="dropdown-menu" href="#">  <?php echo e($cat->name_cat); ?></a>
       					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          				
          				</a>
          				<ul>
          					<li>
          						 <div class="dropdown-toggle" aria-labelledby="navbarDropdown">
					        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          						<a class="dropdown-item" href="#">  <?php echo e($producto->name_brand); ?></a>
       						 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				        </div>
          						
          					</li>
          				</ul>
				        
			      	</li>
			    </ul>
			</div>

		         
	</header>

	<main>
		

		<?php echo $__env->yieldContent('main'); ?>
	</main>

	<footer>
		<h3>Aca va el footer</h3>
	</footer>

</body>
</html><?php /**PATH C:\Program Files\laravel-master\laravel-master\jcj_tenis\resources\views/layout.blade.php ENDPATH**/ ?>