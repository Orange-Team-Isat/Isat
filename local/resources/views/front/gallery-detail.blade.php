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
            <?php 
               $gallery= DB::table('gallery')->where('gallery_id',$gallery_id)->first(); 
               $image= DB::table('image')->where('image_ref',$gallery->gallery_ref)->get(); 
               
                    $month_th['01'] = 'ม.ค.';
                    $month_th['02'] = 'ก.พ.';
                    $month_th['03'] = 'มี.ค.';
                    $month_th['04'] = 'เม.ย.';
                    $month_th['05'] = 'พ.ค.';
                    $month_th['06'] = 'มิ.ย.';
                    $month_th['07'] = 'ก.ค.';
                    $month_th['08'] = 'ส.ค.';
                    $month_th['09'] = 'ก.ย.';
                    $month_th['10'] = 'ต.ค.';
                    $month_th['11'] = 'พ.ย.';
                    $month_th['12'] = 'ธ.ค.';
                    $month_en['01'] = 'JAN';
                    $month_en['02'] = 'FEB';
                    $month_en['03'] = 'MAR';
                    $month_en['04'] = 'APR';
                    $month_en['05'] = 'MAY';
                    $month_en['06'] = 'JUN';
                    $month_en['07'] = 'JUL';
                    $month_en['08'] = 'AUG';
                    $month_en['09'] = 'SEP';
                    $month_en['10'] = 'OCT';
                    $month_en['11'] = 'NOV';
                    $month_en['12'] = 'DEC';
                   
                    if(!empty($gallery->gallery_date)){
                        $date = explode('-',$gallery->gallery_date);
                        if(Session::get('lang') == 'th' ){
                            $year = $date[0]+543;
                        }else{
                            $year = $date[0];
                        }
                        $date_text = $date[2].' '.(Session::get('lang') == 'th' ? $month_th[$date[1]] : $month_en[$date[1]] ).' '.$year;
                        
                       }
               ?>
            
            <div class="row">
                <div class="col">
                    <div class="GrayBox-info">
                        <div class="row">
                            <div class="col">
                                <h3 class="subTopic">{{ (Session::get('lang') == 'th' ? $gallery->gallery_title_th : $gallery->gallery_title_en) }}</h3>
                                <div class="dateBox-cc">{{$date_text}}</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-4">
                                <div class="text-center">
                                    <p><?php echo (Session::get('lang') == 'th' ? $gallery->gallery_detail_th : $gallery->gallery_detail_en); ?></p>
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
                            @if(!empty($image))
                                @foreach($image as $_image)
                                <li><img src="{{asset('local/public/gallery').'/'.$_image->image_file}}"></li>

                                @endforeach
                            @endif
                                <!-- <li><img src="{{asset('assets/images/gallery/gallery01.jpg')}}"></li>
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
                                <li><img src="{{asset('assets/images/gallery/gallery15.jpg')}}"></li> -->
                            </ul>
                        </div>
                        <div class="flexslider" id="carousel">
                            <ul class="slides">
                            @if(!empty($image))
                                @foreach($image as $_image)
                                <li><img src="{{asset('local/public/gallery').'/'.$_image->image_file}}"></li>

                                @endforeach
                            @endif
                                <!-- <li><img src="{{asset('assets/images/gallery/gallery01.jpg')}}"></li>
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
                                <li><img src="{{asset('assets/images/gallery/gallery15.jpg')}}"></li> -->
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