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
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home">Danh sách cá thể</a></li>
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
                      <th scope="col">Chi tiết</th>
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
                    <td><a href="/breed-management/get-info-pig/{{$data->id}}">Xem</a></td> 
                  </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
