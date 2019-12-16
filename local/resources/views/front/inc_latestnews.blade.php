<div class="mobile-none">
    <div class="headerBK">Latest News & Events</div>
    <div class="GrayBox">
        <!-- NEWS :: 01 -->
        <div class="row">
            <div class="col-12">
            
            <?php $news= DB::table('news')->orderBy('news_update','DESC')->limit(3)->get(); 
                                
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
                         <a class="newsBox side" href="{{ url('news-detail')}}/{{ $_news->news_id }}">
                             <div class="img-width"><img src="{{{asset('local/public/news').'/'.$_news->news_index}}}"></div>
                                <div class="newsBox-topic">
                                    <div class="row">
                                        <div class="col-4">
                                        <div class="dateBox greenBG">{{$date[2]}}<span>{{(Session::get('lang') == 'th' ? $month_th[$date[1]] : $month_en[$date[1]] )}}</span></div>
                                    </div>
                                    <div class="col-8">
                                        <div class="news-topic">
                                        <p>{{(Session::get('lang') == 'th' ? $_news->news_title_th : $_news->news_title_en) }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </a>
                        @endforeach
                    @endif 
            </div>
        </div>
        <!-- NEWS :: 02 -->
        <!-- <div class="row">
            <div class="col-12">
                <a class="newsBox side" href="{{ url('news-detail')}}">
                    <div class="img-width"><img src="{{asset('assets/images/news/news02.jpg')}}"></div>
                    <div class="newsBox-topic">
                        <div class="row">
                            <div class="col-4">
                                <div class="dateBox skyBG">29<span>NOV</span></div>
                            </div>
                            <div class="col-8">
                                <div class="news-topic">
                                    <p>News & Events Topic News & Events Topic News & Events Topic</p>
                                </div>
                            </div>
                        </div>
                    </div>  
                </a> 
            </div> -->
        </div>
        <!-- NEWS :: 03 -->
        <!-- <div class="row">
            <div class="col-12">
                <a class="newsBox side" href="{{ url('news-detail')}}">
                    <div class="img-width"><img src="{{asset('assets/images/news/news02.jpg')}}"></div>
                    <div class="newsBox-topic">
                        <div class="row">
                            <div class="col-4">
                                <div class="dateBox skyBG">29<span>NOV</span></div>
                            </div>
                            <div class="col-8">
                                <div class="news-topic">
                                    <p>News & Events Topic News & Events Topic News & Events Topic</p>
                                </div>
                            </div>
                        </div>
                    </div>  
                </a> 
            </div> -->
        </div>

        <div class="row">
            <div class="col">
                <div class="content-center">
                    <a class="buttonYellow" href="{{ url('news')}}">All News & Events</a>
                </div>
            </div>
        </div>
    </div>
</div>