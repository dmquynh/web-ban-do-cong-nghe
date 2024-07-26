

<?php $__env->startSection('tieude'); ?>
    Đăng ký thành viên
<?php $__env->stopSection(); ?>

<?php $__env->startSection('noidung'); ?>
    <h2 class="justify-content-center align-items-center d-flex">Đăng Ký</h2>

    <form action="<?php echo e(url('dangky')); ?>" method="POST" class="m-auto col-10 border border-primary p-3 mt-3 shadow-lg fs-5">
        <?php echo csrf_field(); ?>
        <?php if(session()->has('thongbao')): ?>
            <div class="alert alert-primary mx-auto my-3 fs-5  text-center">
                <?php echo session('thongbao'); ?>

            </div>
        <?php endif; ?>
        <div class="mb-3">
            <label for="name" class="form-label">Tên</label>
            <input value="<?php echo e(old('name')); ?>" type="text" class="form-control border-primary shadow-none" id="name"
                name="name">
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input value="<?php echo e(old('email')); ?>" type="text" class="form-control border-primary shadow-none" id="email"
                name="email">
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mật khẩu</label>
            <input value="<?php echo e(old('password')); ?>" type="password" class="form-control border-primary shadow-none"
                id="password" name="password">
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Xác nhận mật khẩu</label>
            <input value="<?php echo e(old('password')); ?>" type="password" class="form-control border-primary shadow-none"
                id="password_confirmation" name="password_confirmation">
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-3">
            <label for="dien_thoai" class="form-label">Điện thoại</label>
            <input value="<?php echo e(old('dien_thoai')); ?>" type="text" class="form-control border-primary shadow-none"
                id="dien_thoai" name="dien_thoai">
            <?php $__errorArgs = ['dien_thoai'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <button type="submit" class="btn btn-primary">Đăng Ký</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\PHP3\ASM2\resources\views/dangky.blade.php ENDPATH**/ ?>