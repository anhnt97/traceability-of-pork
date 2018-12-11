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
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home">Danh sách chi tiết</a></li>
    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active show">
            <table class="table">
                <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Cân nặng</th>
                      <th scope="col">Tình trạng</th>
                      <th scope="col">Mã QR</th>
                      <th scope="col">Thời gian xuất chuồng</th>
                      @if(auth::user()->role =='admin')
                      <th scope="col">Lịch sử cho ăn </th>
                      <th scope="col">Lịch sử chữa bệnh</th>
                      @endif
                      @if(auth::user()->role =='staff')
                       <th scope="col"> Cho ăn </th>
                      <th scope="col">Chữa bệnh</th>
                      @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach($pigs as $data)
                    <tr>
                    <td>{{$data->id}}</td> 
                    <td>{{$data->weight}}</td> 
                    <td>{{$data->status}}</td> 
                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal_QR">Xem</button></td> 
                    @if ($data->sell_at == null)
                    <td>Chưa bán</td> 
                    @else
                    <td>{{$data->sell_at}}</td> 
                    @endif
                    @if(auth::user()->role =='admin')
                    <td><a href="/breed-management/get-info-pig/{{$data->id}}">Xem</a></td> 
                    <td><a href="/breed-management/get-info-pig/{{$data->id}}">Xem</a></td> 
                    @endif
                    @if(auth::user()->role =='staff')
                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal_add">Nhập</button></td> 
                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal_add_1">Nhập</button></td> 
                    @endif
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
            <h5 class="modal-title" id="exampleModalLabel">Chữa bệnh</h5>
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


    <div class="modal" id="myModal_QR">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Mã QR</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <img src="{{URL::asset('/img/Capture_qr.jpg')}}" height="200" width="200">
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
      </div>
</div>
@endsection
