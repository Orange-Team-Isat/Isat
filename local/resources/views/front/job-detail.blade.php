<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>@include('front.inc_header') <?php $pageName="job"; ?></head>
<body>
    <div class="thetop"></div>
    @include('front.inc_topmenu')
    
    <!--------------- J O B :: D E T A I L --------------->
    <div class="content-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>JOB Opportunities</h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="jobDetail-position">
                        <h3 class="subTopic">ASSISTANT MANAGER</h3>
                        <h5>School Name School Name School Name School Name</h5>
                    </div>
                    <div class="content-center mb-5">
                        <div class="post-date"><span><i class="fas fa-pencil-alt"></i>Post on :</span>28 Oct 2019</div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col">
                    <div class="GrayBox-info" id="job">
                        <!-- Job Description -->
                        <div class="row">
                            <div class="col">
                                <h5>Job Description</h5>
                                <ul class="content-list outside">
                                    <li>Supporting Manager in Administrative & General Affairs jobs</li>
                                    <li>Handling daily report</li>
                                    <li>Liaise with member schools, government and private sectors in order to establish and maintain effective and relevant activities and support in relation to the organization's management</li>
                                    <li>Solving daily tasks to be accomplished</li>
                                    <li>Controlling tasks assigned to meet the deadline</li>
                                </ul>
                            </div>
                        </div>
                        
                        <!-- Qualifications -->
                        <div class="row">
                            <div class="col">
                                <h5>Qualifications</h5>
                                <ul class="content-list outside">
                                    <li>Thai national only</li>
                                    <li>Bachelor’s degree in related fields</li>
                                    <li>At least 3 years of working experience in administrative/ secretarial position</li>
                                    <li>Good communication skills both verbal and written in English</li>
                                    <li>Good computer literacy</li>
                                    <li>Knowledge about General Affair jobs in educational institutes, International schools in particular, will be an advantage</li>
                                    <li>Goal-oriented and collaborative personality</li>
                                    <li>Good interpersonal and organizational skills</li>
                                    <li>Able to work in Pakkret, Nonthaburi</li>
                                </ul>
                            </div>
                        </div>
                        <!-- CONTACT TO -->
                        <div class="row">
                            <div class="col">
                                <div class="contact-to">Interested candidates, please contact <a href="mailto:hr@isat.or.th">hr@isat.or.th</a></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="content-center">
                                    <a class="buttonYellow" href="#">More Information</a>
                                </div>
                            </div>
                        </div>
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
                        <a class="buttonGray minWidth" href="{{ url('job')}}">Back</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
    
    @include('front.inc_topbutton')
   
    
    @include('front.inc_footer')
    
    
</body>
</html>