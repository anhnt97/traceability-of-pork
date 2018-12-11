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
                      <th scope="col">Tên dụng cụ</th>
                      <th scope="col">Tên thuốc sát trùng</th>
                      <th scope="col">Liều lượng</th>
                      <th scope="col">Người thực hiện</th>
                      <th scope="col">Ngày thực hiện</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($antiseptics as $data)
                    <tr>
                        <td>{{$data->equipment_id}}</td>
                        <td>{{$data->insecticide}}</td>
                        <td>{{$data->dose}}</td>
                        <td>{{$data->executor}}</td>
                        <td>{{$data->created_at}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
