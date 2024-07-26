

<?php $__env->startSection('tieude'); ?>
    Đăng nhập
<?php $__env->stopSection(); ?>

<?php $__env->startSection('noidung'); ?>
    <h2 class="justify-content-center align-items-center d-flex">Đăng Nhập</h2>
   
    <form action="<?php echo e(url('dangnhap')); ?>" method="POST"
    class="m-auto col-10 border border-primary p-3 mt-3 shadow-lg fs-5">
    <?php if(session('thongbao')): ?>
    <div class="alert alert-danger">
        <?php echo e(session('thongbao')); ?>

    </div>
<?php endif; ?>
    <?php echo csrf_field(); ?>
    <div class='mb-3'> <label> Email</label>
        <input value="<?php echo e(old('email')); ?>" name="email" type="email" class="form-control border-primary shadow-none">
    </div>
    <div class='mb-3'> <label> Mật khẩu</label>
        <input value="<?php echo e(old('password')); ?>" type="password" class="form-control  border-primary shadow-none" id="password" name="password">
    </div>
    <div class='mb-3'>
        <button type="submit" class="btn btn-primary py-2 px-5 border-0">Đăng nhập</button>
    </div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\PHP3\ASM2\resources\views/dangnhap.blade.php ENDPATH**/ ?>