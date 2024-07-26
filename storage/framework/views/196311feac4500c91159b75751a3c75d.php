<div id="sphot" class="my-4">
    <h2 class="btn rounded-0 fs-5 mb-0 rounded-top-2 text-white" style="background-color: #0f57c3;">Sản phẩm hot</h2>
    <div class="card mb-3 border-2" style="background-color: #0f57c3;"></div>
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <?php $__currentLoopData = $sphot; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col">
            <div class="card border-primary shadow-lg">
                <img src="<?php echo e($sp->hinh); ?>" class="images py-2 m-2" alt="<?php echo e($sp->ten); ?>">
                <div class="card-body">
                    <h5 class="card-title fs-5 overflow-hidden" style="height: 50px;">
                        <a href="<?php echo e(url('chitietsp',[$sp->id])); ?>" class="text-decoration-none"><?php echo e($sp->ten); ?></a>
                    </h5>
                    <p class="card-text fs-6 text-secondary fw-bold">
                        <span class="text-danger "><?php echo e(number_format($sp->gia_km,0,",",".")); ?> VND</span>
                        <span class="text-secondary small"><del><?php echo e(number_format($sp->gia,0,",",".")); ?> VND</del></span>
                    </p>
                    <a href="/themvaogio/<?php echo e($sp->id); ?>/1" class="btn btn-primary">Mua ngay</a>
                    <a href="/themvaogio/<?php echo e($sp->id); ?>/1" class="btn btn-outline-danger">Thêm vào giỏ hàng</a>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH D:\xampp\htdocs\PHP3\ASM2\resources\views/sphot.blade.php ENDPATH**/ ?>