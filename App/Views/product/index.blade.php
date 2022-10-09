<!-- Kế thừa lại layout master -->
@extends('layouts.master')

@section('title','index')
@section('content-title','Hoàng')
@section('content')
<div>
    <a href="{{BASE_URL}}ds-san-pham">List sanh sách</a>
</div>
<div>
    <a href="{{BASE_URL}}them-san-pham">Thêm sản phẩm</a>
</div>

@endsection
<!-- Truyền giá trị cho những phần thay đổi -->
<!-- yield(tên) ~session(ten,giatri)-->