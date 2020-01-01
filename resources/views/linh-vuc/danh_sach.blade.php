@extends('layout')
@section('css')
<link href="{{ asset ('assets/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">
@endsection

@section('main-content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Quản trị</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">danh sách</a></li>
                    <li class="breadcrumb-item active">Lĩnh vực</li>
                </ol>
            </div>
            <h4 class="page-title">Danh sách lĩnh vực</h4>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">Lĩnh Vực</h3>
        @if(Session('message'))
      
        <script type="text/javascript">Swal.fire({
        icon: 'success',
        title: '{{session("message")}}',
        showConfirmButton: false,
        timer: 3000
})</script>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Thêm mới lĩnh vực</h4>
                <a href="{{ route('linh-vuc.them-moi') }}" class="btn btn-primary waves-effect waves-light">Thêm mới
                </a>


                <table id="basic-datatable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên lĩnh vực</th>
                            <th>Chỉnh sửa</th>
                            <th>Xóa </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($linhvuc))
                        @foreach($linhvuc as $lv)
                        <tr>
                            <th>{{$lv->id}}</th>
                            <th>{{$lv->ten_linh_vuc}}</th>
                            <th>
                                <a href="{{ route('linh-vuc.cap-nhat', ['id' => $lv->id]) }}" class="btn btn-info waves-effect waves-light">
                                    <i class="mdi mdi-grease-pencil"></i>
                                </a>
                            </th>
                            <th>
                                <a href="{{ route('linh-vuc.xoa',['id'=>$lv->id]) }}" class="btn btn-danger waves-effect waves-light">
                                    <i class="mdi mdi-delete"></i>
                                </a></th>
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

@section('js')
@endsection