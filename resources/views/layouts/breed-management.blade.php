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
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home">Home</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu1">Menu 1</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu2">Menu 2</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu3">Menu 3</a></li>
    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active show">
            <table class="table">
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry</td>
                      <td>the Bird</td>
                      <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="menu1" class="tab-pane fade">
          222222222222222
        </div>
        <div id="menu2" class="tab-pane fade">
          333333333333333333333
        </div>
        <div id="menu3" class="tab-pane fade">
          4444444444444444444444444
        </div>
    </div>
</div>
@endsection
