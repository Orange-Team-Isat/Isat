<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>@include('front.inc_header') <?php $pageName="job"; ?></head>
<body>
    <div class="thetop"></div>

    @include('front.inc_topmenu')
    
    <!--------------- J O B - O P P O R T U N I T I E S --------------->
    <div class="content-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>JOB Opportunities</h2>
                </div>
            </div>
            
           
            <!--------------- J O B :: I S A T --------------->
            <div class="row">
                <div class="col-12">
                    <div class="headerBlue big">ISAT</div>
                </div>
            </div>
            
            <div class="job-section">
                <div class="row">
        
                    <?php $jobs= DB::table('jobs')->where('jobs_type',1)->get(); 
                    
                                $month_th['01'] = 'ม.ค.';
                                $month_th['02'] = 'ก.พ.';
                                $month_th['03'] = 'มี.ค.';
                                $month_th['04'] = 'เม.ย.';
                                $month_th['05'] = 'พ.ค.';
                                $month_th['06'] = 'มิ.ย.';
                                $month_th['07'] = 'ก.ค.';
                                $month_th['08'] = 'ส.ค.';
                                $month_th['09'] = 'ก.ย';
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
            
                    <div class="col-12">
                        <div class="jobBox">
                            <div class="row">
                            
                    @if(!empty($jobs))
                            @foreach($jobs as $_jobs)   
                            
                                <?php if(!empty($_jobs->jobs_date)){
                                    $date = explode('-',$_jobs->jobs_date);
                                    if(Session::get('lang') == 'th' ){
                                        $year = $date[0]+543;
                                    }else{
                                        $year = $date[0];
                                    }
                                    $date_text = $date[2].' '.(Session::get('lang') == 'th' ? $month_th[$date[1]] : $month_en[$date[1]] ).' '.$year;
                                    
                                }?>

                                <div class="col-lg-10 col-md-9 col-12">
                                    <div class="job-position">{{(Session::get('lang') == 'th' ? $_jobs->jobs_name_th : $_jobs->jobs_name_en) }}</div>
                                    <div class="post-date"><span><i class="fas fa-pencil-alt"></i>Post on :</span>{{$date_text}}</div>
                                </div>
                                
                                <div class="col-lg-2 col-md-3 col-12">
                                    <a class="buttonYellow" href="{{ url('job-detail')}}/{{$_jobs->jobs_id}}">Read more</a>
                                </div>
                            
                            @endforeach
                    @endif

                            </div>
                        </div>
                    </div>
                </div>
               

                <?php for($i=0;$i<9;$i++){ ?>
                <!-- <div class="row">
                    <div class="col-12">
                        <div class="jobBox">
                            <div class="row">
                                <div class="col-lg-10 col-md-9 col-12">
                                    <div class="job-position">ISAT JOB POSITION</div>
                                    <div class="post-date"><span><i class="fas fa-pencil-alt"></i>Post on :</span>28 Oct 2019</div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-12">
                                    <a class="buttonYellow" href="{{url('job-detail')}}">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <?php } ?>
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
            
            <!--------------- J O B :: M E M B E R - S C H O O L --------------->
            <div class="row">
                <div class="col-12">
                    <div class="headerBlue big">MEMBER SCHOOL</div>
                </div>
            </div>
            <div class="job-section">
            
            <?php $jobs= DB::table('jobs')->where('jobs_type',2)->get(); 
                    
                        $month_th['01'] = 'ม.ค.';
                        $month_th['02'] = 'ก.พ.';
                        $month_th['03'] = 'มี.ค.';
                        $month_th['04'] = 'เม.ย.';
                        $month_th['05'] = 'พ.ค.';
                        $month_th['06'] = 'มิ.ย.';
                        $month_th['07'] = 'ก.ค.';
                        $month_th['08'] = 'ส.ค.';
                        $month_th['09'] = 'ก.ย';
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
                <div class="row">
                    <div class="col-12">
                        <div class="jobBox">
                            <div class="row">
                            
                    @if(!empty($jobs))
                        @foreach($jobs as $_jobs)   
                            
                                <?php if(!empty($_jobs->jobs_date)){
                                $date = explode('-',$_jobs->jobs_date);
                                if(Session::get('lang') == 'th' ){
                                    $year = $date[0]+543;
                                }else{
                                    $year = $date[0];
                                }
                                $date_text = $date[2].' '.(Session::get('lang') == 'th' ? $month_th[$date[1]] : $month_en[$date[1]] ).' '.$year;
                                    
                                }?>
                                <div class="col-lg-10 col-md-9 col-12">
                                    <div class="job-position">{{(Session::get('lang') == 'th' ? $_jobs->jobs_name_th : $_jobs->jobs_name_en) }}</div>
                                    <div class="post-date"><span><i class="fas fa-pencil-alt"></i>Post on :</span>{{$date_text}}</div>
                                </div>
                                
                                    <div class="col-lg-2 col-md-3 col-12">
                                    <a class="buttonYellow" href="{{ url('job-detail')}}/{{ $_jobs->jobs_id }}">Read more</a>
                                </div>
                        @endforeach
                    @endif
                            </div>
                        </div>
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