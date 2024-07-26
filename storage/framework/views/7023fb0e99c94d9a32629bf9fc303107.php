

<?php $__env->startSection('tieude'); ?>
    Giỏ hàng
<?php $__env->stopSection(); ?>

<?php $__env->startSection('noidung'); ?>
    <div class="container mt-4 ">
        <h1 class="mb-4">Giỏ hàng</h1>
        <table class="table table-bordered align-middle border-secondary-subtle m-2">
            <thead class="table-primary">
                <tr>
                    <th>Hình ảnh</th>
                    <th>Tên Sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td> <img src="<?php echo e($c['hinh']); ?>" alt="" style="width: 100px;"></td>
                        <td><?php echo e($c['ten']); ?></td>
                        <td><?php echo e(number_format($c['gia'], 0, ',', '.')); ?> VNĐ</td>
                        <td>
                            <input type='number' value="<?php echo e($c['soluong']); ?>"
                                class='form-control m-auto w-75 border-border-secondary shadow-none'>
                        </td>
                        <td><?php echo e(number_format($c['thanhtien'], 0, ',', '.')); ?> VNĐ</td>
                        <td> <a class="btn btn-sm btn-danger ms-5" href="/xoasptronggio/<?php echo e($c['id_sp']); ?>">Xóa</a></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="5">TỔNG THÀNH TIỀN</th>
                    <th><?php echo e(number_format($tongtien, 0, ',', '.')); ?> VNĐ</th>
                </tr>
            </tfoot>
        </table>
        <div class="text-end mb-4">
            <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Thanh toán</button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Thông tin giao hàng</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Họ và tên</label>
                                <input type="text" class="form-control" id="name" ng-model="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Số điện thoại</label>
                                <input type="text" class="form-control" id="phone" ng-model="phone" required>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Địa chỉ</label>
                                <input type="text" class="form-control" id="address" ng-model="address" required>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kiểm tra lại</button>
                        <form action="<?php echo e(url('/thanhtoan')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-primary">Xác nhận</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\PHP3\ASM2\resources\views/hiengiohang.blade.php ENDPATH**/ ?>