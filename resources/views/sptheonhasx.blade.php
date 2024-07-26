@extends('layout')

@section('tieude')
Sản phẩm của {{$ten_nhasx}}
@endsection

@section('noidung')
    
  
    @include('sptheonhasx_a')
        @include('sptrongloai')
 
@endsection