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
                    <li class="breadcrumb-item active">Lượt chơi</li>
                </ol>
            </div>
            <h4 class="page-title">Danh sách lượt chơi</h4>
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
                <table class="table dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên người chơi</th>
                            <th>Số câu</th>
                            <th>Điểm</th>
                            <th>Chi Tiết lượt chơi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($luotChoi))
                        @foreach($luotChoi as $luotchoi)
                        <tr>
                            <td>{{ $luotchoi->id }}</td>
                            <td>{{ $luotchoi->NguoiChoi->ten_dang_nhap }}</td>
                            <td>{{ $luotchoi->so_cau }}</td>
                            <td>{{ $luotchoi->diem }}</td>
                            <td>
                                <a href="{{ route('chi-tiet-luot-choi.danh-sach') }}" class="btn btn-primary waves-effect waves-light">Xem chi tiết lượt chơi</a>
                            </td>
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