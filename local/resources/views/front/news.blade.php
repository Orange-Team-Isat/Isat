<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>@include('front.inc_header') <?php $pageName="news"; ?></head>
<body>
    <div class="thetop"></div>
    @include('front.inc_topmenu')
    
    <!--------------- N E W S & E V E N T S --------------->
    <div class="content-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>News & Events</h2>
                </div>
            </div>
           
            <?php  $news= DB::table('news')->orderBy('news_update','DESC')->first(); 
                       
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
                    
                    }  ?> 
                
            
            <div class="news-bigBox">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="img-width">
                            <img src="{{{asset('local/public/news').'/'.$news->news_index}}}">
                            <div class="dateBox greenBG">{{$date[2]}}<span>{{(Session::get('lang') == 'th' ? $month_th[$date[1]] : $month_en[$date[1]] )}}</span></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="headerBK">
                            <p>{{(Session::get('lang') == 'th' ? $news->news_title_th : $news->news_title_en) }}</p>
                        </div>
                        <div class="news-tagline">
                            <p><?php echo (Session::get('lang') == 'th' ? $news->news_detail_th : $news->news_detail_en); ?></p>
                        </div>
                        <a class="buttonYellow" href="{{ url('news-detail')}}/{{ $news->news_id }}">Read more</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="blueLine-decor"></div>
                </div>
            </div>
            
            <!--------------- NEWS BOX --------------->
            <div class="padding-3col">
                <div class="row">

                    <?php $news= DB::table('news')->orderBy('news_update','DESC')->where('news_member',1)->limit(6)->get(); 
                                
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
                             @if(!empty($news))
                            @foreach($news as $_news)   
                            
                                <?php if(!empty($_news->news_date)){
                                    $date = explode('-',$_news->news_date);
                                    if(Session::get('lang') == 'th' ){
                                        $year = $date[0]+543;
                                    }else{
                                        $year = $date[0];
                                    }
                                    $date_text = $date[2].' '.(Session::get('lang') == 'th' ? $month_th[$date[1]] : $month_en[$date[1]] ).' '.$year;
                                    
                                }?>
                    <div class="col-lg-4 col-md-4 col-12">
                        <a class="newsBox" href="{{ url('news-detail')}}/{{ $_news->news_id }}">
                            <div class="img-width"><img src="{{{asset('local/public/news').'/'.$_news->news_index}}}"></div>
                            <div class="newsBox-topic">
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-3">
                                        <div class="dateBox skyBG">{{$date[2]}}<span>{{(Session::get('lang') == 'th' ? $month_th[$date[1]] : $month_en[$date[1]] )}}</span></div>
                                    </div>
                                    <div class="col-lg-9 col-md-8 col-9">
                                        <div class="news-topic">
                                        <p>{{(Session::get('lang') == 'th' ? $_news->news_title_th : $_news->news_title_en) }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </a>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
            <!--------------- P A G E --------------->
            <div class="row">
                <div class="col mb-5">
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
                
            <!--------------- NEWS FOR MEMBER --------------->
            <div class="row">
                <div class="col mb-4">
                    <div class="headerBlue big">NEWS & EVENTS FOR MEMBER SCHOOL</div>
                </div>
            </div>
            <div class="padding-3col">
                <div class="row">
                <?php $news= DB::table('news')->orderBy('news_update','DESC')->where('news_member',2)->limit(3)->get(); 
                                
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
                            @if(!empty($news))
                           @foreach($news as $_news)   
                           
                               <?php if(!empty($_news->news_date)){
                                   $date = explode('-',$_news->news_date);
                                   if(Session::get('lang') == 'th' ){
                                       $year = $date[0]+543;
                                   }else{
                                       $year = $date[0];
                                   }
                                   $date_text = $date[2].' '.(Session::get('lang') == 'th' ? $month_th[$date[1]] : $month_en[$date[1]] ).' '.$year;
                                   
                               }?>
                    <div class="col-lg-4 col-md-4 col-12">
                        <a class="newsBox" href="{{ url('news-detail')}}/{{ $_news->news_id }}">
                            <div class="img-width"><img src="{{{asset('local/public/news').'/'.$_news->news_index}}}"></div>
                            <div class="newsBox-topic">
                                <div class="row">
                                    <div class="col-md-4 col-3">
                                        <div class="dateBox greenBG">{{$date[2]}}<span>{{(Session::get('lang') == 'th' ? $month_th[$date[1]] : $month_en[$date[1]] )}}</span></div>
                                    </div>
                                    <div class="col-md-8 col-9">
                                        <div class="news-topic">
                                        <p>{{(Session::get('lang') == 'th' ? $_news->news_title_th : $_news->news_title_en) }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </a>
                    </div>
                    <!-- <div class="col-lg-4 col-md-4 col-12">
                        <a class="newsBox" href="{{ url('news-detail')}}">
                            <div class="img-width"><img src="{{asset('assets/images/news/news02.jpg')}}"></div>
                            <div class="newsBox-topic">
                                <div class="row">
                                    <div class="col-md-4 col-3">
                                        <div class="dateBox skyBG">29<span>NOV</span></div>
                                    </div>
                                    <div class="col-md-8 col-9">
                                        <div class="news-topic">
                                            <p>News & Events Topic News & Events Topic News & Events Topic</p>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <a class="newsBox" href="{{ url('news-detail')}}">
                            <div class="img-width"><img src="{{asset('assets/images/news/news02.jpg')}}"></div>
                            <div class="newsBox-topic">
                                <div class="row">
                                    <div class="col-md-4 col-3">
                                        <div class="dateBox skyBG">29<span>NOV</span></div>
                                    </div>
                                    <div class="col-md-8 col-9">
                                        <div class="news-topic">
                                            <p>News & Events Topic News & Events Topic News & Events Topic</p>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </a>
                    </div> -->
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    
    @include('front.inc_topbutton')
   
    
    @include('front.inc_footer')
    
</body>
</html>