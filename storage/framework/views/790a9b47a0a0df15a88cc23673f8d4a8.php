<div class="col-md-3 mt-3 ">
    <div class="card ">
        <div class="card-header text-white fs-5" style="background-color: #0f57c3;">
            Loại sản phẩm
        </div>
        <ul class="list-group list-group-flush">
            <?php $__currentLoopData = $listnhasx; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nsx): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="list-group-item list-group-item-action nav-item ">
                <a class="nav-link active" href="<?php echo e(url('sptheonhasx',[$nsx->id])); ?>">
                    <strong><?php echo e($nsx->ten); ?></strong>
                </a>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div>
</div>
<?php /**PATH D:\xampp\htdocs\PHP3\ASM1\resources\views/sptrongloai.blade.php ENDPATH**/ ?>