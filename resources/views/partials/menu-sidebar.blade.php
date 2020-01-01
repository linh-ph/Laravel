 <!-- MENU SIDEBAR-->
 <aside class="menu-sidebar d-none d-lg-block">
     <div class="logo">
         <a href="#">
             <img src="{{asset('assets/images/icon/logo.png')}}" alt="Cool Admin" />
         </a>
     </div>
     <div class="menu-sidebar__content js-scrollbar1">
         <nav class="navbar-sidebar">
             <ul class="list-unstyled navbar__list">

                 <li>
                     <a href="{{route('linh-vuc.danh-sach')}}">
                         <i></i>Lĩnh Vực</a>
                 </li>
                 <li class="has-sub">
                     <a class="js-arrow" href="#">
                         <i></i>Câu Hỏi</a>
                     <ul class="list-unstyled navbar__sub-list js-sub-list">
                         <li>
                             <a href="{{route('cau-hoi.danh-sach')}}">Danh Sách</a>
                         </li>
                         <!--   <li>
                                    <a href="{{route('cau-hoi.cap-nhat',['id'])}}">Tìm Câu Hỏi Theo Lĩnh Vực</a>
                                </li> -->

                     </ul>
                 </li>
                 <li>
                     <a href="{{route('nguoi-choi.danh-sach')}}">
                         <i></i>Người Chơi</a>
                 </li>
                 <li class="has-sub">
                     <a class="js-arrow" href="#">
                         <i></i>Gói Credit</a>
                     <ul class="list-unstyled navbar__sub-list js-sub-list">
                         <li>
                             <a href="{{route('goi-credit.danh-sach')}}">Xem Các Gói</a>
                         </li>
                         <li>
                             <a href="{{route('lich-su-mua-credit.danh-sach')}}">Lịch Sử Mua</a>
                         </li>

                     </ul>
                 </li>
                 <li class="has-sub">
                     <a class="js-arrow" href="#">
                         <i></i>Lượt Chơi</a>
                     <ul class="list-unstyled navbar__sub-list js-sub-list">
                         <li>
                             <a href="{{route('luot-choi.danh-sach')}}">Các Lượt Chơi</a>
                         </li>
                         <li>

                             <a href="{{ route('chi-tiet-luot-choi.danh-sach')}}">Chi Tiết Lượt Chơi</a>
                         </li>

                     </ul>
                 </li>
                 <li>
                     <a href="{{ route('quan-tri-vien.danh-sach') }}">
                         <i></i>Quản Trị Viên</a>
                 </li>
                 <li class="has-sub">
                     <a class="js-arrow" href="#">
                         <i></i>Cấu Hình</a>
                     <ul class="list-unstyled navbar__sub-list js-sub-list">
                         <li>
                             <a href="{{route('cau-hinh-diem.danh-sach')}}">
                                 <i></i>Cấu Hình Câu Hỏi</a>
                         </li>
                         <li>
                             <a href="{{route('cau-hinh-app.danh-sach')}}">
                                 <i></i>Cấu Hình App</a>
                         </li>
                         <li>
                             <a href="">
                                 <i></i>Cấu Hình Trợ Giúp</a>
                         </li>

                     </ul>
                 </li>




             </ul>
         </nav>
     </div>
 </aside>
 <!-- END MENU SIDEBAR-->