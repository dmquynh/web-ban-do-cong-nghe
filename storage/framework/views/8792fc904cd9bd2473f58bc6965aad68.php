<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('tieude'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>

<body>
    <!-- nav -->
    <nav>
        <div class="navbar navbar-expand-lg navbar-dark" style="background-color: #017efc;">
            <div class="container py-2">
                <a class="navbar-brand" href="#!"><i class="fa-solid fa-laptop"></i> Laptop</a>
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
                        <li class="nav-item"><a class="nav-link active" href="/"><strong>TRANG CHỦ</strong></a></li>
                        <li class="nav-item"><a class="nav-link active" href="/lienhe"><strong>LIÊN HỆ</strong></a></li>
                        <li class="nav-item"><a class="nav-link active" href="/gopy"><strong>GÓP Ý</strong></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- home -->
    <div class="container py-4">
        <?php echo $__env->yieldContent('noidung'); ?>
    </div>
    <!-- footer -->
    <footer class="text-white py-4 mt-4 " style="background-color: #0f57c3;">
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
                        <p class="me-3"><i class="fab fa-facebook fa-2xl" style="color: #fff;"></i></p>
                        <p class="me-3"><i class="fa-brands fa-facebook-messenger fa-2xl" style="color: #fff;"></i></p>
                        <p class="me-3"><i class="fab fa-youtube fa-2xl" style="color: #fff;"></i></p>
                        <p><i class="fab fa-twitter fa-2xl" style="color: #fff;"></i></p>
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

</html><?php /**PATH D:\xampp\htdocs\PHP3\ASM1 - Copy\resources\views/layout.blade.php ENDPATH**/ ?>