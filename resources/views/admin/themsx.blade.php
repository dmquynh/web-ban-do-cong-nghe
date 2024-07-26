@extends('admin.layout')

@section('tieude')
    Thêm nhà sản xuất
@endsection

@section('noidung')
<form action="{{ route('nhasx.them_') }}" method="POST" class="col-7 m-auto">
    @csrf
    <div class="form-group">
        <label for="ten">Tên:</label>
        <input type="text" name="ten" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="thu_tu">Thứ tự:</label>
        <input type="number" name="thu_tu" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="an_hien">Ẩn hiện:</label>
        <select name="an_hien" class="form-control" required>
            <option value="1">Hiện</option>
            <option value="0">Ẩn</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Thêm</button>
</form>
@endsection
