@extends('layouts.master');
@section ('title','chi sản phẩm');
@section ('content-title','Thêm mới sản phẩm');

@section ('content')
<div class="col-md-12">
    <!-- jquery validation -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Quick Example <small>jQuery Validation</small></h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form id="quickForm" novalidate="novalidate" action="{{BASE_URL}}">
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Tên sản phẩm</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Tên sản phẩm" value="{{$array[$id]['id']}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Giá sản phẩm</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Giá sản phẩm" value="{{$array[$id]['name']}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Màu sản phẩm</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Màu sản phẩm" value="{{$array[$id]['address']}}">
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Thêm</button>
          <button type="submit" onclick="return confirm('Bạn có muốn hủy không')" class="btn btn-danger">Hủy</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
    </div>
    
@endsection
