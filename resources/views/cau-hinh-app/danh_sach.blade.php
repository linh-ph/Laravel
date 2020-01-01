@extends('layout')
@section('css')

@endsection
@section('js')

@endsection 
@section('main-content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Quản trị</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Danh sách</a></li>
                    <li class="breadcrumb-item active">Cấu hình App</li>
                </ol>
            </div>
            <h4 class="page-title">Danh sách cấu hình App</h4>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <p class="text-muted font-13 mb-4">
                  
                </p>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Cơ hội sai</th>
                            <th>Thời gian trả lời</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($app))
                        @foreach($app as $app)
                        <tr>
                            <td>{{ $app->id }}</td>
                            <td>{{ $app->co_hoi_sai }}</td>
                            <td>{{ $app->thoi_gian_tra_loi }}</td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col -->
</div>
@endsection