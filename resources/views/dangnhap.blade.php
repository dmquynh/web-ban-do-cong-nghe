@extends('layout')

@section('tieude')
    Đăng nhập
@endsection

@section('noidung')
    <h2 class="justify-content-center align-items-center d-flex">Đăng Nhập</h2>

    <form action="{{ url('dangnhap') }}" method="POST" class="m-auto col-10 border border-primary p-3 mt-3 shadow-lg fs-5">
        @if (session('thongbao'))
            <div class="alert alert-danger">
                {{ session('thongbao') }}
            </div>
        @endif
        @csrf
        <div class='mb-3'> <label> Email</label>
            <input value="{{ old('email') }}" name="email" type="email" class="form-control border-primary shadow-none">
        </div>
        <div class='mb-3'> <label> Mật khẩu</label>
            <input value="{{ old('password') }}" type="password" class="form-control  border-primary shadow-none"
                id="password" name="password">
        </div>
        <div class='mb-3'>
            <button type="submit" class="btn btn-primary py-2 px-5 border-0">Đăng nhập</button>
        </div>
    </form>
@endsection
