@extends('admin.layout')
@section('tieude')
    Danh sản phẩm
@endsection

@section('noidung')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    <h1>Danh sách sản phẩm</h1>
    @if (session()->has('thongbao'))
        <div class="alert alert-success mx-auto my-3  fs-5  text-center">
            {!! session('thongbao') !!}
        </div>
    @endif

    <tr>
        <td colspan="6">
            <div class="d-flex justify-content-between mb-4 mt-4">
                <a class="btn btn-primary" href="{{ url('admin/sp/them') }}" style="width: 150px;">Thêm sản phẩm</a>
                <div class="d-flex">
                    <select id="selLoai" class="form-select me-2" style="border: 1px solid #007bff; color: #007bff; width: auto;" onchange="locsp(this.value)">
                        <option value="-1">Lọc theo NSX</option>
                        @foreach ($nhasx_arr as $loai)
                            <option value="{{ $loai->id }}" {{ $loai->id == $id_nhasx ? 'selected' : '' }}>
                                {{ $loai->ten }}
                            </option>
                        @endforeach
                    </select>
                    <select id="trangthai" class="form-select" style="border: 1px solid #007bff; color: #007bff; width: auto;" onchange="loctrangthai(this.value)">
                        <option value="chuaxoa" {{ $trangthai == 'chuaxoa' ? 'selected' : '' }}>Sản phẩm hiện hành</option>
                        <option value="daxoa" {{ $trangthai == 'daxoa' ? 'selected' : '' }}>Sản phẩm đã xóa</option>
                    </select>
                </div>
            </div>
            <script>
                function loctrangthai(tt) {
                    document.location = `/admin/sanpham?trangthai=${tt}`;
                }
            </script>
    
            <script>
                function locsp(id_nhasx) {
                    document.location = `/admin/sanpham?id_nhasx=${id_nhasx}`;
                }
            </script>
        </td>
    </tr>
    
    <table class="table table-striped table-bordered bg-white">
        <thead style="background-color: #0c5cb5">
            <tr class="text-center">
                <th class="text-white">Hình ảnh</th>
                <th class="text-white">Tên sản phẩm</th>
                <th class="text-white">Sản xuất</th>
                <th class="text-white">Trạng thái</th>
                <th class="text-white">Giá gốc</th>
                <th class="text-white">Giá KM</th>
                <th class="text-white">Ngày tạo</th>
                <th class="text-white">Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $sp)
                <tr class="text-center align-middle">
                    <td><img src="{{ $sp->hinh }}" alt="{{ $sp->ten }}" class="img-fluid"
                            style="max-width: 100px;"></td>
                    <td>{{ $sp->ten }}</td>
                    <td>{{ $sp->nhasx->ten }}</td>
                    <td>
                        @if ($sp->an_hien == 1)
                            <span class="badge bg-success">Hiện</span>
                        @else
                            <span class="badge bg-danger">Ẩn</span>
                        @endif
                    </td>
                    <td>{{ number_format($sp->gia, 0, ',', '.') }}đ</td>
                    <td>{{ number_format($sp->gia_km, 0, ',', '.') }}đ</td>
                    <td>{{ date('d/m/Y', strtotime($sp->ngay)) }}</td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-success me-2" href="{{ url('admin/sp/capnhat', $sp->id) }}"
                                style="width: 90px;">Cập nhật</a>
                            <form method="POST" action="{{ url('admin/sp/xoa', $sp->id) }}">
                                @csrf
                                <button type="submit" class="btn btn-danger" style="width: 90px;"
                                    onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">Xóa</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center align-content-center">{{ $data->links() }}</div>
@endsection
