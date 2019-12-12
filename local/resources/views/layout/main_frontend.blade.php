<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>TheLab</title>
    <meta charset="UTF-8">
    <link rel="SHORTCUT ICON" href="{{ asset('img/thelab5-01.ico') }}"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- /////////////////////////Css///////////////////////// --}}
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <!-- Required Framework -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/bootstrap/css/bootstrap.min.css') }}">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/simple-line-icons/css/simple-line-icons.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/font-awesome/css/font-awesome.min.css') }}">
    <!-- Sweertalert -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sweetalert2.min.css') }}">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.mCustomScrollbar.css') }}">
    <!-- Styles link -->
    @yield('styles_link')
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_modify.css') }}">
    <style>
        body{
            font-family: 'Poppins','Kanit',sans-serif!important ;
        }
    </style>
    @yield('styles')
</head>
<body class="fix-menu" >
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>

    <div id="pcoded" class="pcoded">
      <div class="pcoded-overlay-box"></div>
      <div class="pcoded-container navbar-wrapper">
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <div class="pcoded-content" style="margin-left: 0px;">
                  <div class="pcoded-inner-content">
                    <div class="main-body">
                      <div class="page-wrapper">

                        @yield('content')

                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</body>
{{-- //////////////////////////JS/////////////////////////// --}}
<script src="{{ asset('bower_components/jquery/js/jquery.min.js') }}"></script>
<script src="{{ asset('bower_components/jquery-ui/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('bower_components/popper.js/js/popper.min.js') }}"></script>
<script src="{{ asset('bower_components/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- Sweert Alert -->
<script src="{{ asset('js/sweetalert2.min.js') }}"></script>
<!-- jquery slimscroll js -->
<script src="{{ asset('bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }}"></script>
<!-- modernizr js -->
<script src="{{ asset('bower_components/modernizr/js/modernizr.js') }}"></script>
<!-- slimscroll js -->
<script src="{{ asset('assets/js/SmoothScroll.js') }}"></script>
<script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<!-- menu js -->
<script src="{{ asset('assets/js/pcoded.min.js') }}"></script>
<script src="{{ asset('assets/js/vertical/vertical-layout.min.js') }}"></script>
<!-- custom js -->
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/function_js.js') }}"></script>
<script language="javascript">
        //$('.btn_refresh').click(function(){
        //    location.reload();
        //})
        function load_sw(){
            swal({
              // title: "กรุณารอดำเนินการ!",
              text: "กรุณารอสักครู่ !",
              imageUrl: "{{ asset('img/loading_show.gif') }}",
              showConfirmButton: false,
              // allowOutsideClick: false,
            });
          }
</script>
@yield('javascripts')

</html>


