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
            
            <div class="news-bigBox">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="img-width"><img src="{{asset('assets/images/gallery/gallery03.jpg')}}"></div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="headerBK">
                            <p>Photo Gallery Topic Photo Gallery Topic Photo Gallery Topic </p>
                        </div>
                        <div class="news-tagline" id="gallery">
                            <div class="row">
                                <div class="col">
                                    <div class="dateBox-cc">22 OCT 2019</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p>Eu augue ut lectus arcu bibendum at varius vel. Netus malesuada fames ac turpis egestas integer eget. Volutpat sed cras ornare arcu dui vivamus. Lectus magna fringilla urna porttitor rhoncus dolor. Eu sem integer vitae justo eget magna fermentum. Tempor ori dapibus ultrices in iaculis nunc sed augue lacus. Aliquet eget sit amet tell</p>
                                </div>
                            </div>     
                        </div>
                        <div class="row">
                            <div class="col-6">
                            
                            </div>
                            <div class="col-6"></div>
                        </div>
                        <a class="buttonYellow" href="{{ url('gallery-detail')}}">Read more</a>
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
                    <?php for($i=0;$i<6;$i++){ ?>
                    <div class="col-lg-4 col-md-4 col-12">
                        <a class="galleryBox" href="{{ url('gallery-detail')}}">
                            <div class="img-width"><img src="{{asset('assets/images/gallery/gallery02.jpg')}}"></div>
                            <div class="galBox-topic">
                                <h6>Photo Gallery Topic Photo Gallery Topic Photo Gallery Topic</h6>
                                <div class="dateBox-cc">22 OCT 2019</div>
                            </div>  
                        </a>
                    </div>
                    <?php } ?>
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