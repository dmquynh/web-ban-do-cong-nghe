
@extends('admin.layout')

@section('tieude')
Cập nhật sản phẩm
@endsection

@section('noidung')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<form action="/admin/sp/capnhat/{{$sanpham->id}}" method="post" class="col-7 m-auto">
    <div class="mb-3">
        <label for="ten" class="form-label">Tên:</label>
        <input type="text" name="ten" class="form-control" value="{{$sanpham->ten}}">
    </div>
    <div class="mb-3">
        <label for="gia" class="form-label">Giá:</label>
        <input type="text" name="gia" class="form-control" value="{{$sanpham->gia}}">
    </div>
    <div class="mb-3">
        <label for="gia_km" class="form-label">Giá KM:</label>
        <input type="text" name="gia_km" class="form-control" value="{{$sanpham->gia_km}}">
    </div>
    <div class="mb-3">
        <label for="hinh" class="form-label">URL Hình:</label>
        <input type="text" name="hinh" class="form-control" value="{{$sanpham->hinh}}">
    </div>
    <div class="mb-3">
        <label for="id_nhasx" class="form-label">Nhà sản xuất:</label>
        <select name="id_nhasx" class="form-control">
            @foreach($nhasx_arr as $sx)
                <option value="{{ $sx->id }}" {{ $sx->id == $sanpham->id_nhasx ? 'selected' : '' }}>{{ $sx->ten }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
            <label for="an_hien" class="form-label">Ẩn hiện:</label>
            <input type="radio" name="an_hien" value="1" {{ $sanpham->an_hien == 1 ? 'checked' : '' }}>Hiện</input>
            <input type="radio" name="an_hien" value="0" {{ $sanpham->an_hien == 0 ? 'checked' : '' }}>Ẩn</input>
    </div>
    <button type="submit" class="btn btn-primary">Cập nhật</button>
    @csrf
</form>
@endsection

