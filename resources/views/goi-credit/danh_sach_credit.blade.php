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
                    <li class="breadcrumb-item active">Gói Credit</li>
                </ol>
            </div>
            <h4 class="page-title">Danh sách gói Credit</h4>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">

    @if (session('cap-nhat-xoa'))
    <script type="text/javascript">
        Swal.fire({
            title: 'Bạn có chắc xóa không?',
            text: "Bạn sẽ không thể khôi phục gói credit này!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Xóa!'
        }).then((result) => {
            if (result.value) {
                Swal.fire(
                    'Đã xóa!',
                    'Gói credit đã được xóa.',
                    'success'
                )
            }
        })
    </script>
    @endif
    @if(Session::has('message'))
        <!-- ALERT-->
        <div class="alert au-alert-success alert-dismissible fade show au-alert au-alert--70per" role="alert">
            <i class="zmdi zmdi-check-circle"></i>
            <span class="content"> {{Session::get('message')}}</span>
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">
                    <i class="zmdi zmdi-close-circle"></i>
                </span>
            </button>
        </div>
        <!-- END ALERT-->
        @endif
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Thêm gói credit</h4>
                <a href="{{ route('goi-credit.them-moi') }}" class="btn btn-primary waves-effect waves-light">Thêm mới
                </a>
                <p class="text-muted font-13 mb-4">

                </p>
                <table class="table dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên gói</th>
                            <th>Credit</th>
                            <th>Số tiền</th>
                            <th>Chỉnh sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($goiCredit ))
                        @foreach($goiCredit as $credit)
                        <tr>
                            <th>{{$credit->id}}</th>
                            <th>{{$credit->ten_goi}}</th>
                            <th>{{$credit->credit}}</th>
                            <th>{{$credit->so_tien}}</th>
                            <th>
                                <a href="{{ route('goi-credit.cap-nhat',['id'=>$credit->id])}}" class="btn btn-purple waves-effect waves-light">
                                    <i class="mdi mdi-grease-pencil"></i>
                                </a>
                            </th>
                            <th>
                                <a href="{{ route('goi-credit.xoa',['id'=>$credit->id]) }}" class="btn btn-danger waves-effect waves-light">
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