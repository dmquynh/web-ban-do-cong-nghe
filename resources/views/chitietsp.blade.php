@extends('layout')

@section('tieude')
    Chi tiết {{$sp->ten}}
@endsection

@section('noidung')
    @include('chitietsp_a')
@endsection