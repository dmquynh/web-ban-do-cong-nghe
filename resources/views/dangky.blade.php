@extends('layout')

@section('tieude')
    Đăng ký thành viên
@endsection

@section('noidung')
    <h2 class="justify-content-center align-items-center d-flex">Đăng Ký</h2>

    <form action="{{ url('dangky') }}" method="POST" class="m-auto col-10 border border-primary p-3 mt-3 shadow-lg fs-5">
        @csrf
        @if (session()->has('thongbao'))
            <div class="alert alert-primary mx-auto my-3 fs-5  text-center">
                {!! session('thongbao') !!}
            </div>
        @endif
        <div class="mb-3">
            <label for="name" class="form-label">Tên</label>
            <input value="{{ old('name') }}" type="text" class="form-control border-primary shadow-none" id="name"
                name="name">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input value="{{ old('email') }}" type="text" class="form-control border-primary shadow-none" id="email"
                name="email">
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mật khẩu</label>
            <input value="{{ old('password') }}" type="password" class="form-control border-primary shadow-none"
                id="password" name="password">
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Xác nhận mật khẩu</label>
            <input value="{{ old('password') }}" type="password" class="form-control border-primary shadow-none"
                id="password_confirmation" name="password_confirmation">
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="dien_thoai" class="form-label">Điện thoại</label>
            <input value="{{ old('dien_thoai') }}" type="text" class="form-control border-primary shadow-none"
                id="dien_thoai" name="dien_thoai">
            @error('dien_thoai')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Đăng Ký</button>
    </form>
@endsection
