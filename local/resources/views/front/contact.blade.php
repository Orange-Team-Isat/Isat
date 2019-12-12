<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>@include('front.inc_header') <?php $pageName="contact"; ?></head>

<body>
    <div class="thetop"></div>
    @include('front.inc_topmenu')
    
    <!--------------- G O O G L E - M A P --------------->
    <div class="googlemap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3873.0921669212034!2d100.52401741483209!3d13.893436890255941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e284a1cd26700d%3A0x3d6eca723badd327!2sInternational%20School%20Bangkok%20(Thailand)!5e0!3m2!1sth!2sth!4v1574236767476!5m2!1sth!2sth" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>

    <div class="content-padding">
        <div class="container">
            <div class="row">
                <!--------------- C O N T A C T :: I N F O --------------->
                <div class="col-lg-6 col-12">
                    <div class="row">
                        <div class="col">
                            <h2 class="text-left">Contact Info</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <ul class="contact-info">
                                <li>International Schools Association of Thailand</li>
                                <li><i class="fas fa-map-marker-alt"></i>39/7 Soi Nichada Thani, Samakee Road, <br>Pakkret, Nonthaburi 11120 THAILAND</li>
                                <li><i class="fas fa-phone-alt"></i><span>Tel :</span>+662 960 4101, +662 963 5886, +662 963 5800 ext 7718, 7720</li>
                                <li><i class="fas fa-mobile-alt"></i><span>Mobile :</span>+668 6667 8317</li>
                                <li><i class="fas fa-fax"></i><span>Fax :</span>+662 960 4102</li>
                                <li><i class="fas fa-envelope"></i><span>Email :</span>isat@isat.or.th</li>
                                <li><i class="fas fa-clock"></i><span>Office Hours :</span>8:30 am - 4:30 pm</li>
                            </ul>
                            <a class="buttonYellow" href="{{asset('assets/images/contact/isat-map.jpg')}}" data-fancybox data-caption="ISAT MAP"><i class="fas fa-map"></i>MAP</a>
                        </div>
                    </div>
                </div>
                
                <!--------------- C O N T A C T :: D I R E C T I O N --------------->
                <div class="col-lg-6 col-12">
                    <div class="GrayBox" id="contact">
                        <h5>Directions</h5>
                        <ul class="content-list outside">
                            <li>From the Sukhumvit area, take the Expressway north to the Chaengwattana exit. Exit left towards Pakkret.</li>
                            <li>Turn left on the Pakkret Bypass road, just before Big C and HomePro.</li>
                            <li>Proceed to the end of the Bypass road, then turn left onto Samakee Road.</li>
                            <li>Proceed approximately 500 meters and turn left into the Nichada Thani community at the large Nichada Thani sign.</li>
                            <li>At the 7-11 the road will curve right, then take an immediate left into the Nichada Thani gate.</li>
                            <li>Go straight ahead to ISB.</li>
                            <li>ISAT Office is located in ISB Facilities Building, 1st fl., behind the Tennis Courts. Please get help from ISB Security Front Guard.</li>
                        </ul>
                    </div>
                </div>
            </div>  
        </div>
    </div>
    
    <div class="contactForm-BG">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-12 offset-lg-1">
                    <div class="opacityBG">
                        <div class="row">
                            <div class="col">
                                <h4 id="contact">Contact Form</h4>
                            </div>
                        </div>
                        <div class="input-form">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <p>Name</p>
                                    <input type="text" class="form-control shadow-none">
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <p>Lastname</p>
                                    <input type="text" class="form-control shadow-none">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <p>Email</p>
                                    <input type="text" class="form-control shadow-none">
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <p>Phone Number</p>
                                    <input type="text" class="form-control shadow-none">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p>Topic</p>
                                    <input type="text" class="form-control shadow-none">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p>Message</p>
                                    <textarea class="form-control shadow-none"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="content-center">
                                        <a class="buttonYellow" href="#">Submit</a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    @include('front.inc_topbutton')
    
    
    @include('front.inc_footer')
    
</body>
</html>