<div id="chitietsp" class="mb-10">
    {{-- <h2 class="p-2 rounded-0 rounded-top-1 fs-5 mb-0 text-white" style="background-color: #0f57c3;">Chi tiết {{$sp->ten}}</h2>
    <div class="card mb-3 border-2" style="background-color: #0f57c3;"></div> --}}
    @if (session()->has('thongbao'))
    <div class="alert alert-primary mx-auto my-3 fs-5  text-center">
        {!! session('thongbao') !!}
        </div>
@endif
    <div id="data" class="row mt-3">
        <div id="left" class="col-md-5 ms-5">
            <img src="{{ $sp->hinh }}" class="img-fluid w-100" alt="">
        </div>
        <div id="right" class="col-md-6 ms-5 fw-bold">
            <h3 class="fs-4 fw-bold">{{ $sp->ten }}</h3>
            <span class="text-secondary fs-4"><del>{{ number_format($sp->gia, 0, ',', '.') }} VND</del></span><br>
            <span class="text-danger  fs-3">{{ number_format($sp->gia_km, 0, ',', '.') }} VND</span>
            <p class="fs-5 mt-2">Cân nặng: {{ $sp->can_nang }} kg</p>
            <p class="fs-5">Tính chất: {{ $tc->ten }}</p>
            <input type="number" class="form-control" style="width: 100px" value="1" aria-describedby="quantity" min="1">
            <a href="/themvaogio/{{ $sp->id }}/1" class="btn btn-primary mt-4">Mua ngay</a>
            <a href="/themvaogio/{{ $sp->id }}/1" class="btn btn-outline-danger mt-4">Thêm vào giỏ hàng</a>
        </div>
    </div>
</div>
<div class="row mt-5">
    <div class="col-lg-12">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description"
                    type="button" role="tab" aria-controls="description" aria-selected="true">Mô tả</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button"
                    role="tab" aria-controls="reviews" aria-selected="false">Bình
                    Luận</button>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content mt-4" id="myTabContent" >
            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab" style="height: 215px; overflow: hidden">
                <div ng-repeat="bl in dsbl  | orderBy:'-date'| limitTo:limit" class="card border-0">
                    <div class="row g-0">
                        <div class="col-10">
                            <strong>Tổng quan:</strong> <br>
                            - Đây là một chiếc laptop siêu di động, kết hợp giữa hiệu suất mạnh mẽ và thiết kế cao cấp,
                            lý tưởng cho các chuyên gia và sinh viên. <br>

                            <strong>Đặc điểm nổi bật: </strong><br>

                            + Hiệu năng mạnh mẽ: Với vi xử lý Intel® Core™ thế hệ thứ 12. <br>
                            + Màn hình chất lượng: Màn hình InfinityEdge 13.4 inch, độ phân giải từ Full HD+ đến Ultra
                            HD+. <br>
                            + Thiết kế cao cấp: Mỏng nhẹ, bền bỉ, màu bạc bạch kim. <br>
                            + Thời lượng pin dài: Lên đến 12 giờ. <br>
                            + Kết nối hiện đại: Cổng Thunderbolt™ 4 và Wi-Fi 6. <br>
                            + Bảo mật tiên tiến: Cảm biến vân tay và webcam có cửa che bảo mật <br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                <div id="list_binh_luan">
                    @foreach ($binh_luan_arr as $bl)
                        <div class="border border-primary rounded-3 m-2 p-2">
                            <p class="d-flex justify-content-between">
                                <b>{{ $bl->user->name }}</b>
                                <span>{{ date('d/m/Y', strtotime($bl->thoi_diem)) }}</span>
                            </p>
                            <p>{{ $bl->noi_dung }}</p>
                        </div>
                    @endforeach
                </div>
                <!-- Phần đánh giá và bình luận -->
                <h4>Bình Luận</h4>
                <!-- Form bình luận -->
                <form ng-submit="comment()" method="post" action="/luubinhluan">
                    <div class="mb-3">
                        <textarea class="form-control" id="comment" rows="3" ng-model="content" name="noi_dung"></textarea>
                    </div>
                    <p class="text-end"> @csrf
                        <input type="hidden" name="id_sp" value="{{ $sp->id }}">
                        <button class="btn btn-primary "> Gửi bình luận</button>
                    <p>
                </form>
            </div>
        </div>
        <div id="splienquan" class="mt-4">
            <h2 class="btn rounded-0 fs-5 mb-0 rounded-top-2 text-white" style="background-color: #0f57c3;">Sản phẩm liên quan
            </h2>
            <div class="card mb-3 border-2" style="background-color: #0f57c3;"></div>
            <div id="data" class="row">
                @foreach ($splienquan_arr as $sp)
                    <div class="col-md-3">
                        <div class="card border-primary shadow-lg">
                            <img src="{{ $sp->hinh }}" class="images py-2 m-2" alt="{{ $sp->ten }}">
                            <div class="card-body">
                                <h5 class="card-title fs-5 overflow-hidden" style="height: 50px;">
                                    <a href="{{ url('chitietsp', [$sp->id]) }}"
                                        class="text-decoration-none">{{ $sp->ten }}</a>
                                </h5>
                                <p class="card-text fs-6 text-secondary fw-bold">
                                    <span class="text-danger ">{{ number_format($sp->gia_km, 0, ',', '.') }} VND</span>
                                    <span class="text-secondary small"><del>{{ number_format($sp->gia, 0, ',', '.') }}
                                            VND</del></span>
                                </p>
                                <button class="btn btn-primary">Mua ngay</button>
                                <button class="btn btn-outline-danger">Thêm vào giỏ hàng</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
