

<?php $__env->startSection('tieude'); ?>
    Cập nhật sản phẩm
<?php $__env->stopSection(); ?>

<?php $__env->startSection('noidung'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <h2 class="justify-content-center align-items-center d-flex">Đăng Nhập</h2>

    <form action="<?php echo e(url('admin/dangnhap')); ?>" method="post"
        class="m-auto col-10 border border-primary p-3 mt-3 shadow-lg fs-5">
        <?php echo csrf_field(); ?>
        <?php if(session()->has('thongbao')): ?>
            <div class="alert alert-danger p-3 mx-auto my-3 col-10 fs-5 text-center">
                <?php echo session('thongbao'); ?>

            </div>
        <?php endif; ?>
        <div class='mb-3'> <label> Email</label>
            <input name="email" type="email" class="form-control border-primary shadow-none">
        </div>
        <div class='mb-3'> <label> Mật khẩu</label>
            <input type="password" class="form-control  border-primary shadow-none" id="password" name="password">
        </div>
        <div class='mb-3'>
            <button type="submit" class="btn btn-primary py-2 px-5 border-0">Đăng nhập</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\PHP3\ASM2\resources\views/admin/login.blade.php ENDPATH**/ ?>