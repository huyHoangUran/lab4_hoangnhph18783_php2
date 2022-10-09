
<div class="card-body">
@section('title','ds sản phẩm')
@section('content-title','Danh sách sản phẩm')


<!-- dành cho phần content yield(ten ) ~ session(ten,) noi dung endsection -->
@section('content')
@extends('layouts.master')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">DataTable with minimal features &amp; hover style</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
      <thead>
        <tr>
            <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Name</th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Address</th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending"><a href="{{BASE_URL}}them-san-pham" class="btn btn-primary">Thêm mới</a></th>
        </tr>
      </thead>
      <tbody>
         @foreach($array as $item )
        
          <tr class="odd">
            <td class="dtr-control sorting_1" tabindex="0">{{$item['id']}}</td>
            <td>{{$item['name']}}</td>
            <td> {{$item['address']}} </td>
            <td>
              <a href="{{BASE_URL}}chi-tiet-san-pham/{{$item['id']}}" class="btn btn-success">Chi tiết</a>
              <a href="" class="btn btn-danger">Xóa</a>
            </td>
          </tr>
        @endforeach
      </tbody>
        <tfoot>
          <tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr>
        </tfoot>
    </div>
    <!-- /.card-body -->
  </div>
@endsection