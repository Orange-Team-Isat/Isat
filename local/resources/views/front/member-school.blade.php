<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>@include('front.inc_header') <?php $pageName="school"; ?></head>
<body>
    <div class="thetop"></div>
    @include('front.inc_topmenu')
    
    <!--------------- M E M B E R - S C H O O L S --------------->
    <div class="content-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Member Schools</h2>
                </div>
            </div>
            
            <!--------------- S E A R C H - B O X --------------->
            <div class="row">
                <div class="col">
                    <div class="searchBox">
                        <div class="input-form school">
                            <div class="row">
                                <div class="col">
                                    <p>School Name</p>
                                    <div class="input-group">
                                        <input type="text" class="form-control shadow-none" aria-describedby="button-addon2">
                                        <div class="input-group-append">
                                            <button class="btn shadow-none" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <p>Education system</p>
                                    <select class="form-control shadow-none">
                                        <option selected>select</option>
                                        <option value="1">American Curriculum</option>
                                        <option value="2">British Curriculum</option>
                                        <option value="3">International Baccalaureate Curriculum</option>
                                        <option value="4">Other National Curriculums</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <p>Boarding school</p>
                                    <select class="form-control shadow-none">
                                        <option selected>select</option>
                                        <option value="1">option 1</option>
                                        <option value="2">option 2</option>
                                        <option value="3">option 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <p>Age range</p>
                                    <select class="form-control shadow-none">
                                        <option selected>select</option>
                                        <option value="1">option 1</option>
                                        <option value="2">option 2</option>
                                        <option value="3">option 3</option>
                                        <option value="4">option 4</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <p>Location</p>
                                    <select class="form-control shadow-none">
                                        <option selected>select</option>
                                        <option value="1">option 1</option>
                                        <option value="2">option 2</option>
                                        <option value="3">option 3</option>
                                        <option value="4">option 4</option>
                                    </select>
                                </div>
                                <div class="col-lg-2 col-md-6 col-6">
                                    <p>Sort by</p>
                                    <select class="form-control shadow-none">
                                        <option selected>select</option>
                                        <option value="1">Random</option>
                                        <option value="2">School Name</option>
                                    </select>
                                </div>
                                <div class="col-lg-2 col-md-6 col-6">
                                    <p>School per page</p>
                                    <select class="form-control shadow-none">
                                        <option selected>select</option>
                                        <option value="1">10</option>
                                        <option value="2">20</option>
                                        <option value="3">40</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="content-center">
                                        <a class="buttonGray minWidth" href="#">Search</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--------------- M E M B E R - S C H O O L S --------------->
            <?php for($i=0;$i<5;$i++){ ?>
            <!-- SCHOOL :: 01 -->
            <div class="row">
                <div class="col-12">
                    <div class="headerBlue">ABC Pathways International Kindergarten</div>
                    <div class="schoolBox">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="img-middle">
                                    <div><img class="img-fluid" src="{{asset('assets/images/memberschool/logo01.jpg')}}"></div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-12">
                                <div class="school-info">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 col-12">Location/Address</div>
                                        <div class="col-lg-9 col-md-8 col-12">Soi Thawai Suk, Khlong Tan Nuea (Sukhumvit 31), Bangkok 10110</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 col-12">Year established</div>
                                        <div class="col-lg-9 col-md-8 col-12">2014</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 col-12">Age range</div>
                                        <div class="col-lg-9 col-md-8 col-12">1.5-6</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 col-12">Education system</div>
                                        <div class="col-lg-9 col-md-8 col-12">British</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 col-12">Accreditation</div>
                                        <div class="col-lg-9 col-md-8 col-12">n/a</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 col-12">Website</div>
                                        <div class="col-lg-9 col-md-8 col-12">
                                            <a href="https://www.abcpathways.co.th/" target="_blank">www.abcpathways.co.th</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 col-12">Phone</div>
                                        <div class="col-lg-9 col-md-8 col-12">+66 2-2606888</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 col-12">Fax</div>
                                        <div class="col-lg-9 col-md-8 col-12">02-2599883</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- SCHOOL :: 01 -->
            
            <!-- SCHOOL :: 02 -->
            <div class="row">
                <div class="col-12">
                    <div class="headerBlue">Adventist International Mission School</div>
                    <div class="schoolBox">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="img-middle">
                                    <div><img class="img-fluid" src="{{asset('assets/images/memberschool/logo02.jpg')}}"></div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-12">
                                <div class="school-info">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 col-12">Location/Address</div>
                                        <div class="col-lg-9 col-md-8 col-12">195 Moo 3, Tambol Muaklek, Amphur Muaklek, Saraburi 18180</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 col-12">Year established</div>
                                        <div class="col-lg-9 col-md-8 col-12">2002</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 col-12">Age range</div>
                                        <div class="col-lg-9 col-md-8 col-12">3-18+ years</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 col-12">Education system</div>
                                        <div class="col-lg-9 col-md-8 col-12">American</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 col-12">Accreditation</div>
                                        <div class="col-lg-9 col-md-8 col-12">ONESQA, WASC</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 col-12">Website</div>
                                        <div class="col-lg-9 col-md-8 col-12">
                                            <a href="https://www.aims.ac.th" target="_blank">www.aims.ac.th</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 col-12">Phone</div>
                                        <div class="col-lg-9 col-md-8 col-12">+663 672 0675</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 col-12">Fax</div>
                                        <div class="col-lg-9 col-md-8 col-12">+663 672 0675</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- SCHOOL :: 02 -->
            <?php } ?>
            
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