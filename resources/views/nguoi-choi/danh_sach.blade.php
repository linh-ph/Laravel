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
                    <li class="breadcrumb-item"><a href="javascript: void(0);">danh sách</a></li>
                    <li class="breadcrumb-item active">Người chơi</li>
                </ol>
            </div>
            <h4 class="page-title">Danh sách người chơi</h4>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Thêm người chơi</h4>
                <a href="{{ route('nguoi-choi.them-moi') }}" class="btn btn-primary waves-effect waves-light">Thêm mới
                </a>
                <p class="text-muted font-13 mb-4">
                   
                </p>

                <table class="table dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên đăng nhập</th>
                            <th>Email</th>
                            <th>Hình đại diện</th>
                            <th>Điểm cao nhất</th>
                            <th>Credit</th>
                            <th>Cập nhật</th>
                            <th>xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (isset($nguoiChoi))
                        @foreach ($nguoiChoi as $nguoichoi)
                        <tr>
                            <th>{{ $nguoichoi->id }}</th>
                            <th>{{ $nguoichoi->ten_dang_nhap }}</th>
                            <th>{{ $nguoichoi->email }}</th>
                            <th>{{ $nguoichoi->hinh_dai_dien }}</th>
                            <th>{{ $nguoichoi->diem_cao_nhat }}</th>
                            <th>{{ $nguoichoi->credit }}</th>
                            <th>
                                <a href="{{ route('nguoi-choi.cap-nhat',['id'=>$nguoichoi->id]) }}" class="btn btn-purple waves-effect waves-light">
                                    <i class="mdi mdi-grease-pencil"></i>
                                </a>

                            </th>
                            <th>
                                <a href="{{ route('nguoi-choi.xoa',['id'=>$nguoichoi->id]) }}" class="btn btn-danger waves-effect waves-light">
                                    <i class="mdi mdi-delete"></i>
                                </a>
                            </th>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
@endsection