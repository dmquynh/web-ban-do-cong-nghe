
@extends('admin.layout')

@section('tieude')
Thêm sản phẩm
@endsection

@section('noidung')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<form action="/admin/sp/them" method="post" class="col-7 m-auto">
    <p> Tiêu đề: <input name="ten" class="form-control"></p>
    <p> Giá: <input name="gia" class="form-control"></p>
    <p> Giá khuyến mãi: <input name="gia_km" class="form-control"></p>
    <p> urlHinh: <input name="hinh" class="form-control"></p>
    <p> Nhà sản xuất:
        <select name="id_nhasx"  class="form-control">
            @foreach($nhasx_arr as $nhasx)
                <option value="{{ $nhasx->id }}">{{ $nhasx->ten }}</option>
            @endforeach
        </select>
    </p>
    <div class="mb-3">
        <label for="an_hien" class="form-label">Ẩn hiện:</label>
        <input type="radio" name="an_hien" value="1">Hiện</input>
        <input type="radio" name="an_hien" value="0">Ẩn</input>
    </div>
    <p><button type="submit" class="btn btn-primary">Thêm sản phẩm</button></p>
    @csrf
</form>
@endsection