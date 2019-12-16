<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>@include('front.inc_header') <?php $pageName="news"; ?></head>
<body>
    <div class="thetop"></div>
    @include('front.inc_topmenu')
    
    <!--------------- N E W S & E V E N T S :: D E T A I L --------------->
    <div class="content-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>News & Events</h2>
                </div>
            </div>

            <?php $news = DB::table('news')->where('news_id',$news_id)->first(); 
               $file= DB::table('news_files')->where('file_ref',$news->news_ref)->get(); 

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
           
                if(!empty($news->news_date)){
                        $date = explode('-',$news->news_date);
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
                    <div class="newsDetail-topic">
                        <h3 class="subTopic">{{(Session::get('lang') == 'th' ? $news->news_title_th : $news->news_title_en) }}</h3>
                        <div class="dateBox-cc greenBG">{{$date_text}}</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-12 offset-lg-1 mb-5">
                <p><?php echo (Session::get('lang') == 'th' ? $news->news_detail_th : $news->news_detail_en); ?></p>
                    <!-- <div class="img-width border"><img src="{{asset('assets/images/news/news03.jpg')}}"></div> -->
                </div>
            </div>
            <!-- <div class="row">
                <div class="col">
                    <div class="content-txt txt-indent mb-5">
                        <p>Eu augue ut lectus arcu bibendum at varius vel. Netus et malesuada fames ac turpis egestas integer eget. Volutpat sed cras ornare arcu dui vivamus. Lectus magna fringilla urna porttitor rhoncus dolor. Eu sem integer vitae justo eget magna fermentum. Tempor orci dapibus ultrices in iaculis nunc sed augue lacus. Aliquet eget sit amet tellus cras adipiscing enim. Egestas pretium aenean pharetra magna ac placerat vestibulum. At quis risus sed vulputate. Interdum varius sit amet mattis vulputate enim nulla. Blandit cursus risus at ultrices mi tempus imperdiet nulla malesuada. Convallis aenean et tortor at risus. Velit dignissim sodales ut eu sem integer vitae. Nullam ac tortor vitae purus faucibus. Est pellentesque elit ullamcorper dignissim cras.</p>
                    </div>
                </div>
            </div> -->
            <!-- <div class="row">
                <div class="col-lg-10 col-12 offset-lg-1 mb-5">
                    <div class="img-width border"><img src="{{asset('assets/images/news/news01.jpg')}}"></div>
                </div>
            </div> -->
            <!-- <div class="row">
                <div class="col">
                    <div class="content-txt txt-indent">
                        <p>Quis eleifend quam adipiscing vitae proin sagittis nisl rhoncus mattis. Placerat duis ultricies lacus sed. Eget scelerisque viverra mauris in aliquam sem. Lobortis scelerisque fermentum faucibus in ornare. Fames ac turpis egestas maecenas pharetra convallis posuere. Egestas fringilla phasellus faucibus scelerisque. Enim sit amet venenatis urna cursus. Magna sit amet purus gravida. Diam ut venenatis tellus in metus. In vitae turpis massa sed elementum. Vitae congue eu consequat ac felis donec et odio pellentesque. Consectetur adipiscing elit duis tristique sollicitudin nibh. Ac tortor dignissim convallis aenean tortor at risus. Pharetra vel turpis nunc eget lorem dolor sed viverra. Amet massa vitae tortor condimentum. Enim diam vulputate pharetra sit amet aliquam id diam. Urna nunc id cursus metus aliquam eleifend. Massa tincidunt nunc pulvinar sapien ligula ullamcorper. Non tellus orci ac auctor augue mauris. Mi ipsum faucibus vitae aliquet nec.</p>
                        <p>Nulla facilisi nullam vehicula ipsum a cursus vitae congue. Quam nulla porttitor massa id neque aliquam vestibulum morbi. Elementum eu facilisis sed odio morbi quis commodo. Ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant. Cras semper auctor neque vitae tempus. Mus mauris vitae ultricies leo integer malesuada nunc vel. Quam quisque id diam vel quam elementum pulvinar etiam. Eget sit amet tellus cras dusadipiscing enim eu. Amet cursus sit amet dictum sit amet justo donec. Mauris in aliquam sem fringilla utom morbi. Eleifend donec pretium vulputate sapien nec sagittis aliquam. Lorem ipsum dolor sit amet consectetur adipiscing. Vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae elementum. Vulputate eu scelerisque felis imperdiet proin fermentum leo. Ante in nibh mauris cursus.</p>
                    </div>
                </div>
            </div> -->
            
            <!-- DOWNLOAD BUTTON -->
            <div class="row">
                <div class="col">
                @if(!empty($file))
                    <!-- @foreach ($file as $_file) -->
                        <div class="content-center mt-4">
                        <a class="button-PKdownload" href="<?php echo asset('local/public/news_files/').'/'.$_file->file_name; ?>"> 
                         <div><i class="far fa-arrow-alt-circle-down"></i></div>
                                <span>DOWNLOAD FILE</span></a>
                        </div>
                    <!-- @endforeach -->
                @endif
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
                        <a class="buttonGray minWidth" href="{{ url('news')}}">Back</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
    
    
     @include('front.inc_topbutton')
     @include('front.inc_footer')
 
    
    
</body>
</html>