<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>@include('front.inc_header') <?php $pageName="home"; ?></head>
<body>
    <div class="thetop"></div>
      @include('front.inc_topmenu')
    
    <!--------------- B A N N E R - S L I D E --------------->
    <div class="container-fluid">
        <div class="row">
            <div class="col px-0">
                <div class="banner">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <!--<div class="mainbanner-txt">
                                    <p>Neethling Brain Instruments By <br>Columbia University for ISAT Members</p>
                                    <a class="buttonYellow big" href="#">MORE</a>
                                </div>-->
                              
                                <img src="{{asset('assets/images/index/banner01.jpg')}}">
                            </li>
                            <li>
                                <!--<div class="mainbanner-txt">
                                    <p>Neethling Brain Instruments By <br>Columbia University for ISAT Members</p>
                                    <a class="buttonYellow big" href="#">MORE</a>
                                </div>-->
                                <img src="{{asset('assets/images/index/banner02.jpg')}}">
                            </li>
                            <li><img src="{{asset('assets/images/index/banner03.jpg')}}"></li>
                            <li><img src="{{asset('assets/images/index/banner04.jpg')}}"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="content-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Welcome to<br>International Schools Association of Thailand</h1>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4 col-md-4 col-12 px-0">
                    <div class="colorBox yellow">
                        <img src="{{asset('assets/images/index/icon-world.png')}}">
                        <h3>ISAT PRESENTS</h3>
                        <p>World Class Education in Thailand</p>
                        <a class="button-txt" href="{{ url('isat-present')}}">Learn more<i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 px-0">
                    <div class="colorBox sky">
                        <img src="{{asset ('assets/images/index/icon-member.png')}}">
                        <h3>MEMBER SCHOOLS</h3>
                        <a class="button-txt" href="{{ url('member-school')}}">Learn more<i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 px-0">
                    <div class="colorBox green">
                        <img src="{{asset ('assets/images/index/icon-book.png')}}">
                        <h3>NEWS</h3>
                        <p>& Current Educational Trends</p>
                        <a class="button-txt" href="{{ url('/news')}}">Learn more<i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>               
            
            <!--------------- N E W S & E V E N T S - C A L E N D A R --------------->
            <div class="row">
                <div class="col">
                    <h2>News & Events Calendar</h2>
                </div>
            </div>
            
            <div class="row" id="index-news">
                <div class="col-lg-9 col-md-12 col-12">
                    <div class="calendar-section">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-12">
                                <div class="calWH-BG">
                                    <div id="calendar"></div>
                                </div> 
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <ul class="day-note">
                                    <li><div class="skyBG"></div>ISAT MEETING</li>
                                    <li><div class="greenBG"></div>ISAT EVENT</li>
                                    <li><div class="pinkBG"></div>ISAT HOLIDAY</li>
                                    <li><div class="yellowBG"></div>PUBLIC HOLIDAY</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!------ NEWS BOX ------>
                    <div class="padding-2col">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <a class="newsBox" href="{{ url('news-detail')}}">
                                    <div class="img-width"><img src="{{asset('assets/images/news/news01.jpg')}}"></div>
                                    <div class="newsBox-topic">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="dateBox greenBG">23<span>NOV</span></div>
                                            </div>
                                            <div class="col-9">
                                                <div class="news-topic">
                                                    <p>News & Events Topic News & Events Topic News & Events Topic</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <a class="newsBox" href="{{ url('news-detail')}}">
                                    <div class="img-width"><img src="{{asset('assets/images/news/news01.jpg')}}"></div>
                                    <div class="newsBox-topic">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="dateBox skyBG">29<span>NOV</span></div>
                                            </div>
                                            <div class="col-9">
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
                
                <!------ NEWS FOR MEMBER ------>
                <div class="col-lg-3 col-md-12 col-12">
                    <div class="headerBK">News & Events for Member</div>
                    <div class="GrayBox">
                        <div class="padding-3col" id="news-side">
                            <!-- NEWS :: 01 -->
                            <div class="row">
                                <div class="col-lg-12 col-md-4 col-12">
                                    <a class="newsBox side" href="{{ url('news-detail')}}">
                                        <div class="img-width"><img src="{{asset('assets/images/news/news02.jpg')}}"></div>
                                        <div class="newsBox-topic">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-3">
                                                    <div class="dateBox greenBG">23<span>NOV</span></div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-9">
                                                    <div class="news-topic">
                                                        <p>News & Events Topic News & Events Topic News & Events Topic</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                    </a> 
                                </div>
    
                                <!-- NEWS :: 02 -->
                                <div class="col-lg-12 col-md-4 col-12">
                                    <a class="newsBox side" href="{{ url('news-detail')}}">
                                        <div class="img-width"><img src="{{asset('assets/images/news/news02.jpg')}}"></div>
                                        <div class="newsBox-topic">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-3">
                                                    <div class="dateBox skyBG">29<span>NOV</span></div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-9">
                                                    <div class="news-topic">
                                                        <p>News & Events Topic News & Events Topic News & Events Topic</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                    </a> 
                                </div>
                            
                                <!-- NEWS :: 03 -->
                                <div class="col-lg-12 col-md-4 col-12">
                                    <a class="newsBox side" href="{{ url('news-detail')}}">
                                        <div class="img-width"><img src="{{asset('assets/images/news/news02.jpg')}}"></div>
                                        <div class="newsBox-topic">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-3">
                                                    <div class="dateBox skyBG">29<span>NOV</span></div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-9">
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
            </div>     
        </div>
    </div>
    
    <!--------------- G A L L E R Y --------------->
    <div class="BlueBG">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Photo Gallery</h2>
                </div>
            </div>
            <div class="padding-3col">
                <div class="row">
                    <?php for($i=0;$i<3;$i++){ ?>
                    <div class="col-lg-4 col-md-4 col-12">
                        <a class="galleryBox" href="{{ url('/gallery-detail')}}">
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
            <div class="row">
                <div class="col">
                    <div class="content-center">
                        <a class="buttonYellow" href="{{ url('/gallery')}}">View more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
      @include('front.inc_topbutton') 
    
      @include('front.inc_footer')
    
    
    <script type="text/javascript">
        // Can also be used with $(document).ready()
        $(window).load(function() {
            // BANNER-SLIDE //
            $('.flexslider').flexslider({
                animation: "slide"
            });
        });
    </script>
    
    <script>
        var eventDates = {
            '23/11/2019': 'Event Name'
        };
        var links = {
            '23/11/2019': 'calendar-details.php'
        };
        
        var meetingDates = {
            '29/11/2019': 'Meeting Name'
        };
        var links = {
            '29/11/2019': 'calendar-details.php'
        };
        
        var isatholidayDates = {
              '25/12/2019': 'ISAT Holiday Name'
            , '26/12/2019': 'ISAT Holiday Name'
            , '27/12/2019': 'ISAT Holiday Name'
            , '28/12/2019': 'ISAT Holiday Name'
            , '29/12/2019': 'ISAT Holiday Name'
            , '30/12/2019': 'ISAT Holiday Name'
        };
        var links = {
              '25/12/2019': 'calendar-details.php'
            , '26/12/2019': 'calendar-details.php'
            , '27/12/2019': 'calendar-details.php'
            , '28/12/2019': 'calendar-details.php'
            , '29/12/2019': 'calendar-details.php'
            , '30/12/2019': 'calendar-details.php'
        };
        
        var holidayDates = {
              '05/12/2019': 'Holiday Name'
            , '10/12/2019': 'Holiday Name'
            , '31/12/2019': 'Holiday Name'
        };
        var links = {
              '05/12/2019': 'calendar-details.php'
            , '10/12/2019': 'calendar-details.php'
            , '31/12/2019': 'calendar-details.php'
        };
        
        function pad(str, max) {
            str = str.toString();
            return str.length < max ? pad("0" + str, max) : str;
        }
        $('#calendar').datepicker({
            inline: true
            , firstDay: 0
            , showOtherMonths: true
            , dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
            , beforeShow: addCustomH
            , onChangeMonthYear: addCustomH
            , onSelect: function (dateString) {
                if (links[dateString]) {
                    document.location.href = links[dateString];
                }
                else {
                    setTimeout(function () {
                        var uisdw = $('.ui-state-default').outerWidth() / 1.5;
                        $('.ui-state-default').css("line-height", uisdw + "px");
                        $(".ui-state-default").tooltip();
                    }, 0)
                }
            }
            , beforeShowDay: function (date) {
                var day = date.getDate();
                var month = date.getMonth() + 1;
                var year = date.getFullYear();
                var dateString = pad(day, 2) + '/' + pad(month, 2) + '/' + year;
                if (dateString in eventDates) {
                    return [true, 'event', eventDates[dateString]];
                }
                if (dateString in meetingDates) {
                    return [true, 'meeting', meetingDates[dateString]];
                }
                if (dateString in isatholidayDates) {
                    return [true, 'isatholiday', isatholidayDates[dateString]];
                }
                if (dateString in holidayDates) {
                    return [true, 'holiday', holidayDates[dateString]];
                }
                else {
                    return [true, '', ''];
                }
            }
        });
        var uisdw = $('.ui-state-default').outerWidth() / 1.5;
        $('.ui-state-default').css("line-height", uisdw + "px");
        $(".ui-state-default").tooltip();
        
        function addCustomH() {
            setTimeout(function () {
                var uisdw = $('.ui-state-default').outerWidth() / 1.5;
                $('.ui-state-default').css("line-height", uisdw + "px");
                $(".ui-state-default").tooltip();
            }, 0)
        }
    </script>
    
</body>
</html>