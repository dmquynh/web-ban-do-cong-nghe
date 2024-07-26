


<?php $__env->startSection('tieude'); ?>
Cập nhật sản phẩm
<?php $__env->stopSection(); ?>

<?php $__env->startSection('noidung'); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<form action="/admin/sp/capnhat/<?php echo e($sanpham->id); ?>" method="post" class="col-7 m-auto">
    <div class="mb-3">
        <label for="ten" class="form-label">Tên:</label>
        <input type="text" name="ten" class="form-control" value="<?php echo e($sanpham->ten); ?>">
    </div>
    <div class="mb-3">
        <label for="gia" class="form-label">Giá:</label>
        <input type="text" name="gia" class="form-control" value="<?php echo e($sanpham->gia); ?>">
    </div>
    <div class="mb-3">
        <label for="gia_km" class="form-label">Giá KM:</label>
        <input type="text" name="gia_km" class="form-control" value="<?php echo e($sanpham->gia_km); ?>">
    </div>
    <div class="mb-3">
        <label for="hinh" class="form-label">URL Hình:</label>
        <input type="text" name="hinh" class="form-control" value="<?php echo e($sanpham->hinh); ?>">
    </div>
    <div class="mb-3">
        <label for="id_nhasx" class="form-label">Nhà sản xuất:</label>
        <select name="id_nhasx" class="form-control">
            <?php $__currentLoopData = $nhasx_arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sx): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($sx->id); ?>" <?php echo e($sx->id == $sanpham->id_nhasx ? 'selected' : ''); ?>><?php echo e($sx->ten); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <div class="mb-3">
            <label for="an_hien" class="form-label">Ẩn hiện:</label>
            <input type="radio" name="an_hien" value="1" <?php echo e($sanpham->an_hien == 1 ? 'checked' : ''); ?>>Hiện</input>
            <input type="radio" name="an_hien" value="0" <?php echo e($sanpham->an_hien == 0 ? 'checked' : ''); ?>>Ẩn</input>
    </div>
    <button type="submit" class="btn btn-primary">Cập nhật</button>
    <?php echo csrf_field(); ?>
</form>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\PHP3\ASM2\resources\views/admin/capnhat.blade.php ENDPATH**/ ?>