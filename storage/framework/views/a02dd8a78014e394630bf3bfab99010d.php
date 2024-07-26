


<?php $__env->startSection('tieude'); ?>
    Thêm nhà sản xuất
<?php $__env->stopSection(); ?>

<?php $__env->startSection('noidung'); ?>
<form action="<?php echo e(route('nhasx.capnhat_', $nhasx->id)); ?>" method="POST" class="col-7 m-auto">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <label for="ten">Tên:</label>
        <input type="text" name="ten" class="form-control" value="<?php echo e($nhasx->ten); ?>" required>
    </div>
    <div class="form-group">
        <label for="thu_tu">Thứ tự:</label>
        <input type="number" name="thu_tu" class="form-control" value="<?php echo e($nhasx->thu_tu); ?>" required>
    </div>
    <div class="form-group">
        <label for="an_hien">Ẩn hiện:</label>
        <select name="an_hien" class="form-control" required>
            <option value="1" <?php if($nhasx->an_hien == 1): ?> selected <?php endif; ?>>Hiện</option>
            <option value="0" <?php if($nhasx->an_hien == 0): ?> selected <?php endif; ?>>Ẩn</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Cập nhật</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\PHP3\ASM2\resources\views/admin/capnhatsx.blade.php ENDPATH**/ ?>