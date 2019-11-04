
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
                    <h2 >DANh SÁCH CÂU HỎI</h2>
                    <a href="{{ route('cau-hoi.them-moi')}}" type="button" class="btn btn-primary waves-effect waves-light">Thêm Câu Hỏi</a><br><br>

                        <table id="scroll-horizontal-datatable" class="table w-100 nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NỘI DUNG</th>
                                <th>LĨNH VỰC</th>
                                <th>PHƯƠNG ÁN A</th>
                                <th>PHƯƠNG ÁN B</th>
                                <th>PHƯƠNG ÁN C</th>
                                <th>PHƯƠNG ÁN D</th>
                                <th>ĐÁP ÁN</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        @for($i = 1 ; $i < 50 ; $i++)
                            <tr id="1">
                                <td><span class="tabledit-span tabledit-identifier"></span><input class="tabledit-input tabledit-identifier" type="hidden" name="id_cau_hoi" value=""></td>
                                <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">Lorem ipsum dolor sit amet consectetur, adipisicing  dignissimos libero asperiores enim et rem amet, dolorem iste vitae facere pariatur atque magnam sapiente alias?</span><input class="tabledit-input form-control form-control-sm" type="text" name="col1" value="Sonya Frost" style="display: none;" disabled=""></td>
                                <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">Software Engineer</span><input class="tabledit-input form-control form-control-sm" type="text" name="col2" value="Software Engineer" style="display: none;" disabled=""></td>
                                <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">Edinburgh</span><input class="tabledit-input form-control form-control-sm" type="text" name="col3" value="Edinburgh" style="display: none;" disabled=""></td>
                                <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">23</span><input class="tabledit-input form-control form-control-sm" type="text" name="col4" value="23" style="display: none;" disabled=""></td>
                                <td>2008/12/13</td>
                                <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">$103,600</span><input class="tabledit-input form-control form-control-sm" type="text" name="col6" value="$103,600" style="display: none;" disabled=""></td>
                                <td>      A     </td>
                                <td>
                                    <a href="#" class="btn btn-success waves-effect waves-light">
                                        <i class="fe-edit"></i></a>
                                    <a href="#"class="btn btn-danger waves-effect waves-light">
                                        <i class="fe-trash-2"></i>
                                    </a>
                                </td> 
                            </tr>
                        @endfor
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
