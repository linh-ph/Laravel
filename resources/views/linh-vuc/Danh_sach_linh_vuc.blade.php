@extends('layout_New')
@section('css')
<link href="{{ asset ('assets/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">
@endsection

@section('main-content')
<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">Lĩnh Vực</h3>
        <div class="table-data__tool">
            <!-- <div class="table-data__tool-left">
                <div class="rs-select2--light rs-select2--md">
                    <select class="js-select2" name="property">
                        <option selected="selected">All Properties</option>
                        <option value="">Option 1</option>
                        <option value="">Option 2</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
                <div class="rs-select2--light rs-select2--sm">
                    <select class="js-select2" name="time">
                        <option selected="selected">Today</option>
                        <option value="">3 Days</option>
                        <option value="">1 Week</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
                <button class="au-btn-filter">
                    <i class="zmdi zmdi-filter-list"></i>filters</button>
            </div> -->
            <div class="table-data__tool-right">
                <button class="au-btn au-btn-icon au-btn--green au-btn--small" type="">
                    <a href="{{ route('linh-vuc.them-moi')}}" class="zmdi zmdi-plus" name="them_linh_vuc">add item</a></button>
                <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                    <select class="js-select2" name="type">
                        <option selected="selected">Export</option>
                        <option value="">Option 1</option>
                        <option value="">Option 2</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
            </div>
        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th>
                            <label class="au-checkbox">
                                <input type="checkbox">
                                <span class="au-checkmark"></span>
                            </label>
                        </th>
                        <th>ID</th>
                        <th>Tên Linh Vực</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($linhvuc as $lv)
                    <tr class="tr-shadow">
                        <td>
                            <label class="au-checkbox">
                                <input type="checkbox">
                                <span class="au-checkmark"></span>
                            </label>
                        </td>
                        <td>{{$lv->id}}</td>

                        <td>{{$lv->ten_linh_vuc}}</td>
                        <td>
                            <div class="table-data-feature">
                                <a href="{{ route('linh-vuc.cap-nhat', ['id' => $lv->id])}}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="zmdi zmdi-edit"></i></a>
                                <a href="{{ route('linh-vuc.xoa', ['id' => $lv->id])}}" class="item"data-toggle="tooltip" data-placement="top" title="Delete">
                                    <i class="zmdi zmdi-delete"></i>
                                </a>
                                <!-- <button href="{{ route('linh-vuc.cap-nhat', ['id' => $lv->id])}}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i href="{{ route('linh-vuc.cap-nhat', ['id' => $lv->id])}}" class="zmdi zmdi-edit"></i>
                                </button> -->
                                <!-- <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>
                                <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                    <i class="zmdi zmdi-more"></i>
                                </button> -->
                            </div>
                        </td>
                    </tr>
                    <tr class="spacer"></tr>

                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE -->
    </div>
</div>
@endsection

@section('js')
@endsection