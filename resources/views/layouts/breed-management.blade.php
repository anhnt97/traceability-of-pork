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
</div>
@endsection
