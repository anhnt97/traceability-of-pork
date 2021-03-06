@extends('layouts.master')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Giám sát log</h1>
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
                      <th scope="col">Tên log</th>
                      <th scope="col">Mô tả</th>
                      <th scope="col">Loại</th>
                      <th scope="col">Người gây ra</th>
                      <th scope="col">Thuộc tính</th>
                      <th scope="col">Ngày tạo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($activityLogAll as $data)
                    <tr> 
                        <td>{{$data->log_name}}</td> 
                        <td>{{$data->description}}</td> 
                        <td>{{$data->causer_id}}</td> 
                        <td>{{$data->reason}}</td> 
                        <td>{{$data->properties}}</td> 
                        <td>{{$data->created_at}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
