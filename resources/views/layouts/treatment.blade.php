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
                      <th scope="col">Tên thuốc</th>
                      <th scope="col">Liều lượng</th>
                      <th scope="col">Bác sĩ</th>
                      <th scope="col">Lý do điều trị</th>
                      <th scope="col">Kết quả</th>
                      <th scope="col">Ngày bắt đầu</th>
                      <th scope="col">Ngày kết thúc</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($treatments as $data)
                    <tr> 
                        <td>{{str_random(10)}}</td>
                        <td>{{$data->dose}}</td> 
                        <td>{{$data->doctor}}</td> 
                        <td>{{$data->reason}}</td> 
                        <td>{{$data->result}}</td> 
                        <td>{{$data->start_at}}</td> 
                        <td>{{$data->finish_at}}</td> 
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
