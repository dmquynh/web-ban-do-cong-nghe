

<?php $__env->startSection('tieude'); ?>
    Chi tiết <?php echo e($sp->ten); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('noidung'); ?>
    <?php echo $__env->make('chitietsp_a', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\PHP3\ASM2\resources\views/chitietsp.blade.php ENDPATH**/ ?>