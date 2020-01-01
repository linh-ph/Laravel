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
                    <li class="breadcrumb-item active">Chi tiết lượt chơi</li>
                </ol>
            </div>
            <h4 class="page-title">Danh sách chi tiết lượt chơi</h4>
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
                            <th>Lượt chơi ID</th>
                            <th>Câu hỏi ID</th>
                            <th>Phương án</th>
                            <th>Điểm</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($chiTiet))
                        @foreach($chiTiet as $chitiet)
                        <tr>
                            <th>{{$chitiet->id}}</th>
                            <th>{{$chitiet->luot_choi_id}}</th>
                            <th>{{$chitiet->cau_hoi_id}}</th>
                            <th>{{$chitiet->phuong_an}}</th>
                            <th>{{$chitiet->diem}}</th>
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