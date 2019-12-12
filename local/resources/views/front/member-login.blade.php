<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<
<head>@include('front.inc_header') <?php $pageName="home"; ?></head>
<body>
    <div class="thetop"></div>
    @include('front.inc_topmenu')
    
    <!--------------- M E M B E R - L O G I N --------------->
    <div class="content-padding m-minHeight">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>MEMBER LOGIN</h2>
                </div>
            </div>
            
            <!--------------- L O G I N - F O R M --------------->
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-12">
                    <div class="login-form">
                        <div class="row">
                            <div class="col">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="username"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control shadow-none" placeholder="Username">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="login-form">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="password"><i class="fas fa-lock"></i></span>
                                        </div>
                                        <input type="password" class="form-control shadow-none" placeholder="Password">
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a class="button-txt" href="{{ url('password')}}">Forgot password?</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="content-center">
                                    <a class="buttonYellow" href="#">LOGIN</a>
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