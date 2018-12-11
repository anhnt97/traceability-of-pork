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
                    <td>{{$data->qr_code}}</td> 
                    @if ($data->sell_at == null)
                    <td>Chưa bán</td> 
                    @else
                    <td>{{$data->sell_at}}</td> 
                    @endif
                    @if(auth::user()->role =='admin')
                    <td><a href="/breed-management/feed/{{$data->batch_id}}">Xem</a></td> 
                    <td><a href="/breed-management/treatment/{{$data->id}}">Xem</a></td> 
                    @endif
                    @if(auth::user()->role =='staff')
                    <td><a href="/breed-management/get-info-pig/{{$data->id}}">Nhập</a></td> 
                    <td><a href="/breed-management/get-info-pig/{{$data->id}}">Nhập</a></td> 
                    @endif
                  </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
