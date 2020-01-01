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
                    <li class="breadcrumb-item active">Lịch sử mua gói credit</li>
                </ol>
            </div>
            <h4 class="page-title">Danh sách lịch sử gói credit</h4>
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
                            <th>Người chơi ID</th>
                            <th>Gói Credit ID</th>
                            <th>Credit</th>
                            <th>Số tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (isset($lichSuMua))
                            @foreach ($lichSuMua as $lichsu)
                                <tr>
                                    <th>{{ $lichsu->id }}</th>
                                    <th>{{ $lichsu->nguoi_choi_id }}</th>
                                    <th>{{ $lichsu->goi_credit_id }}</th>
                                    <th>{{ $lichsu->credit }}</th>
                                    <th>{{ $lichsu->so_tien }}</th>
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