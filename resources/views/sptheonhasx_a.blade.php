<div class="row">
    <div class="col-md-9">
        <div id="listsp" class="my-4">
            <h2 class="btn rounded-0 fs-5 mb-0 rounded-top-2 text-white" style="background-color: #0f57c3;">Sản phẩm của {{$ten_nhasx}}</h2>
            <div class="card mb-3 border-2" style="background-color: #0f57c3;"></div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach($listsp as $sp)
                <div class="col">
                    <div class="card border-primary shadow-lg">
                        <img src="{{$sp->hinh}}" class="img py-2 m-2" alt="{{$sp->ten}}">
                        <div class="card-body">
                            <h5 class="card-title fs-5 overflow-hidden" style="height: 50px;">
                                <a href="{{ url('chitietsp',[$sp->id]) }}" class="text-decoration-none">{{$sp->ten}}</a>
                            </h5>
                            <p class="card-text fs-6 text-secondary fw-bold">
                                <span class="text-danger ">{{number_format($sp->gia_km,0,",",".")}} VND</span>
                                <span class="text-secondary small"><del>{{number_format($sp->gia,0,",",".")}} VND</del></span>
                            </p>
                            <button class="btn btn-primary">Mua ngay</button>
                            <button class="btn btn-outline-danger">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class='mt-5 mb-0 d-flex justify-content-center align-content-center'> {{ $listsp->onEachSide(5)->links() }} </div>
    </div>
