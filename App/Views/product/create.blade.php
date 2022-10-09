@extends('layouts.master');
@section ('title','Thêm sản phẩm');
@section ('content-title','Thêm mới sản phẩm');
@section ('content')
<form action="{{BASE_URL}}">
    <div>
        <label for="">Tên sản phẩm</label>
        <input type="text" name="" id="" placeholder="Tên sản phẩm">
    </div>
    <div>
        <label for="">Giá sản phẩm</label>
        <input type="number" name="" id="" placeholder="Giá sản phẩm">
    </div>
    <div>
        <label for="">Màu sản phẩm</label>
        <input type="text" name="" id="" placeholder="Màu sản phẩm">
    </div>
    <div>
        <button>Thêm</button>
        <button onclick="return confirm('Bạn có muốn hủy không')">Hủy</button>
    </div>
</form>
<div class="col-md-12">
    <!-- jquery validation -->
    <div class="card card-primary">
     
      <!-- /.card-header -->
      <!-- form start -->
      <form id="quickForm" novalidate="novalidate">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Tên sản phẩm</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Giá sản phẩm</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Giá sản phẩm">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Màu sản phẩm sản phẩm</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Màu sản phẩm sản phẩm">
              </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
    </div>
@endsection