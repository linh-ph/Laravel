@extends('layout')
@section('css')

@section('js')

@endsection
@section('main-content')


<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Quản trị</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Quản trị viên</a></li>
                    <li class="breadcrumb-item active">Danh sách quản trị viên</li>
                </ol>
            </div>
            <h4 class="page-title">Quản trị viên</h4>
            <a href="{{ route('quan-tri-vien.them-moi') }}" class="btn btn-primary waves-effect waves-light">Thêm mới</a>
            <br/><br/>
                        
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table  class="table dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên đăng nhập</th>
                            <th>Họ tên</th>
                            <th>Cập nhật</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (isset($quantris))
                            @foreach ($quantris as $quantri)
                                <tr>
                                    <td>{{ $quantri->id }}</td>
                                    <td>{{ $quantri->ten_dang_nhap }}</td>
                                    <td>{{ $quantri->ho_ten }}</td>
                                    <td>
                                        <a href="{{ route('quan-tri-vien.cap-nhat', ['$id' =>$quantri->id]) }}" class="btn btn-purple waves-effect waves-light">
                                            <i class="mdi mdi-grease-pencil"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('quan-tri-vien.xoa', ['$id' =>$quantri->id]) }}" class="btn btn-danger waves-effect waves-light">
                                            <i class="mdi mdi-delete"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                        @foreach ($onlyTrasheds as $quanTriVien)
                            <tr>
                                <td>{{ $quanTriVien->id }}</td>
                                <td>{{ $quanTriVien->ten_dang_nhap }}</td>
                                <td>{{ $quanTriVien->ho_ten }}</td>
                                <td>
                                    <a href="{{ route('quan-tri-vien.khoi-phuc', ['$id' =>$quanTriVien->id]) }}" class="btn btn-purple waves-effect waves-light">
                                        Khôi phục
                                    </a>
                                </td>
                                <td>
                                    <button class="btn btn-danger waves-effect waves-light xoa-luon" 
                                    data-href="{{ route('quan-tri-vien.xoa-bo', ['$id' =>$quanTriVien->id]) }}">Xóa luôn </button>
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
