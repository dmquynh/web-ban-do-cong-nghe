


<?php $__env->startSection('tieude'); ?>
    Liên hệ
<?php $__env->stopSection(); ?>

<?php $__env->startSection('noidung'); ?>
<div class="container mt-4 mb-4">
    <div class="row">
        <div class="col-lg-8">
            <h1 class="mb-4">Liên hệ</h1>
            <form>
                <div class="mb-3">
                    <label>Họ và tên</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nội dung</label>
                    <textarea class="form-control" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Gửi</button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\PHP3\ASM1\resources\views/lienhe.blade.php ENDPATH**/ ?>