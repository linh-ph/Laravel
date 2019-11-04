@extends('layout')
@section('css')
        <link href="{{ asset ('assets/libs/jquery-nice-select/nice-select.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('assets/libs/switchery/switchery.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('assets/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('assets/libs/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('main-content')
<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="header-title">THÊM CÂU HỎI</h2> 
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form>
                                            <div class="form-group mb-3">
                                                <label for="simpleinput">ID</label>
                                                <input type="text" id="simpleinput" class="form-control">
                                            </div>
                                            <!-- hdf -->
                                            <div class="form-group mb-3">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label class="header-title">Lĩnh Vực</label>
                                                        foreach($linhvuc as $lv)
                                                        <select class="custom-select ">
                                                            <option selected>Chọn Lĩnh Vực</option>
                                                            <option value="{{$lv->id}}"></option>
                                                        </select>
                                                       endforeach
                                                    </div>
                                                </div> <!-- end col -->
                                            </div>
                                            <!-- sdasd -->
                                            <div class="form-group mb-3">
                                                <label for="example-password">Nội Dung Câu Hỏi</label>
                                                <input type="text" id="example-password" class="form-control" placeholder="Nội dung">
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="example-palaceholder">Phương Án A</label>
                                                <input type="text" id="example-palaceholder" class="form-control" placeholder="Phương Án A">
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="example-textarea">Phương Án B</label>
                                                <input type="text" id="example-palaceholder" class="form-control" placeholder="Phương Án B">
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="example-readonly">Phương Án C</label>
                                                <input type="text" id="example-readonly" class="form-control"  placeholder="Phương Án C">
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="example-disable">Phương Án D</label>
                                                <input type="text" class="form-control" id="example-disable"  placeholder="Phương Án D">
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="example-static">Đáp Án</label>
                                                <input type="text"  class="form-control" id="example-static" placeholder="Đáp Án">
                                            </div>
                                            <button type="button" class="btn btn-warning width-lg waves-effect waves-light" style="width:626px; background-color:#5089de;">Thêm </button>                                        </form>
                                    </div> <!-- end col -->
                            </div> <!-- end card-body -->
                        </div> <!-- end card -->
                    </div><!-- end col -->
                </div>
@endsection
@section('js') 
<script src="{{ asset ('assets/js/vendor.min.js')}}"></script>


<script src="{{ asset ('assets/libs/select2/select2.min.js')}}"></script>
<script src="{{ asset ('assets/libs/bootstrap-select/bootstrap-select.min.js')}}"></script>
<script src="{{ asset ('assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
<script src="{{ asset ('assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>

<!-- Init js-->
<script src="{{ asset ('assets/js/pages/form-advanced.init.js')}}"></script>

<!-- App js-->
<script src="{{ asset ('assets/js/app.min.js')}}"></script>
@endsection