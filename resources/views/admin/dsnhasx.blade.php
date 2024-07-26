@extends('admin.layout')

@section('tieude')
    Danh sách nhà sx
@endsection

@section('noidung')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<h1>Danh sách nhà sản xuất</h1>
@if(session('thongbao'))
    <div class="alert alert-success">{{ session('thongbao') }}</div>
@endif
<a href="{{ route('nhasx.them') }}" class="btn btn-primary mb-4 mt-4">Thêm nhà sản xuất</a>
<table class="table table-striped table-bordered bg-white">
    <thead >
        <tr class="text-center" >
            <th class="text-white"style="background-color: #0c5cb5">ID</th>
            <th class="text-white"style="background-color: #0c5cb5">Tên</th>
            <th class="text-white"style="background-color: #0c5cb5">Thứ tự</th>
            <th class="text-white"style="background-color: #0c5cb5">Ẩn hiện</th>
            <th class="text-white"style="background-color: #0c5cb5">Hành động</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr class="text-center">
                <td>{{ $item->id }}</td>
                <td>{{ $item->ten }}</td>
                <td>{{ $item->thu_tu }}</td>
                <td>{{ $item->an_hien }}</td>
                <td class="w-25">
                    <a href="{{ route('nhasx.capnhat', $item->id) }}" class="btn btn-success">Cập nhật</a>
                    <form action="{{ route('nhasx.xoa', $item->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-center align-content-center">{{ $data->links() }}</div>
@endsection