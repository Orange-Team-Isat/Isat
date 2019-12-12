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
            
            <div class="news-bigBox">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="img-width">
                            <img src="{{asset('assets/images/news/news03.jpg')}}">
                            <div class="dateBox greenBG">23<span>NOV</span></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="headerBK">
                            <p>News & Events Topic News & Events Topic News & Events Topic News & Events Topic News & Events Topic</p>
                        </div>
                        <div class="news-tagline">
                            <p>Eu augue ut lectus arcu bibendum at varius vel. Netus malesuada fames ac turpis egestas integer eget. Volutpat sed cras ornare arcu dui vivamus. Lectus magna fringilla urna porttitor rhoncus dolor. Eu sem integer vitae justo eget magna fermentum. Tempor ori dapibus ultrices in iaculis nunc sed augue lacus. Aliquet eget sit amet tell</p>
                        </div>
                        <a class="buttonYellow" href="{{ url('news-detail')}}">Read more</a>
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
                    <?php for($i=0;$i<6;$i++){ ?>
                    <div class="col-lg-4 col-md-4 col-12">
                        <a class="newsBox" href="{{ url('news-detail')}}">
                            <div class="img-width"><img src="{{asset('assets/images/news/news01.jpg')}}"></div>
                            <div class="newsBox-topic">
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-3">
                                        <div class="dateBox skyBG">29<span>NOV</span></div>
                                    </div>
                                    <div class="col-lg-9 col-md-8 col-9">
                                        <div class="news-topic">
                                            <p>News & Events Topic News & Events Topic News & Events Topic</p>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </a>
                    </div>
                    <?php } ?>
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
                    <div class="col-lg-4 col-md-4 col-12">
                        <a class="newsBox" href="{{ url('news-detail')}}">
                            <div class="img-width"><img src="{{asset('assets/images/news/news02.jpg')}}"></div>
                            <div class="newsBox-topic">
                                <div class="row">
                                    <div class="col-md-4 col-3">
                                        <div class="dateBox greenBG">23<span>NOV</span></div>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @include('front.inc_topbutton')
   
    
    @include('front.inc_footer')
    
</body>
</html>