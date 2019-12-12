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
                    <div class="col-12">
                        <div class="jobBox">
                            <div class="row">
                                <div class="col-lg-10 col-md-9 col-12">
                                    <div class="job-position">ASSISTANT MANAGER</div>
                                    <div class="post-date"><span><i class="fas fa-pencil-alt"></i>Post on :</span>06 Nov 2019</div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-12">
                                    <a class="buttonYellow" href="{{ url('job-detail')}}">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php for($i=0;$i<9;$i++){ ?>
                <div class="row">
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
                </div>
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
                <?php for($i=0;$i<10;$i++){ ?>
                <div class="row">
                    <div class="col-12">
                        <div class="jobBox">
                            <div class="row">
                                <div class="col-lg-5 col-md-12 col-12">
                                    <div class="job-position">JOB POSITION</div>
                                    <div class="post-date"><span><i class="fas fa-pencil-alt"></i>Post on :</span>28 Oct 2019</div>
                                </div>
                                <div class="col-lg-5 col-md-9 col-12">
                                    <div class="school-name"><p>School Name School Name School Name School Name</p></div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-12">
                                    <a class="buttonYellow" href="{{ url('job-detail')}}">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
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