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
            <!-- SCHOOL :: 01 -->
            <div class="row">
                <div class="col-12">
                    <?php $school= DB::table('memberschool')->orderBy('school_id','ASC')->limit(6)->get(); ?>
                        @if(!empty($school))
                            @foreach($school as $_school)
                                <div class="headerBlue">{{ (Session::get('lang') == 'th' ? $_school->school_name_th : $_school->school_name_en) }}</div>
                                <div class="schoolBox">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-12">
                                            <div class="img-middle">
                                                <div><img class="img-fluid" src="{{asset('local/public/memberschool').'/'.$_school->school_img}}"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-12">
                                            <div class="school-info">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 col-12">Location/Address</div>
                                                    <div class="col-lg-9 col-md-8 col-12"><?php echo (Session::get('lang') == 'th' ? $_school->school_address_th : $_school->school_address_en); ?></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 col-12">Year established</div>
                                                    <div class="col-lg-9 col-md-8 col-12"><?php echo ( $_school->school_year ); ?></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 col-12">Age range</div>
                                                    <div class="col-lg-9 col-md-8 col-12"><?php echo ( $_school->school_age ); ?></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 col-12">Education system</div>
                                                    <div class="col-lg-9 col-md-8 col-12"><?php echo ( $_school->school_edusystem ); ?></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 col-12">Accreditation</div>
                                                    <div class="col-lg-9 col-md-8 col-12"><?php echo ( $_school->school_accreditation ); ?></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 col-12">Website</div>
                                                    <div class="col-lg-9 col-md-8 col-12">
                                                        <a href="http://<?php echo ( $_school->school_website ); ?>" target="_blank"><?php echo ( $_school->school_website ); ?></a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 col-12">Phone</div>
                                                    <div class="col-lg-9 col-md-8 col-12"><?php echo ( $_school->school_phone ); ?></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 col-12">Fax</div>
                                                    <div class="col-lg-9 col-md-8 col-12"><?php echo ( $_school->school_fax ); ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                </div>
            </div>
            <!-- SCHOOL :: 01 -->
            
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