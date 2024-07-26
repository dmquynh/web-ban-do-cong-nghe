


<?php $__env->startSection('tieude'); ?>
Thêm sản phẩm
<?php $__env->stopSection(); ?>

<?php $__env->startSection('noidung'); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<form action="/admin/sp/them" method="post" class="col-7 m-auto">
    <p> Tiêu đề: <input name="ten" class="form-control"></p>
    <p> Giá: <input name="gia" class="form-control"></p>
    <p> Giá khuyến mãi: <input name="gia_km" class="form-control"></p>
    <p> urlHinh: <input name="hinh" class="form-control"></p>
    <p> Nhà sản xuất:
        <select name="id_nhasx"  class="form-control">
            <?php $__currentLoopData = $nhasx_arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nhasx): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($nhasx->id); ?>"><?php echo e($nhasx->ten); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </p>
    <div class="mb-3">
        <label for="an_hien" class="form-label">Ẩn hiện:</label>
        <input type="radio" name="an_hien" value="1">Hiện</input>
        <input type="radio" name="an_hien" value="0">Ẩn</input>
    </div>
    <p><button type="submit" class="btn btn-primary">Thêm sản phẩm</button></p>
    <?php echo csrf_field(); ?>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\PHP3\ASM2\resources\views/admin/themsp.blade.php ENDPATH**/ ?>