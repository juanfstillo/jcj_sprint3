<?php $__env->startSection('title'); ?>
	Estas viendo <?php echo e($products->count()); ?> productos
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>



<ul>  
  <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li> 
      <?php echo e($product->name_prod); ?> 
    </li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

	

  
<?php $__env->stopSection(); ?>	
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\laravel-master\laravel-master\jcj_tenis\resources\views/products.blade.php ENDPATH**/ ?>