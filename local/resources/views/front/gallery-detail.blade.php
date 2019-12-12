<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>@include('front.inc_header') <?php $pageName="home"; ?></head>
<body>
    <div class="thetop"></div>
    @include('front.inc_topmenu')
    
    
    <!--------------- G A L L E R Y :: D E T A I L --------------->
    <div class="content-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Photo Gallery</h2>
                </div>
            </div>
            
            <div class="row">
                <div class="col">
                    <div class="GrayBox-info">
                        <div class="row">
                            <div class="col">
                                <h3 class="subTopic">Photo Gallery Topic Photo Gallery Topic Photo Gallery Topic</h3>
                                <div class="dateBox-cc">22 OCT 2019</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-4">
                                <div class="text-center">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-10 col-12 offset-lg-1">
                    <div class="gallery-slide">
                        <div class="flexslider" id="slider">
                            <ul class="slides">
                                <li><img src="{{asset('assets/images/gallery/gallery01.jpg')}}"></li>
                                <li><img src="{{asset('assets/images/gallery/gallery02.jpg')}}"></li>
                                <li><img src="{{asset('assets/images/gallery/gallery03.jpg')}}"></li>
                                <li><img src="{{asset('assets/images/gallery/gallery04.jpg')}}"></li>
                                <li><img src="{{asset('assets/images/gallery/gallery05.jpg')}}"></li>
                                <li><img src="{{asset('assets/images/gallery/gallery06.jpg')}}"></li>
                                <li><img src="{{asset('assets/images/gallery/gallery07.jpg')}}"></li>
                                <li><img src="{{asset('assets/images/gallery/gallery08.jpg')}}"></li>
                                <li><img src="{{asset('assets/images/gallery/gallery09.jpg')}}"></li>
                                <li><img src="{{asset('assets/images/gallery/gallery10.jpg')}}"></li>
                                <li><img src="{{asset('assets/images/gallery/gallery11.jpg')}}"></li>
                                <li><img src="{{asset('assets/images/gallery/gallery12.jpg')}}"></li>
                                <li><img src="{{asset('assets/images/gallery/gallery13.jpg')}}"></li>
                                <li><img src="{{asset('assets/images/gallery/gallery14.jpg')}}"></li>
                                <li><img src="{{asset('assets/images/gallery/gallery15.jpg')}}"></li>
                            </ul>
                        </div>
                        <div class="flexslider" id="carousel">
                            <ul class="slides">
                                <li><img src="{{asset('assets/images/gallery/gallery01.jpg')}}"></li>
                                <li><img src="{{asset('assets/images/gallery/gallery02.jpg')}}"></li>
                                <li><img src="{{asset('assets/images/gallery/gallery03.jpg')}}"></li>
                                <li><img src="{{asset('assets/images/gallery/gallery04.jpg')}}"></li>
                                <li><img src="{{asset('assets/images/gallery/gallery05.jpg')}}"></li>
                                <li><img src="{{asset('assets/images/gallery/gallery06.jpg')}}"></li>
                                <li><img src="{{asset('assets/images/gallery/gallery07.jpg')}}"></li>
                                <li><img src="{{asset('assets/images/gallery/gallery08.jpg')}}"></li>
                                <li><img src="{{asset('assets/images/gallery/gallery09.jpg')}}"></li>
                                <li><img src="{{asset('assets/images/gallery/gallery10.jpg')}}"></li>
                                <li><img src="{{asset('assets/images/gallery/gallery11.jpg')}}"></li>
                                <li><img src="{{asset('assets/images/gallery/gallery12.jpg')}}"></li>
                                <li><img src="{{asset('assets/images/gallery/gallery13.jpg')}}"></li>
                                <li><img src="{{asset('assets/images/gallery/gallery14.jpg')}}"></li>
                                <li><img src="{{asset('assets/images/gallery/gallery15.jpg')}}"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="borderTop-gray"></div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="content-center">
                        <a class="buttonGray minWidth" href="{{ url('gallery')}}">Back</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
    @include('front.inc_topbutton')
    
    @include('front.inc_footer')
   
    
    <script type="text/javascript">
        $(window).load(function() {
            // The slider being synced must be initialized first
            $('#carousel').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                itemWidth: 120,
                itemMargin: 7,
                asNavFor: '#slider'
            });
            
            $('#slider').flexslider({
                animation: "fade",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                sync: "#carousel"
            });
        });
    </script>
    
</body>
</html>