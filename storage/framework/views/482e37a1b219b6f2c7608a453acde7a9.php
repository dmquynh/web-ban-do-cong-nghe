<div class="row mt-3">
    <div class="col-md-9">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-inner rounded-1" style="height: 332px">
                <div class="carousel-item active" data-bs-interval="2000">
                    <img src="/img/bannerlaptop11.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="/img/bannerlaptop12.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="/img/bannerlaptop2.jpg" class="d-block w-100"  alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-black" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-black" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-header text-white fs-5" style="background-color: #0f57c3;">
                Loại sản phẩm
            </div>
            <ul class="list-group list-group-flush">
                <?php $__currentLoopData = $listnhasx; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nsx): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="list-group-item list-group-item-action nav-item">
                    <a class="nav-link active" href="<?php echo e(url('sptheonhasx',[$nsx->id])); ?>">
                        <strong><?php echo e($nsx->ten); ?></strong>
                    </a>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
</div><?php /**PATH D:\xampp\htdocs\PHP3\ASM1 - Copy\resources\views/banner.blade.php ENDPATH**/ ?>