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
            
            <div class="row">
                <div class="col">
                    <div class="newsDetail-topic">
                        <h3 class="subTopic">News & Events Topic News & Events Topic News & Events Topic </h3>
                        <div class="dateBox-cc greenBG">29 NOV 2019</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-12 offset-lg-1 mb-5">
                    <div class="img-width border"><img src="{{asset('assets/images/news/news03.jpg')}}"></div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="content-txt txt-indent mb-5">
                        <p>Eu augue ut lectus arcu bibendum at varius vel. Netus et malesuada fames ac turpis egestas integer eget. Volutpat sed cras ornare arcu dui vivamus. Lectus magna fringilla urna porttitor rhoncus dolor. Eu sem integer vitae justo eget magna fermentum. Tempor orci dapibus ultrices in iaculis nunc sed augue lacus. Aliquet eget sit amet tellus cras adipiscing enim. Egestas pretium aenean pharetra magna ac placerat vestibulum. At quis risus sed vulputate. Interdum varius sit amet mattis vulputate enim nulla. Blandit cursus risus at ultrices mi tempus imperdiet nulla malesuada. Convallis aenean et tortor at risus. Velit dignissim sodales ut eu sem integer vitae. Nullam ac tortor vitae purus faucibus. Est pellentesque elit ullamcorper dignissim cras.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-12 offset-lg-1 mb-5">
                    <div class="img-width border"><img src="{{asset('assets/images/news/news01.jpg')}}"></div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="content-txt txt-indent">
                        <p>Quis eleifend quam adipiscing vitae proin sagittis nisl rhoncus mattis. Placerat duis ultricies lacus sed. Eget scelerisque viverra mauris in aliquam sem. Lobortis scelerisque fermentum faucibus in ornare. Fames ac turpis egestas maecenas pharetra convallis posuere. Egestas fringilla phasellus faucibus scelerisque. Enim sit amet venenatis urna cursus. Magna sit amet purus gravida. Diam ut venenatis tellus in metus. In vitae turpis massa sed elementum. Vitae congue eu consequat ac felis donec et odio pellentesque. Consectetur adipiscing elit duis tristique sollicitudin nibh. Ac tortor dignissim convallis aenean tortor at risus. Pharetra vel turpis nunc eget lorem dolor sed viverra. Amet massa vitae tortor condimentum. Enim diam vulputate pharetra sit amet aliquam id diam. Urna nunc id cursus metus aliquam eleifend. Massa tincidunt nunc pulvinar sapien ligula ullamcorper. Non tellus orci ac auctor augue mauris. Mi ipsum faucibus vitae aliquet nec.</p>
                        <p>Nulla facilisi nullam vehicula ipsum a cursus vitae congue. Quam nulla porttitor massa id neque aliquam vestibulum morbi. Elementum eu facilisis sed odio morbi quis commodo. Ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant. Cras semper auctor neque vitae tempus. Mus mauris vitae ultricies leo integer malesuada nunc vel. Quam quisque id diam vel quam elementum pulvinar etiam. Eget sit amet tellus cras dusadipiscing enim eu. Amet cursus sit amet dictum sit amet justo donec. Mauris in aliquam sem fringilla utom morbi. Eleifend donec pretium vulputate sapien nec sagittis aliquam. Lorem ipsum dolor sit amet consectetur adipiscing. Vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae elementum. Vulputate eu scelerisque felis imperdiet proin fermentum leo. Ante in nibh mauris cursus.</p>
                    </div>
                </div>
            </div>
            
            <!-- DOWNLOAD BUTTON -->
            <div class="row">
                <div class="col">
                    <div class="content-center mt-4">
                        <a class="button-PKdownload" href="">
                            <div><i class="far fa-arrow-alt-circle-down"></i></div>
                            <span>DOWNLOAD FILE</span>
                        </a>
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