@extends('layout.mainlogin')

@section('styles_link')

@endsection
@section('styles')
 <style type="text/css">
 </style>
@endsection

@section('content')
<!-- Page-body start -->
  <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <div class="login-card card-block auth-body mr-auto ml-auto">
                        <!-- {{Form::open(['url'=>'Checklogin','class'=>'md-float-material','autocomplete'=>'off' ])}} -->
                        <form action="{{url('Checklogin')}}" method="post">
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Sign In</h3>
                                    </div>
                                </div>
                                <hr/>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="username" id="username" placeholder="Your Email Address">
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
                                    <span class="md-line"></span>
                                </div>
                                <div class="row m-t-4 text-center" style="color: red;">
                                    <div class="col-12">
                                        <span id="err_txt">{{ isset($error_mes) ? $error_mes : '' }}</span> 
                                    </div>
                                </div>

                                <div class="row m-t-15">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign in</button>
                                    </div>
                                </div>
                            </div>
                            </form>
                        <!-- {{Form::close()}} -->
                        <!-- end of form -->
                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
<!-- Page-body end -->
@endsection

@section('javascripts')

<script type="text/javascript">
</script>
@endsection


