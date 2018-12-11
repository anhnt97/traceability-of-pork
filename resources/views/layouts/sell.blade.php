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
                      <th scope="col">Số lượng</th>
                      <th scope="col">Người bán</th>
                      <th scope="col">Người mua</th>
                      <th scope="col">Địa điểm mua</th>
                      <th scope="col">Ngày điều trị cuối</th>
                      <th scope="col">Ngày bán</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sells as $data)
                    <tr> 
                        <td>{{$data->amount}}</td> 
                        <td>{{$data->seller}}</td>
                        <td>{{$data->buyer}}</td> 
                        <td>{{$data->buyer_address}}</td> 
                        <td>{{$data->last_treatment}}</td> 
                        <td>{{$data->sell_at}}</td> 
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
