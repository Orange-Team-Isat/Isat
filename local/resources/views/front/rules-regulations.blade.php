<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>@include('front.inc_header') <?php $pageName="isat"; ?></head>
<body>
    <div class="thetop"></div>
   
      @include('front.inc_topmenu')
    
    <!--------------- I S A T - B A N N E R - S L I D E --------------->
      @include('front.inc_isat-banner')
    
    <!--------------- I S A T :: R U L E & R E G U L A T I O N S --------------->
    <div class="content-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Rules & Regulations</h2>
                </div>
            </div>
                
            <!-- RULE :: 01 -->
            
            <div class="row">
                <div class="col">
                <?php $news = DB::table('news')->orderBy('news_date','DESC')->where('news_type',4)->limit(4)->get(); 
                      

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
                            $month_en['12'] = 'DEC'; ?>

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
                            }  
                        ?>
                    <div class="headerBlue">{{(Session::get('lang') == 'th' ? $_news->news_title_th : $_news->news_title_en) }}</div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="borderBox">
                        <ul class="rule-download">
                            <li>
                            <div class="download-topic">{{(Session::get('lang') == 'th' ? $_news->news_title_th : $_news->news_title_en) }}</div>
                            <div class="download-part">
                                <div class="row">
                                    <?php $file= DB::table('news_files')->where('file_ref',$_news->news_ref)->get(); ?>
                                        @if(!empty($file))
                                            @foreach ($file as $_file)
                                                <div class="col-lg-3 col-4">
                                                    <a class="file-downloadButton" href="<?php echo asset('local/public/news_files/').'/'.$_file->file_name; ?>">
                                                        <i class="fas fa-file-alt"></i>
                                                        <p>Download</p>
                                                    </a>
                                                </div>
                                            @endforeach
                                        @endif
                                        <div class="col-lg-9 col-8">
                                            <div class="download-info">
                                                <p><?php echo (Session::get('lang') == 'th' ? $_news->news_detail_th : $_news->news_detail_en); ?></p>
                                                <p><span><i class="fas fa-pencil-alt"></i>Post on :</span>{{$date_text}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    @endforeach
                @endif
                </div>
            </div>
            <!-- RULE :: 05-->
             <div class="row">
                <div class="col">
                    <div class="headerBlue">Rules & Regulations Topic</div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="borderBox">
                        <ul class="rule-download"> 
                        <?php $news = DB::table('news')->orderBy('news_date','DESC')->where('news_type',4)->get(); 
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
                              $month_en['12'] = 'DEC'; ?>
              
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
                              }  ?>
                       
                            <li>
                                <div class="download-topic">{{(Session::get('lang') == 'th' ? $_news->news_title_th : $_news->news_title_en) }}</div>
                                 <div class="download-part">
                                    <div class="row">
                                    <?php  $file= DB::table('news_files')->where('file_ref',$_news->news_ref)->get(); ?> 
                                        @if(!empty($file))
                                            @foreach($file as $_file)
                                            <div class="col-lg-3 col-4">
                                                <a class="file-downloadButton" href="<?php echo asset('local/public/news_files/').'/'.$_file->file_name; ?>">
                                                    <i class="fas fa-file-alt"></i>
                                                    <p>Download</p>
                                                </a>
                                            </div>
                                            @endforeach
                                        @endif
                                        <div class="col-lg-9 col-8">
                                            <div class="download-info">
                                                <p><?php echo (Session::get('lang') == 'th' ? $_news->news_detail_th : $_news->news_detail_en); ?></p>
                                                <p><span><i class="fas fa-pencil-alt"></i>Post on :</span>{{$date_text}}</p>
                                            </div>
                                        </div>
                    
                                    </div>
                                </div>
                            </li>
                            <?php //} ?>
                            @endforeach
                        @endif
                        </ul>
                    </div>
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