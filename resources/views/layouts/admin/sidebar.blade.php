<!-- Start wrapper-->
<div id="wrapper">

  <!--Start sidebar-wrapper-->
  <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
   <div class="brand-logo">
    <a href="index.html">
     <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
     <h5 class="logo-text">RockerAdmin</h5>
   </a>
 </div>
 <ul class="sidebar-menu do-nicescrol">
  <li class="sidebar-header">MAIN NAVIGATION</li>
  <li>
    <a href="index.html" class="waves-effect">
      <i class="icon-home"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="sidebar-submenu">
      <li><a href="{{URL::to('admin/daftar-upacara')}}"><i class="icon-support"></i> Daftar Upacara</a></li>
      <li><a href="{{URL::to('admin/tambah-petugas-upacara')}}"><i class="icon-note"></i> Kelola Jadwal Upacara</a></li>
      <li><a href="{{URL::to('admin/tambah-pembina')}}"><i class="icon-note"></i> Kelola Pembina</a></li>
      <li><a href="{{URL::to('admin/tambah-kelas')}}"><i class="icon-note"></i> kelola Kelas</a></li>
    </ul>
  </li>





</div>
   <!--End sidebar-wrapper-->