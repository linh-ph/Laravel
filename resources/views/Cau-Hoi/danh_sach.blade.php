@extends('layout')
@section('css')

@endsection

@section('main-content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Quản trị</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Danh sách</a></li>
                    <li class="breadcrumb-item active">Câu hỏi</li>
                </ol>
            </div>
            <h4 class="page-title">Danh sách câu hỏi</h4>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Thêm mới câu hỏi</h4>
                <a href="{{ route('cau-hoi.them-moi') }}" class="btn btn-primary waves-effect waves-light">Thêm mới
                </a>
               
                <table id="basic-datatable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nội dung</th>
                            <th>Lĩnh vực</th>
                            <th>Phương án A</th>
                            <th>Phương án B</th>
                            <th>Phương án C</th>
                            <th>Phương án D</th>
                            <th>Đáp án </th>
                            <th>Cập nhật</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($cauhoi))
                        @foreach($cauhoi as $ch)
                        <tr>
                            <td>{{$ch->id}}</td>
                            <td>{{$ch->noi_dung}}</td>
                            <td>{{$ch->linhVuc->ten_linh_vuc}}</td>
                            <td>{{$ch->phuong_an_a}}</td>
                            <td>{{$ch->phuong_an_b}}</td>
                            <td>{{$ch->phuong_an_c}}</td>
                            <td>{{$ch->phuong_an_d}}</td>
                            <td>{{$ch->dap_an}}</td>
                            <th>
                                <a href="{{ route('cau-hoi.cap-nhat',['id'=>$ch->id])}}" class="btn btn-info waves-effect waves-light">
                                    <i class="mdi mdi-grease-pencil">
                                    </i>
                                </a>
                            </th>
                            <th>
                                <a href="{{ route('cau-hoi.xoa',['id'=>$ch->id]) }}" class="btn btn-danger waves-effect waves-light">
                                    <i class="mdi mdi-delete">
                                    </i>
                                </a>
                            </th>
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
@section('js')

@endsection