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
                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal_add_1">Nhập</button></td>
                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal_add_2">Nhập</button></td> 
                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal_add_3">Nhập</button></td> 
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
            <h5 class="modal-title" id="exampleModalLabel">Thức ăn</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table">
              <tbody>
                  <th scope="row">Thức ăn</th>
                  <td><input type="text"></td>
                </tr>
                <tr>
                  <th scope="row">Số lượng(kg)</th>
                  <td><input type="text"></td>
                </tr>
                <tr>
                  <th scope="row">Trộn</th>
                  <td><input type="text"></td>
                </tr>
                <tr>
                  <th scope="row">Người cho ăn</th>
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

    <div class="modal fade" id="myModal_add_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tiêm phòng</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table">
              <tbody>
                  <th scope="row">Tên thuốc</th>
                  <td><input type="text"></td>
                </tr>
                <tr>
                  <th scope="row">Liều lượng</th>
                  <td><input type="text"></td>
                </tr>
                <tr>
                  <th scope="row">Bác sĩ thú y</th>
                  <td><input type="text"></td>
                </tr>
                <tr>
                  <th scope="row">Mục đích</th>
                  <td><input type="text"></td>
                </tr>
                <tr>
                  <th scope="row">Kết quả</th>
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

    <div class="modal fade" id="myModal_add_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Dọn vệ sinh</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table">
              <tbody>
                  <th scope="row">Trang bị</th>
                  <td><input type="text"></td>
                </tr>
                <tr>
                  <th scope="row">Số lượng</th>
                  <td><input type="text"></td>
                </tr>
                <tr>
                  <th scope="row">Chất tẩy rửa</th>
                  <td><input type="text"></td>
                </tr>
                <tr>
                  <th scope="row">Người thực hiện</th>
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

    <div class="modal fade" id="myModal_add_3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Bán</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table">
              <tbody>
                  <th scope="row">Số lượng</th>
                  <td><input type="text"></td>
                </tr>
                <tr>
                  <th scope="row">Người bán</th>
                  <td><input type="text"></td>
                </tr>
                <tr>
                  <th scope="row">Người mua</th>
                  <td><input type="text"></td>
                </tr>
                <tr>
                  <th scope="row">Địa chỉ người mua</th>
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
