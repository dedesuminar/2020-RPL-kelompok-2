<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/rocker/color-version/pages-blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:20:59 GMT -->
@include ('layouts.admin.head')
<body>
<!-- Start wrapper-->
 <div id="wrapper">

  <!--Start sidebar-wrapper-->
@include ('layouts.admin.sidebar')
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
@include ('layouts.admin.header')
<!--End topbar header-->

<div class="clearfix"></div>

  <div class="content-wrapper">
    <div class="container-fluid">
    <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">


     </div>
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
      <div style="height:auto"> <!--Please remove the height before using this page-->
          @yield('content')

      </div>
        </div>
      </div>

    </div>
    <!-- End container-fluid-->

   </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
   
  <!--End footer-->

  </div><!--End wrapper-->
  @include('layouts.admin.js')

  @include('sweetalert::alert')
  </body>
</html>