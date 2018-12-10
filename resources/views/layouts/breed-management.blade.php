@extends('layouts.master')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Giám sát chăn nuôi</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div>
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home">Quản lí theo lô</a></li>
        <li style="float: right;">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal_add">
            Nhập nguyên liệu, thức ăn
          </button>
        </li>
    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active show">
            <table class="table">
                <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Farm ID</th>
                      <th scope="col">Số lượng</th>
                      <th scope="col">Trạng thái</th>
                      <th scope="col">Giống</th>
                      <th scope="col">Mô tả giống</th>
                      <th scope="col">Địa chỉ</th>
                      <th scope="col">Chi tiết</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($datas as $data)
                    <tr>
                    <td>{{$data->id}}</td> 
                    <td>{{$data->farm_id}}</td> 
                    <td>{{$data->amount}}</td> 
                    <td>{{$data->status}}</td> 
                    <td>{{$data->breed}}</td> 
                    <td>{{$data->breed_description}}</td> 
                    <td>{{$data->origin}}</td> 
                    <td><a href="/breed-management/get-batches/{{$data->id}}">Xem</a></td> 
                  </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>

     <!-- The Modal -->
      
    <div class="modal fade" id="myModal_add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Nguyên Liệu/Thức ăn</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table">
              <tbody>
                <tr>
                  <th scope="row">Ngày nhập</th>
                  <td>
                    <input type="text">
                  </td>
                </tr>
                <tr>
                  <th scope="row">Người nhập</th>
                  <td><input type="text"></td>
                </tr>
                <tr>
                  <th scope="row">Tên hàng</th>
                  <td><input type="text"></td>
                </tr>
                <tr>
                  <th scope="row">Số lượng(kg)</th>
                  <td><input type="text"></td>
                </tr>
                <tr>
                  <th scope="row">Cơ sở sản xuất</th>
                  <td><input type="text"></td>
                </tr>
                <tr>
                  <th scope="row">Ngày sản xuất</th>
                  <td><input type="text"></td>
                </tr>
                <tr>
                  <th scope="row">Hạn sử dụng</th>
                  <td><input type="text"></td>
                </tr>
                <tr>
                  <th scope="row">Đánh giá</th>
                  <td><input type="text"></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
