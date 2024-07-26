
@extends('layout')

@section('tieude')
    Góp ý
@endsection

@section('noidung')
<div class="container mt-4 mb-4">
    <div class="row">
        <div class="col-lg-8">
            <h1 class="mb-4">Góp Ý</h1>
            <form>
                <div class="mb-3">
                    <label class="form-label">Tiêu đề</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nội dung</label>
                    <textarea class="form-control" rows="5"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Gửi</button>
            </form>
        </div>
    </div>
</div>

@endsection