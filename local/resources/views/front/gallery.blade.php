<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>@include('front.inc_header') <?php $pageName="home"; ?></head>
<body>
    <div class="thetop"></div>
    
    @include('front.inc_topmenu')
    
    <!--------------- G A L L E R Y --------------->
    <div class="content-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Photo Gallery</h2>
                </div>
            </div>
            
            <?php  $gallery= DB::table('gallery')->orderBy('gallery_date','DESC')->first(); 

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
            
            }  ?> 

            <div class="news-bigBox">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">    
                       <div class="img-width"><img src="{{asset('local/public/gallery').'/'.$gallery->gallery_index}}"></div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="headerBK">
                            <p>{{ (Session::get('lang') == 'th' ? $gallery->gallery_title_th : $gallery->gallery_title_en) }}</p>
                        </div>
                        <div class="news-tagline" id="gallery">
                            <div class="row">
                                <div class="col">
                                    <div class="dateBox-cc">{{$date_text}}</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p><?php echo (Session::get('lang') == 'th' ? $gallery->gallery_detail_th : $gallery->gallery_detail_en); ?></p>

                                </div>
                            </div>     
                        </div>
                        <div class="row">
                            <div class="col-6">
                            </div>
                            <div class="col-6"></div>
                        </div>
                        <a class="buttonYellow" href="{{ url('/gallery-detail')}}/{{$gallery->gallery_id}}">Read more</a>
                    </div>
                
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="blueLine-decor"></div>
                </div>
            </div>
            
            <!--------------- GALLERY BOX --------------->
            <div class="padding-3col">
                <div class="row">
                <?php $gallery= DB::table('gallery')->orderBy('gallery_date','DESC')->get(); 

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
                    ?>

                    @if(!empty($gallery))
                        @foreach($gallery as $_gallery)   
                            <?php if(!empty($_gallery->gallery_date)){
                             $date = explode('-',$_gallery->gallery_date);
                             if(Session::get('lang') == 'th' ){
                                 $year = $date[0]+543;
                             }else{
                                 $year = $date[0];
                             }
                                $date_text = $date[2].' '.(Session::get('lang') == 'th' ? $month_th[$date[1]] : $month_en[$date[1]] ).' '.$year;
                             
                            }  ?>  
                    <div class="col-lg-4 col-md-4 col-12">
                        <a class="galleryBox" href="{{ url('/gallery-detail')}}/{{$_gallery->gallery_id}}">
                            <div class="img-width"><img src="{{asset('local/public/gallery').'/'.$_gallery->gallery_index}}"></div>
                            <div class="galBox-topic">
                            <h6>{{ (Session::get('lang') == 'th' ? $_gallery->gallery_title_th : $_gallery->gallery_title_en) }}</h6>

                            <div class="dateBox-cc">{{$date_text}}</div>

                            </div>  
                        </a>
                    </div>
                        @endforeach
                    @endif
                </div>
            </div>
            <!--------------- P A G E --------------->
            <div class="row">
                <div class="col">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
              
        </div>
    </div>
    
    
    @include('front.inc_topbutton')
    
    @include('front.inc_footer')
    
</body>
</html>