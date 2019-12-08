<!DOCTYPE html>
<html>
<head>
	<title><?php echo $__env->yieldContent('title'); ?></title>
	
	<link href=“https://fonts.googleapis.com/css?family=Raleway:300,400,500,700” rel=“stylesheet”>
	<link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="/css/index.css">
	<link rel="stylesheet" href="/css/master.css">
	<link rel="stylesheet" href="/css/stylesClara.css">

	<link rel="icon" type="favicon" href="images/flavicon.ico">
</head>

<body>
	<header>
		<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>     
	</header>

<!-- MAIN CONTENT -->
	<main>
		<?php echo $__env->yieldContent('main'); ?>
	</main>


	<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 


	<script type="text/javascript" src="/js/app.js"></script>

</body>
</html><?php /**PATH C:\Program Files\laravel-master\laravel-master\jcj_tenis\resources\views/layout.blade.php ENDPATH**/ ?>