<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>@include('front.inc_header') <?php $pageName="home"; ?></head>
<body>
    <div class="thetop"></div>
    
    @include('front.inc_topmenu')
    
    <!--------------- R E S E T - P A S S W O R D --------------->
    <div class="content-padding m-minHeight">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 offset-lg-2">
                    <div class="borderYellow">
                        <div class="row">
                            <div class="col">
                                <h3>RESET PASSWORD</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="text-center">
                                    <p>Please enter the email used to log in. <br>And we will proceed to send the password to the specified email</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="icon-circle"><img src="{{asset('assets/images/icon/icon-email.png')}}"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 col-12 offset-lg-2">
                                <input type="text" class="form-control shadow-none" placeholder="type your email">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col">
                                <div class="content-center">
                                    <a class="buttonYellow" href="#">SUBMIT</a>
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