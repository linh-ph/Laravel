@extends('layout_New')
@section('css')
<link href="{{ asset ('assets/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

@endsection
@section('main-content')
<div class="row">
    <div class="col-lg-6">
        <div class="card">

            <div class="card-header">@if(isset($linhvuc)) Cập Nhật Lĩnh Vực @else Thêm Lĩnh Vực @endif </div>



            <div class="card-body">

                <hr>
                @if(isset($linhvuc))
                <form action="{{ route('linh-vuc.xu-ly-cap-nhat' , ['id' =>$linhvuc->id])}}" method="post" novalidate="novalidate"> @else <form action="{{ route('linh-vuc.xu-ly-them-moi')}}" method="POST" novalidate="novalidate">
                        @endif
                        @csrf
                        <div class="form-group has-success">
                            <label for="cc-name" class="control-label mb-1" name="ten_linh_vuc" >Tên Lĩnh Vực</label>
                            <input id="cc-name" name="ten_linh_vuc" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Tên Lĩnh Vực" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                            <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                        </div>

                        <div>

                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <i class="fa fa-lock fa-lg"></i>&nbsp;
                                <span id="payment-button-amount">@if(isset($linhvuc)) Cập Nhật @else Thêm @endif</span>

                            </button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')

@endsection