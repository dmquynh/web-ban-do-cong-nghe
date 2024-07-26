

<?php $__env->startSection('tieude'); ?>
Sản phẩm của <?php echo e($ten_nhasx); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('noidung'); ?>
    
  
    <?php echo $__env->make('sptheonhasx_a', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('sptrongloai', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\PHP3\ASM1\resources\views/sptheonhasx.blade.php ENDPATH**/ ?>