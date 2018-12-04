@extends('layouts.master')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Giới thiệu quy trình</h1>
                
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    <a style="float:right" href="http://www.vietgap.com/pic/files/nuoilon.pdf">Link chi tiết</a>
</div>
<div>
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home">Quy định chung</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu1">Các biểu mẫu ghi chép</a></li>
        
    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active show">
            <table id="table-process" class="table">
                <thead>
                    <tr>
                      <th scope="col">Tên quy định</th>
                      <th scope="col">Chi tiết</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <th scope="row">Địa điểm</th>
                      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal_1">Chi tiết</button></td>
                    </tr>
                    <tr>
                      <th scope="row">Bố trí khu chăn nuôi</th>
                      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal_2">Chi tiết</button></td>
                    </tr>
                    <tr>
                      <th scope="row">Chuồng nuôi và thiết bị chăn nuôi</th>
                      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal_3">Chi tiết</button></td>
                    </tr>
                    <tr>
                      <th scope="row">Giống và quản lý chăn nuôi</th>
                      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal_4">Chi tiết</button></td>
                    </tr>
                    <tr>
                      <th scope="row">Vệ sinh chăn nuôi</th>
                      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal_5">Chi tiết</button></td>
                    </tr>
                    <tr>
                      <th scope="row">Quản lý thức ăn và nước uống</th>
                      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal_6">Chi tiết</button></td>
                    </tr>
                    <tr>
                      <th scope="row">Quản lý vận chuyển</th>
                      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal_7">Chi tiết</button></td>
                    </tr>
                    <tr>
                      <th scope="row">Quản lý dịch bệnh</th>
                      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal_8">Chi tiết</button></td>
                    </tr>
                    <tr>
                      <th scope="row">Quản lý chất thải và bảo vệ môi trường</th>
                      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal_9">Chi tiết</button></td>
                    </tr>
                    <tr>
                      <th scope="row">Kiểm soát động vật và con trùng gây hại</th>
                      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal_10">Chi tiết</button></td>
                    </tr>
                    <tr>
                      <th scope="row">Quản lý nhân sự</th>
                      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal_11">Chi tiết</button></td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
        <div id="menu1" class="tab-pane fade">
            
          <img src="{{URL::asset('/img/bieumau1.jpg')}}" height="500" width="500">
          <img src="{{URL::asset('/img/bieumau2.jpg')}}" height="500" width="500">
        </div>
    </div>
    <!-- The Modal -->
      
    <div class="modal" id="myModal_1">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Địa điểm</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <img src="{{URL::asset('/img/diadiem.jpg')}}" height="200" width="400">
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
      </div>
    
    <div class="modal" id="myModal_2">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Bố trí khu chăn nuôi</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <img src="{{URL::asset('/img/2.jpg')}}" height="200" width="400">
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
      </div>
    
    <div class="modal" id="myModal_3">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Chuồng nuôi và thiết bị chăn nuôi</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <img src="{{URL::asset('/img/3.jpg')}}" height="200" width="400">
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
      </div>
    
    <div class="modal" id="myModal_4">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Giống và quản lý chăn nuôi</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <img src="{{URL::asset('/img/4.jpg')}}" height="200" width="400">
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
      </div>
    
    <div class="modal" id="myModal_5">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Vệ sinh chăn nuôi</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <img src="{{URL::asset('/img/5.jpg')}}" height="200" width="400">
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
      </div>
    
    <div class="modal" id="myModal_6">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Quản lý thức ăn và nước uống</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <img src="{{URL::asset('/img/6.jpg')}}" height="200" width="400">
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
      </div>
    
    <div class="modal" id="myModal_7">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Quản lý vận chuyển</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <img src="{{URL::asset('/img/7.jpg')}}" height="200" width="400">
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
      </div>
    
    <div class="modal" id="myModal_8">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Quản lý dịch bệnh</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <img src="{{URL::asset('/img/8.jpg')}}" height="200" width="400">
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
      </div>
    
    <div class="modal" id="myModal_9">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Quản lý chất thải và bảo vệ môi trường</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <img src="{{URL::asset('/img/9.jpg')}}" height="200" width="400">
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
      </div>
    
    <div class="modal" id="myModal_10">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Kiểm soát động vật và con trùng gây hại</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <img src="{{URL::asset('/img/10.jpg')}}" height="200" width="400">
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
      </div>
    
    <div class="modal" id="myModal_11">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Quản lý nhân sự</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <img src="{{URL::asset('/img/11.jpg')}}" height="200" width="400">
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
