<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <style>
        .navbar-nav .nav-link.active:hover {
            color: black;
            /* Màu nền khi hover */
        }
    </style>
</head>

<body>
    <!-- nav -->
    <nav>
        <div class="navbar navbar-expand-lg navbar-dark" style="background-color: #017efc;">
            <div class="container py-2">
                <a class="navbar-brand" href="#!"><i class="fa-solid fa-globe"></i> World News</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="d-flex mx-auto border-0 w-50">
                        <div class="input-group">
                            <input class="form-control py-2" type="search" placeholder="Tìm kiếm..." aria-label="Search">
                            <button class="btn py-2 px-3" type="submit" style="background-color: #0c5cb5;">
                                <i class="fa-solid fa-magnifying-glass" style="color: white; "></i>
                            </button>
                        </div>
                    </form>

                    <form class="d-flex">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-user"></i>
                                    Tài Khoản</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="">Tên người dùng</a></li>
                                    <li><a class="dropdown-item" href="#">Đăng Nhập</a></li>
                                    <li><a class="dropdown-item" href="#">Quên Mật Khẩu</a></li>
                                    <li><a class="dropdown-item" href="#">Đăng Ký Thành Viên</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Đăng Xuất</a></li>
                                    <li><a class="dropdown-item" href="#">Đổi Mật Khẩu</a></li>
                                    <li><a class="dropdown-item" href="#">Cập Nhật Hồ Sơ</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Đơn Hàng</a></li>
                                    <li><a class="dropdown-item" href="#">Hàng Đã Mua</a></li>
                                </ul>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
        <div class="navbar navbar-expand-lg navbar-dark" style="background-color: #0f57c3;">
            <div class="container">
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#"><strong>TRANG CHỦ</strong></a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#"><strong>DANH MỤC</strong></a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#"><strong>GÓP Ý</strong></a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#"><strong>TIN TỨC</strong></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- home -->
    <div class="container">
        <div class="row mt-4">
            <div class="col-sm-8">
                <div class="card mb-3 border-0">
                    <div class="row g-0 bg-body-secondary">
                        <div class="col-md-7">
                            <img src="<?php echo e(asset('img/tintuc5.webp')); ?>" alt="...">
                        </div>
                        <div class="col-md-5">
                            <div class="card-body">
                                <h5 class="card-title">Chạm ngưỡng 44 độ C, Việt Nam ghi nhận kỷ lục về nắng nóng năm 2024</h5>
                                <p class="card-text">Trong ngày 28.4, TP.Đông Hà (tỉnh Quảng Trị) phá vỡ các kỷ lục về nắng nóng trong năm 2024 khi ghi nhận nhiệt độ cao nhất...</p>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0">
                        <div class="col p-0">
                            <div class="card rounded-0">
                                <div class="card-body">
                                    <h5 class="card-title">Vụ thi thể khô trên sofa: Điện thoại bị tháo sim, ô tô cũng biến mất</h5>
                                    <p class="card-text">Theo lãnh đạo địa phương, quá trình điều tra vụ thi thể khô nằm trên ghế sofa, lực lượng chức năng phát hiện sim điện thoại bị tháo và xe ô tô của...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col p-0">
                            <div class="card rounded-0">
                                <div class="card-body">
                                    <h5 class="card-title">44 người chết vì tai nạn trong 2 ngày đầu nghỉ lễ 30.4 - 1.5</h5>
                                    <p class="card-text">Theo Ủy ban An toàn giao thông quốc gia, trong 2 ngày đầu dịp nghỉ lễ 30.4 - 1.5, toàn quốc xảy ra 131 vụ tai nạn giao thông, làm chết 44 người,...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col p-0">
                            <div class="card rounded-0">
                                <div class="card-body">
                                    <h5 class="card-title">Nữ sinh Trường ĐH Bách khoa mua nhà cho mẹ trước ngày tốt nghiệp</h5>
                                    <p class="card-text">Từng gọi vốn thành công tại Shark Tank với thương hiệu nến thơm Jaros Candle, Nguyễn Hoàn Triệu Vy, sinh viên Trường ĐH Bách khoa...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item bg-light border-5" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Tin mới</button>
                    </li>
                    <li class="nav-item bg-light" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Đọc
                            nhiều</button>
                    </li>
                    <li class="nav-item bg-light" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Tiêu
                            điểm</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <div class="card ">
                            <ul class="list-group">
                                <li class="list-group-item ">Quảng Bình: Tăng cường tiêm phòng bệnh dại cho chó, mèo</li>
                                <li class="list-group-item ">NSND Thanh Điền nghẹn ngào tiết lộ kỷ vật của cố nghệ sĩ Thanh
                                    Kim Huệ</li>
                                <li class="list-group-item ">Đề cử địa điểm nghỉ dưỡng tại Côn Đảo đẹp 'miễn bàn' cho dịp hè
                                    sắp tới</li>
                                <li class="list-group-item ">Bình Định: Bị phạt gần 50 triệu đồng do không chấp hành kiểm
                                    tra nồng độ cồn</li>
                                <li class="list-group-item ">Kỷ niệm về chiến thắng Điện Biên Phủ qua lời kể của cựu chiến
                                    binh 96 tuổi</li>
                                <li class="list-group-item ">CSGT sẽ mặc thường phục, bí mật nắm tình hình tài xế uống rượu,
                                    bia</li>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                        <div class="card ">
                            <ul class="list-group">
                                <li class="list-group-item ">Xét xử vụ Tân Hoàng Minh: Viện kiểm sát đề nghị trả tiền cho
                                    nhà đầu tư</li>
                                <li class="list-group-item ">Làm rõ trách nhiệm việc rừng bị giảm gần 400 ha tại Trung tâm
                                    bảo tồn voi</li>
                                <li class="list-group-item ">CLB Nam Định chiêu mộ tài năng trẻ Đình Bắc: Thực hư ra sao?
                                </li>
                                <li class="list-group-item ">VinHMS, công ty con của VinGroup mở rộng hoạt động sang
                                    Campuchia</li>
                                <li class="list-group-item ">Giá xăng dầu đồng loạt tăng từ 15 giờ chiều nay 21.3</li>
                            </ul>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                        <div class="card ">
                            <ul class="list-group">
                                <li class="list-group-item ">Mỹ nhân 'Fast & Furious' mất vai vì 'quá nóng bỏng'</li>
                                <li class="list-group-item ">'Lỡ hẹn với ngày xanh' tập 4: Duyên bị gạ tình, Hiệp giải vây?
                                </li>
                                <li class="list-group-item ">Mẹo Copy/Paste văn bản giữa iPhone và PC</li>
                                <li class="list-group-item ">Bắt giữ 16 người tụ tập lắc tài xỉu tại quán cà phê lúc nửa đêm
                                </li>
                                <li class="list-group-item ">NSND Thanh Điền nghẹn ngào tiết lộ kỷ vật của cố nghệ sĩ Thanh
                                    Kim Huệ</li>
                            </ul>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Bạn đọc -->
        <div class="row mt-4">
            <h2 class="mb-4">Bạn đọc</h2>
            <div class="col">
                <div class="card rounded-0">
                    <img src="<?php echo e(asset('img/tintuc6.webp')); ?>" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Vụ thi thể khô trên sofa: Điện thoại bị tháo sim, ô tô cũng biến mất</h5>
                        <p class="card-text">Theo lãnh đạo địa phương, quá trình điều tra vụ thi thể khô nằm trên ghế sofa, lực lượng chức năng phát hiện sim điện thoại bị tháo và xe ô tô của...</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card rounded-0 ">
                    <img src="<?php echo e(asset('img/tintuc7.webp')); ?>" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">44 người chết vì tai nạn trong 2 ngày đầu nghỉ lễ 30.4 - 1.5</h5>
                        <p class="card-text">Theo Ủy ban An toàn giao thông quốc gia, trong 2 ngày đầu dịp nghỉ lễ 30.4 - 1.5, toàn quốc xảy ra 131 vụ tai nạn giao thông, làm chết 44 người,...</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card rounded-0">
                    <img src="<?php echo e(asset('img/tintuc8.webp')); ?>" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nữ sinh Trường ĐH Bách khoa mua nhà cho mẹ trước ngày tốt nghiệp</h5>
                        <p class="card-text">Từng gọi vốn thành công tại Shark Tank với thương hiệu nến thơm Jaros Candle, Nguyễn Hoàn Triệu Vy, sinh viên Trường ĐH Bách khoa...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <footer class="text-white py-4 mt-4" style="background-color: #0f57c3;"     >
        <div class="container">
            <div class="row mt-4">
                <div class="col-md-3">
                    <h5>Thông tin liên hệ</h5>
                    <p>Địa chỉ: 123 Đường ABC, Thành phố XYZ</p>
                    <p>Điện thoại: 0123-456-789</p>
                    <p>Email: example@example.com</p>
                </div>
                <div class="col-md-3">
                    <h5>Hỗ trợ khách hàng</h5>
                    <p>Yêu cầu đổi trả</p>
                    <p>Hướng dẫn trả góp</p>
                    <p>Chính sách nhập khẩu</p>
                    <p>Những câu hỏi thường gặp</p>
                </div>

                <div class="col-md-3">
                    <h5>Thanh toán và vận chuyển</h5>
                    <p>Phương thức thanh toán</p>
                    <p>Chính sách vận chuyển</p>
                    <p>Thời gian giao hàng</p>
                    <p>Chính sách đổi trả</p>
                </div>
                <div class="col-md-3">
                    <h5>Kết nối cùng chúng tôi</h5>
                    <div class="d-flex mt-4">
                        <p class="me-3"><i class="fab fa-facebook fa-2xl" style="color: #005eff;"></i></p>
                        <p class="me-3"><i class="fa-brands fa-facebook-messenger fa-2xl" style="color: #5f34df;"></i></p>
                        <p class="me-3"><i class="fab fa-youtube fa-2xl" style="color: #ff0000;"></i></p>
                        <p><i class="fab fa-twitter fa-2xl" style="color: #74C0FC;"></i></p>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <hr>
            <br>
            <div class="row mt-4">
                <div class="col-md-12 text-center">
                    <p>Bản quyền © 2024. Tất cả quyền được bảo lưu.</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="https://kit.fontawesome.com/3f9f55f6d7.js" crossorigin="anonymous"></script>
</body>

</html><?php /**PATH D:\xampp\htdocs\PHP3\ASM1\resources\views/index.blade.php ENDPATH**/ ?>