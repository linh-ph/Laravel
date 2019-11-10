<!DOCTYPE html>
<html lang="en">
<!-- header -->
@include('partials.heade')

<body class="animsition">
    <div class="page-wrapper">
        <!-- header Mobile -->
        @include('partials.header-mobile')

        <!-- endheader mobile -->


        <!-- Menu Sidebar -->
        @include('partials.menu-sidebar')

        <!-- ------ -->
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- header desktop -->
            @include('partials.header-desktop')
            <!-- end header -->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        @yield("main-content")
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- script -->
    @include('partials.script')
</body>

</html>