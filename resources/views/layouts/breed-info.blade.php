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
                      <th scope="col">Tên giống</th>
                      <th scope="col">Mô tả giống</th>
                      <th scope="col">Nguồn gốc</th>
                    </tr>
                </thead>
                <tbody>
                    <tr> 
                        <td>{{$breed->breed}}</td> 
                        <td>{{$breed->breed_description}}</td>
                        <td>{{$breed->origin}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
