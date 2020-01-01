<!DOCTYPE html>
<html lang="en">
<!-- <Head></Head> -->
@include('partials.heade')

<body>

    <!-- Navigation Bar-->
    @include('partials.header-desktop')
    <!-- End Navigation Bar-->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="wrapper">
        <div class="container-fluid">

            <!-- start page title -->
            @yield('main-content')

        </div> <!-- end container -->
    </div>
    <!-- end wrapper -->

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    Đồ án quản trị website &copy; Nguyen Phan Linh<a href=""></a>
                </div>
                <div class="col-md-6">
                    <div class="text-md-right footer-links d-none d-sm-block">
                        <a href="javascript:void(0);">Giới thiệu</a>
                        <a href="javascript:void(0);">Hỗ trợ</a>
                        <a href="javascript:void(0);">Liên hệ</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->

    <!-- Right Sidebar -->
    @include('partials.right-bar')
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    @include('partials.script')
    

</body>

</html>