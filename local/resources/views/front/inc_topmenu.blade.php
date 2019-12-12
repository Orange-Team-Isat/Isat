<!---------- T O P - M E N U :: P C ---------->
<div class="header mobile-none">
    <div class="headerBlue-BG">
        <div class="container">
            <div class="row">
                <div class="col-7">
                    <p>International Schools Association of Thailand</p>
                </div>
                <div class="col-5">
                    <!-- LANG -->
                    <div class="dropdown menuDropdown lang">
                        <button class="btn btn-secondary dropdown-toggle shadow-none" type="button" id="Lang" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{asset('assets/images/icon/ENflag.png')}}">EN
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="Lang">
                            <li><a href="#">EN</a></li>
                            <li><a href="#">TH</a></li>
                        </ul>
                    </div>
                    <!-- MEMBER LOGIN -->
                    <a class="button-login" href="{{ url('member-login')}}">Member Login</a>
                </div>
            </div>
        </div>
    </div>
    <div class="mainmenuBG">
        <div class="container">
            <div class="row">
                <div class="col-2 pr-0">
                    <a class="mainlogo" href="{{ url('index')}}"><img src="{{asset('assets/images/logo.png')}}"></a>
                </div>
                <div class="col-10">
                    <ul class="mainmenu">
                        <li data-page="home"><a href="{{ url('index')}}">Home</a></li>
                        <li data-page="isat"><a href="">ISAT</a>
                            <ul class="mainmenu-sub">
                                <li><a href="{{ url('isat-present')}}">ISAT PRESENTS</a></li>
                                <li><a href="{{ url('education-systems')}}">Education Systems</a></li>
                                <li><a href="{{ url('why-study')}}">Why study in Thailand</a></li>
                                <li><a href="{{ url('faq')}}">Frequently Asked Questions</a></li>
                                <li><a href="{{ url('rules-regulations')}}">Rules & Regulations</a></li>
                            </ul>
                        </li>
                        <li data-page="school"><a href="{{ url('member-school')}}">Member Schools</a></li>
                        <li data-page="news"><a href=" {{ url('/news')}}">News & Events</a></li>
                        <li data-page="job"><a href="{{ url('job')}}">Job Opportunities</a></li>
                        <li data-page="contact"><a href="{{ url('/contact')}}">Contact</a></li>
                        <li><a class="buttonYellow" href="#">SPONSOR</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!--------------------------------------------- RESPONSIVE - TOP MENU --------------------------------------------->
<div class="mainmenuBG mobile">
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <button type="button" class="btn btn-demo shadow-none" data-toggle="modal" data-target="#myModal">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Modal -->
                <div class="modal left fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close shadow-none" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <!-- MAIN MENU -->
                                <ul class="mainmenu">
                                    <li data-page="home"><a href="{{ url('index')}}">Home</a></li>
                                    <li class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle shadow-none" type="button" id="isat" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            ISAT
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="isat">
                                            <a class="dropdown-item" href="{{ url('isat-present')}}">ISAT PRESENTS</a>
                                            <a class="dropdown-item" href="{{ url('education-systems')}}">Education Systems</a>
                                            <a class="dropdown-item" href="{{ url('why-study')}}">Why study in Thailand</a>
                                            <a class="dropdown-item" href="{{ url('faq')}}">Frequently Asked Questions</a>
                                            <a class="dropdown-item" href="{{ url('rules-regulations')}}">Rules & Regulations</a>
                                        </div>
                                    </li>
                                    <li data-page="school"><a href="{{ url('member-school')}}">Member Schools</a></li>
                                    <li data-page="news"><a href="{{ url('/news')}}">News & Events</a></li>
                                    <li data-page="job"><a href="{{ url('job')}}">Job Opportunities</a></li>
                                    <li data-page="contact"><a href="{{ url('/contact')}}">Contact</a></li>
                                    <li><a href="{{ url('member-login')}}"><i class="fas fa-user"></i>Member Login</a></li>
                                    <li><a class="buttonYellow" href="#">SPONSOR</a></li>
                                </ul>
                                <!-- FOLLOW - US -->
                                

                            </div>
                        </div><!-- modal-content -->
                    </div><!-- modal-dialog -->
                </div><!-- modal -->
            </div>
            <div class="col-6">
                <a class="mainlogo" href="{{ url('index')}}"><img src="{{asset('assets/images/logo.png')}}"></a>
            </div>
            <div class="col-3">
                <div class="dropdown menuDropdown lang">
                    <button class="btn btn-secondary dropdown-toggle shadow-none" type="button" id="Lang" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{asset('assets/images/icon/ENflag.png')}}">EN
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="Lang">
                        <li><a href="#">EN</a></li>
                        <li><a href="#">TH</a></li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</div>

<script type="text/javascript">
    // HEADER //
    $(function(){
        var shrinkHeader = 300;
        $(window).scroll(function() {
            var scroll = getCurrentScroll();
            if ( scroll >= shrinkHeader ) {
                $('.header').addClass('shrink');
            }
            else {
                $('.header').removeClass('shrink');
            }
        });
        function getCurrentScroll() {
            return window.pageYOffset || document.documentElement.scrollTop;
        }
    });
    
    // ACTIVE MENU //
    $(function () {
		var getPage = '<?php echo($pageName); ?>';
		$(".mainmenu li").each(function () {
			var getMenu = $(this).attr("data-page");
			if (getPage == getMenu) {
				$(this).addClass('active');
			}
		});
	});
</script>