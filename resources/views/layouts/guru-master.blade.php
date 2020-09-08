<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/rocker/color-version/pages-blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:20:59 GMT -->
@include('layouts.guru.head')


<body>

@include('layouts.guru.sidebar')

<!--Start topbar header-->
@include('layouts.guru.header')
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
   
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
		  <!--Please remove the height before using this page-->
		      @yield('content')
		 
        </div>
      </div>

    </div>
    <!-- End container-fluid-->
@include('sweetalert::alert')

    

   
  </div><!--End wrapper-->


  <!-- Bootstrap core JavaScript-->
  <script src="{{URL::to('assets/js/jquery.min.js')}}"></script>
  <script src="{{URL::to('assets/js/popper.min.js')}}"></script>
  <script src="{{URL::to('assets/js/bootstrap.min.js')}}"></script>
	
  <!-- simplebar js -->
   <script src="{{URL::to('assets/plugins/simplebar/js/simplebar.js')}}"></script>
  <!-- waves effect js -->
  <script src="{{URL::to('assets/js/waves.js')}}"></script>
  <!-- sidebar-menu js -->
  <script src="{{URL::to('assets/js/sidebar-menu.js')}}"></script>
  <!-- Custom scripts -->
  <script src="{{URL::to('assets/js/app-script.js')}}"></script>
@include('layouts.guru.js')	
</body>

<!-- Mirrored from codervent.com/rocker/color-version/pages-blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:20:59 GMT -->
</html>
