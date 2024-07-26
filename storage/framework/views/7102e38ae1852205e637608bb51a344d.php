

<?php $__env->startSection('tieude'); ?>
    Danh sách nhà sx
<?php $__env->stopSection(); ?>

<?php $__env->startSection('noidung'); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<h1>Danh sách nhà sản xuất</h1>
<?php if(session('thongbao')): ?>
    <div class="alert alert-success"><?php echo e(session('thongbao')); ?></div>
<?php endif; ?>
<a href="<?php echo e(route('nhasx.them')); ?>" class="btn btn-primary mb-4 mt-4">Thêm nhà sản xuất</a>
<table class="table table-striped table-bordered bg-white">
    <thead >
        <tr class="text-center" >
            <th class="text-white"style="background-color: #0c5cb5">ID</th>
            <th class="text-white"style="background-color: #0c5cb5">Tên</th>
            <th class="text-white"style="background-color: #0c5cb5">Thứ tự</th>
            <th class="text-white"style="background-color: #0c5cb5">Ẩn hiện</th>
            <th class="text-white"style="background-color: #0c5cb5">Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="text-center">
                <td><?php echo e($item->id); ?></td>
                <td><?php echo e($item->ten); ?></td>
                <td><?php echo e($item->thu_tu); ?></td>
                <td><?php echo e($item->an_hien); ?></td>
                <td class="w-25">
                    <a href="<?php echo e(route('nhasx.capnhat', $item->id)); ?>" class="btn btn-success">Cập nhật</a>
                    <form action="<?php echo e(route('nhasx.xoa', $item->id)); ?>" method="POST" style="display:inline-block;">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<div class="d-flex justify-content-center align-content-center"><?php echo e($data->links()); ?></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\PHP3\ASM2\resources\views/admin/dsnhasx.blade.php ENDPATH**/ ?>