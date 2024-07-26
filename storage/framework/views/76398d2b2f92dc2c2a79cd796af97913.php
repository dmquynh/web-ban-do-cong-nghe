<div id="chitietsp" class="mb-10">
    
    <div id="data" class="row mt-3">
        <div id="left" class="col-md-5 ms-5">
            <img src="<?php echo e($sp->hinh); ?>" class="img-fluid w-100" alt="">
        </div>
        <div id="right" class="col-md-6 ms-5 fw-bold">
            <h3 class="fs-4 fw-bold"><?php echo e($sp->ten); ?></h3>
            <span class="text-secondary fs-4"><del><?php echo e(number_format($sp->gia,0,",",".")); ?> VND</del></span><br>   
            <span class="text-danger  fs-3"><?php echo e(number_format($sp->gia_km,0,",",".")); ?> VND</span>   
            <p class="fs-5 mt-2">Cân nặng: <?php echo e($sp->can_nang); ?> kg</p>
            <p class="fs-5">Tính chất: <?php echo e($sp->tinh_chat); ?></p>
                <input type="number" class="form-control" style="width: 100px" value="1" aria-describedby="quantity" min="1">
                <button class="btn btn-primary mt-4" type="button">Mua ngay</button>
                <button class="btn btn-outline-danger mt-4" type="button">Thêm vào giỏ hàng</button>
        </div>
    </div>
</div>
<div class="row mt-5">
    <div class="col-lg-12">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                    data-bs-target="#description" type="button" role="tab" aria-controls="description"
                    aria-selected="true">Mô tả</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="reviews-tab" data-bs-toggle="tab"
                    data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews"
                    aria-selected="false">Bình
                    Luận</button>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content mt-4" id="myTabContent" style="height: 215px; overflow: hidden">
            <div class="tab-pane fade show active" id="description" role="tabpanel"
                aria-labelledby="description-tab">
                <div ng-repeat="bl in dsbl  | orderBy:'-date'| limitTo:limit" class="card border-0">
                    <div class="row g-0">
                        <div class="col-10">
                            <strong>Tổng quan:</strong> <br>
                            - Đây là một chiếc laptop siêu di động, kết hợp giữa hiệu suất mạnh mẽ và thiết kế cao cấp, lý tưởng cho các chuyên gia và sinh viên. <br>
                            
                            <strong>Đặc điểm nổi bật: </strong><br>
                            
                            + Hiệu năng mạnh mẽ: Với vi xử lý Intel® Core™ thế hệ thứ 12. <br>
                            + Màn hình chất lượng: Màn hình InfinityEdge 13.4 inch, độ phân giải từ Full HD+ đến Ultra HD+. <br>
                            + Thiết kế cao cấp: Mỏng nhẹ, bền bỉ, màu bạc bạch kim. <br>
                            + Thời lượng pin dài: Lên đến 12 giờ. <br>
                            + Kết nối hiện đại: Cổng Thunderbolt™ 4 và Wi-Fi 6. <br>
                            + Bảo mật tiên tiến: Cảm biến vân tay và webcam có cửa che bảo mật <br> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                <!-- Phần đánh giá và bình luận -->
                <h4>Bình Luận</h4>
                <!-- Form bình luận -->
                <form ng-submit="comment()">
                    <div class="mb-3">
                        <label for="comment" class="form-label text-danger" ng-show="!user">Vui lòng đăng nhập để bình luận !</label>
                        <textarea class="form-control" id="comment" rows="3" ng-model="content"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Gửi Bình Luận</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\xampp\htdocs\PHP3\ASM1\resources\views/chitietsp_a.blade.php ENDPATH**/ ?>