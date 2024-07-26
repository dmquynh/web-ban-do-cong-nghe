

<?php $__env->startSection('tieude'); ?>
Thông báo
<?php $__env->stopSection(); ?>

<?php $__env->startSection('noidung'); ?>
<?php if(session()->has('thongbao')): ?>
<div class="alert alert-danger p-5 shadow-1g border-2 border-danger fs-3 text-center">
<h1>Thông báo</h1>
<p><?php echo e(Session::get('thongbao')); ?></p>
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\PHP3\ASM1\resources\views/thongbao.blade.php ENDPATH**/ ?>