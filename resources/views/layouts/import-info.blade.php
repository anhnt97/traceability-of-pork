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
                      <th scope="col">Cân nặng trung bình</th>
                      <th scope="col">Số lượng</th>
                      <th scope="col">Lần điều trị cuối</th>
                      <th scope="col">Thuốc dùng lần cuối</th>
                      <th scope="col">Thời gian ngưng thuốc</th>
                      <th scope="col">Địa điểm kiểm dịch</th>
                      <th scope="col">Người mua</th>
                      <th scope="col">Thời gian mua</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$import->average_weight}}</td> 
                        <td>{{$import->amount}}</td> 
                        <td>{{$import->last_treatment}}</td> 
                        <td>{{$import->drug}}</td> 
                        <td>{{$import->stop_drug_date}}</td> 
                        <td>{{$import->quarantine_place}}</td> 
                        <td>{{$import->receiver}}</td> 
                        <td>{{$import->import_at}}</td> 
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
