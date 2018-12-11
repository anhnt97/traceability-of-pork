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
          
    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active show">
            <table class="table">
                <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Trang trại</th>
                      <th scope="col">Số lượng</th>
                      <th scope="col">Giống</th>
                      @if(Auth::user()->role == 'admin')
                      <th scope="col">Thông tin mua</th>
                      <th scope="col">Lịch sử cho ăn</th>
                      <th scope="col">Lịch sử tiêm phòng</th>
                      <th scope="col">Lịch sử dọn vệ sinh</th>
                      <th scope="col">Lịch sử bán</th>
                      @endif 
                      @if(Auth::user()->role == 'staff')
                      <th scope="col">Cho ăn</th>
                      <th scope="col">Tiêm phòng</th>
                      <th scope="col">Dọn vệ sinh</th>
                      <th scope="col">Bán</th>
                      @endif
                      <th scope="col">Danh sách heo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($datas as $data)
                    <tr>
                    <td>{{$data->id}}</td> 
                    <td>{{$data->farm_id}}</td> 
                    <td>{{$data->amount}}</td> 
                    
                    @if(Auth::user()->role == 'admin')
                    <td><a href="/breed-management/breed-info/{{$data->id}}">Xem</a></td> 
                    <td><a href="/breed-management/import-info/{{$data->id}}">Xem</a></td> 
                    <td><a href="/breed-management/feed/{{$data->id}}">Xem</a></td> 
                    <td><a href="/breed-management/vaccination/{{$data->id}}">Xem</a></td>
                    <td><a href="/breed-management/antiseptic/{{$data->id}}">Xem</a></td> 
                    <td><a href="/breed-management/sell/{{$data->id}}">Xem</a></td> 
                    @endif 
                    @if(Auth::user()->role == 'staff')
                    <td>{{$data->breed}}</td>
                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal_add">Nhập</button></td> 
                    <td><a href="/breed-management/get-batches/{{$data->id}}">Nhập</a></td>
                    <td><a href="/breed-management/get-batches/{{$data->id}}">Nhập</a></td> 
                    <td><a href="/breed-management/get-batches/{{$data->id}}">Nhập</a></td> 
                    @endif 
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
