@extends('layout')
@section('css')
    <!-- third party css -->
        <link href="{{ asset ('assets/libs/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('assets/libs/datatables/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('assets/libs/datatables/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('assets/libs/datatables/select.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <!-- third party css end -->

        <!-- App css -->
        <link href="{{ asset ('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h2 >DANh SÁCH NGƯỜI CHƠI</h2>
                    <a href="{{ route('cau-hoi.them-moi')}}" type="button" class="btn btn-primary waves-effect waves-light">Thêm Người Chơi</a><br><br>

                        <table id="scroll-horizontal-datatable" class="table w-100 nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>TÊN ĐĂNG NHẬP</th>
                                <th>MẬT KHẨU</th>
                                <th>EMAIL</th>
                                <th>HÌNH ĐẠI DIỆN</th>
                                <th>ĐIỂM CAO NHẤT</th>
                                <th>CREDIT</th>
                               
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($nguoichoi as $nc)
                            <tr id="1">
                                <td><span class="tabledit-span tabledit-identifier">{{$nc -> id}}</span><input class="tabledit-input tabledit-identifier" type="hidden" name="id_cau_hoi" value=""></td>
                                <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span"> {{$nc ->ten_dang_nhap }}</span><input class="tabledit-input form-control form-control-sm" type="text" name="col1" value="Sonya Frost" style="display: none;" disabled=""></td>
                                <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">{{$nc->mat_khau}}</span><input class="tabledit-input form-control form-control-sm" type="text" name="col2" value="Software Engineer" style="display: none;" disabled=""></td>
                                <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">{{$nc->email}}</span><input class="tabledit-input form-control form-control-sm" type="text" name="col3" value="Edinburgh" style="display: none;" disabled=""></td>
                                <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span"></span>{{$nc->hinh_dai_dien}}<input class="tabledit-input form-control form-control-sm" type="text" name="col4" value="23" style="display: none;" disabled=""></td>
                                <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">{{$nc->diem_cao_nhat}}</span><input class="tabledit-input form-control form-control-sm" type="text" name="col6" value="$103,600" style="display: none;" disabled=""></td>
                                <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">{{$nc->credit}}</span><input class="tabledit-input form-control form-control-sm" type="text" name="col6" value="$103,600" style="display: none;" disabled=""></td>
                                
                                <td>
                                    <a href="{{ route('nguoi-choi.cap-nhat', ['id' => $nc->id])}}" class="btn btn-success waves-effect waves-light">
                                        <i class="fe-edit"></i></a>
                                    <a href="{{ route('nguoi-choi.xoa', ['id' => $nc->id])}}"class="btn btn-danger waves-effect waves-light">
                                        <i class="fe-trash-2"></i>
                                    </a>
                                </td> 
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
                <!-- end row-->
@endsection
@section('js')
<div class="rightbar-overlay"></div>

<!-- Vendor js -->
<script src="assets/js/vendor.min.js"></script>

<!-- third party js -->
<script src="{{ asset ('assets/libs/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset ('assets/libs/datatables/dataTables.bootstrap4.js')}}"></script>
<script src="{{ asset ('assets/libs/datatables/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset ('assets/libs/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset ('assets/libs/datatables/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset ('assets/libs/datatables/buttons.html5.min.js')}}"></script>
<script src="{{ asset ('assets/libs/datatables/buttons.flash.min.js')}}"></script>
<script src="{{ asset ('assets/libs/datatables/buttons.print.min.js')}}"></script>
<script src="{{ asset ('assets/libs/datatables/dataTables.keyTable.min.js')}}"></script>
<script src="{{ asset ('assets/libs/datatables/dataTables.select.min.js')}}"></script>
<script src="{{ asset ('assets/libs/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ asset ('assets/libs/pdfmake/vfs_fonts.js')}}"></script>
<!-- third party js ends -->

<!-- Datatables init -->
<script src="{{ asset ('assets/js/pages/datatables.init.js')}}"></script>

<!-- App js-->
<script src="{{ asset ('assets/js/app.min.js')}}"></script>
@endsection
