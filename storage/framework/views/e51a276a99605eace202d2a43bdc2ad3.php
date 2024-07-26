<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bảng Sản Phẩm</title>
<!-- Thêm liên kết CSS Bootstrap 5 -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
<style>
    .nav-link {
        color: white !important;
        padding: 15px 20px;
        display: block;
        text-align: left;
        transition: background-color 0.3s, color 0.3s;
    }
    .nav-link:hover {
        background-color: #003976;
        color: white !important;
    }
    .sidebar-logo {
        text-align: center;
        padding: 20px 0;
    }
    .sidebar-logo img {
        max-width: 100%;
        height: auto;
    }
</style>
</head>
<body>

    <div class="row" style="background-color: #DDDDDD">
        <div class="col-md-2" style="height: 700px;background-color: #0f57c3;">
            <nav class="nav flex-column">
                <form class="d-flex mx-auto border-0 w-100">
                    <div class="input-group">
                        <input class="form-control py-2" type="search" placeholder="Tìm kiếm..." aria-label="Search">
                        <button class="btn py-2 px-3" type="submit" style="background-color: #0c5cb5;">
                            <i class="fa-solid fa-magnifying-glass" style="color: white; "></i>
                        </button>
                    </div>
                </form>
                <hr>
                <a class="nav-link" href="#">Sản phẩm</a>
                <a class="nav-link" href="#">Danh mục</a>
                <a class="nav-link" href="#">Bình luận</a>
                <a class="nav-link" href="#">Người dùng</a>
                <a class="nav-link" href="#">Cài đặt</a>
            </nav>
        </div>
        <div class="col-md-10 p-5">
            <table class="table bg-white">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>Hình ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Danh mục</th>
                        <th>Trạng thái</th>
                        <th>Giá</th>
                        <th>Giới thiệu</th>
                        <th>Ngày tạo</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Vòng lặp cho mỗi sản phẩm -->
                    <tr>
                        <!-- Cột Hình ảnh -->
                        <td><img src="đường_dẫn_ảnh_sản_phẩm" alt="Tên sản phẩm" class="img-fluid" style="max-width: 100px;"></td>
                        <!-- Cột Tên sản phẩm -->
                        <td>Tên sản phẩm</td>
                        <!-- Cột Danh mục -->
                        <td>Danh mục</td>
                        <!-- Cột Trạng thái -->
                        <td><span class="badge bg-success">Đã đăng</span></td>
                        <!-- Cột Giá -->
                        <td>Giá sản phẩm</td>
                        <!-- Cột Giới thiệu -->
                        <td>Mô tả ngắn</td>
                        <!-- Cột Ngày tạo -->
                        <td>YYYY-MM-DD</td>
                    </tr>
                    <tr>
                        <!-- Cột Hình ảnh -->
                        <td><img src="đường_dẫn_ảnh_sản_phẩm" alt="Tên sản phẩm" class="img-fluid" style="max-width: 100px;"></td>
                        <!-- Cột Tên sản phẩm -->
                        <td>Tên sản phẩm</td>
                        <!-- Cột Danh mục -->
                        <td>Danh mục</td>
                        <!-- Cột Trạng thái -->
                        <td><span class="badge bg-success">Đã đăng</span></td>
                        <!-- Cột Giá -->
                        <td>Giá sản phẩm</td>
                        <!-- Cột Giới thiệu -->
                        <td>Mô tả ngắn</td>
                        <!-- Cột Ngày tạo -->
                        <td>YYYY-MM-DD</td>
                    </tr>
                    <!-- Kết thúc vòng lặp -->
                </tbody>
            </table>
        </div>
    </div>

<!-- Thêm liên kết JavaScript Bootstrap 5 -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/3f9f55f6d7.js" crossorigin="anonymous"></script>

</body>
</html>
<?php /**PATH D:\xampp\htdocs\PHP3\ASM1 - Copy\resources\views/admin/layout.blade.php ENDPATH**/ ?>