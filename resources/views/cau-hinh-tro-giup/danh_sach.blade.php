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
                    <li class="breadcrumb-item active">Cấu hình trợ giúp</li>
                </ol>
            </div>
            <h4 class="page-title">Danh sách cấu hình trợ giúp</h4>
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
                            <th>Loại trợ giúp</th>
                            <th>Thứ tự</th>
                            <th>Credit</th>
                            <th>Cập nhật</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($troGiup))
                        @foreach($troGiup as $trogiup)
                        <tr>
                            <td>{{ $trogiup->id }}</td>
                            <td>{{ $trogiup->loai_tro_giup }}</td>
                            <td>{{ $trogiup->thu_tu }}</td>
                            <td>{{ $trogiup->credit }}</td>
                            <td>...</td>
                            <td>...</td>
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