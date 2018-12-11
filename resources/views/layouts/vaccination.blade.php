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
                      <th scope="col">Tên vaccin</th>
                      <th scope="col">Liều lượng</th>
                      <th scope="col">Bác sĩ</th>
                      <th scope="col">Mục đích</th>
                      <th scope="col">Kết quả</th>
                      <th scope="col">Ngày thực hiện</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($vaccinations as $data)
                    <tr> 
                        <td>{{$data->name}}</td> 
                        <td>{{$data->dose}}</td> 
                        <td>{{$data->doctor}}</td> 
                        <td>{{$data->purpose}}</td> 
                        <td>{{$data->result}}</td> 
                        <td>{{$data->created_at}}</td> 
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
