@extends('layouts.master')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Danh sách trang trại</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div>
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home">Thông tin trang trại</a></li>
    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active show">
            <table class="table">
                <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Tên trang trại</th>
                      <th scope="col">Chủ sở hữu</th>
                      <th scope="col">Địa chỉ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($farms as $data)
                    <tr>
                    <td>{{$data->id}}</td> 
                    <td>{{$data->name}}</td> 
                    <td>{{$data->owner}}</td> 
                    <td>{{$data->address}}</td> 
                  </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection