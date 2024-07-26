
<?php $__env->startSection('tieude'); ?>
    Danh sản phẩm
<?php $__env->stopSection(); ?>

<?php $__env->startSection('noidung'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    <h1>Danh sách sản phẩm</h1>
    <?php if(session()->has('thongbao')): ?>
        <div class="alert alert-success mx-auto my-3  fs-5  text-center">
            <?php echo session('thongbao'); ?>

        </div>
    <?php endif; ?>

    <tr>
        <td colspan="6">
            <div class="d-flex justify-content-between mb-4 mt-4">
                <a class="btn btn-primary" href="<?php echo e(url('admin/sp/them')); ?>" style="width: 150px;">Thêm sản phẩm</a>
                <div class="d-flex">
                    <select id="selLoai" class="form-select me-2" style="border: 1px solid #007bff; color: #007bff; width: auto;" onchange="locsp(this.value)">
                        <option value="-1">Lọc theo NSX</option>
                        <?php $__currentLoopData = $nhasx_arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($loai->id); ?>" <?php echo e($loai->id == $id_nhasx ? 'selected' : ''); ?>>
                                <?php echo e($loai->ten); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <select id="trangthai" class="form-select" style="border: 1px solid #007bff; color: #007bff; width: auto;" onchange="loctrangthai(this.value)">
                        <option value="chuaxoa" <?php echo e($trangthai == 'chuaxoa' ? 'selected' : ''); ?>>Sản phẩm hiện hành</option>
                        <option value="daxoa" <?php echo e($trangthai == 'daxoa' ? 'selected' : ''); ?>>Sản phẩm đã xóa</option>
                    </select>
                </div>
            </div>
            <script>
                function loctrangthai(tt) {
                    document.location = `/admin/sanpham?trangthai=${tt}`;
                }
            </script>
    
            <script>
                function locsp(id_nhasx) {
                    document.location = `/admin/sanpham?id_nhasx=${id_nhasx}`;
                }
            </script>
        </td>
    </tr>
    
    <table class="table table-striped table-bordered bg-white">
        <thead style="background-color: #0c5cb5">
            <tr class="text-center">
                <th class="text-white">Hình ảnh</th>
                <th class="text-white">Tên sản phẩm</th>
                <th class="text-white">Sản xuất</th>
                <th class="text-white">Trạng thái</th>
                <th class="text-white">Giá gốc</th>
                <th class="text-white">Giá KM</th>
                <th class="text-white">Ngày tạo</th>
                <th class="text-white">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="text-center align-middle">
                    <td><img src="<?php echo e($sp->hinh); ?>" alt="<?php echo e($sp->ten); ?>" class="img-fluid"
                            style="max-width: 100px;"></td>
                    <td><?php echo e($sp->ten); ?></td>
                    <td><?php echo e($sp->nhasx_arr->ten); ?></td>
                    <td>
                        <?php if($sp->an_hien == 1): ?>
                            <span class="badge bg-success">Hiện</span>
                        <?php else: ?>
                            <span class="badge bg-danger">Ẩn</span>
                        <?php endif; ?>
                    </td>
                    <td><?php echo e(number_format($sp->gia, 0, ',', '.')); ?>đ</td>
                    <td><?php echo e(number_format($sp->gia_km, 0, ',', '.')); ?>đ</td>
                    <td><?php echo e(date('d/m/Y', strtotime($sp->ngay))); ?></td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-success me-2" href="<?php echo e(url('admin/sp/capnhat', $sp->id)); ?>"
                                style="width: 90px;">Cập nhật</a>
                            <form method="POST" action="<?php echo e(url('admin/sp/xoa', $sp->id)); ?>">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-danger" style="width: 90px;"
                                    onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">Xóa</button>
                            </form>
                        </div>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <div class="d-flex justify-content-center align-content-center"><?php echo e($data->links()); ?></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\PHP3\ASM2\resources\views/admin/danhsach.blade.php ENDPATH**/ ?>