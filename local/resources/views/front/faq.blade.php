<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>@include('front.inc_header') <?php $pageName="isat"; ?></head>
<body>
    <div class="thetop"></div>
      @include('front.inc_topmenu')
    
    <!--------------- I S A T - B A N N E R - S L I D E --------------->
      @include('front.inc_isat-banner')
    
    <!--------------- I S A T :: F A Q --------------->
    <div class="content-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-12">
                    <div class="row">
                        <div class="col">
                            <h2>Frequently Asked Questions</h2>
                        </div>
                    </div>
                   
                    <div class="row">
                        <div class="col">
                            <div class="faq-acc">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <!-- QUESTION :: 01 -->
                                <?php  $faq= DB::table('faq')->orderBy('faq_id')->get(); ?>
                                        @if(!empty($faq))
                                                @foreach($faq as $_faq) 
                                                    <div class="panel-heading" role="tab" id="headingOne">
                                                        <div class="row">
                                                            <div class="col-10">{{ (Session::get('lang') == 'th' ? $_faq->faq_question_th : $_faq->faq_question_en) }}</div>
                                                            <div class="col-2">
                                                                <a id="quest01" data-toggle="collapse" data-parent="#accordion" href="#collapseOne{{ $_faq->faq_id }}" aria-expanded="true" aria-controls="collapseOne"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="collapseOne{{ $_faq->faq_id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body">
                                                            <h6>Answer :</h6>
                                                            <p><?php echo (Session::get('lang') == 'th' ? $_faq->faq_ans_th : $_faq->faq_ans_en)?></p>
                                                        </div>
                                                    </div>
                                            @endforeach
                                        @endif
                                        
                                        <!-- QUESTION :: 02 -->
                                        <!-- <div class="panel-heading" role="tab" id="headingTwo">
                                            <div class="row">
                                                <div class="col-10">Finding school for children</div>
                                                <div class="col-2">
                                                    <a id="quest02" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                <h6>Answer :</h6>
                                                <p>Member schools of ISAT are recognized and accredited by organizations such as the Western Association of Schools and Colleges (WASC), the New England Association of Schools and Colleges (NEASC), the Council of International Schools (CIS) and CfBT Education Trust. In our website, you can find the list of schools with their names and their websites. In their websites you can find the location of those schools, the fee structure, type of curriculum offered and how to apply.</p>
                                            </div>
                                        </div> -->
                                        
                                        <!-- QUESTION :: 03 -->
                                        <!-- <div class="panel-heading" role="tab" id="headingThree">
                                            <div class="row">
                                                <div class="col-10">Asking about Visa for spouse and children</div>
                                                <div class="col-2">
                                                    <a id="quest03" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="panel-body">
                                                <h6>Answer :</h6>
                                                <p>International Schools Association of Thailand (ISAT) provides the general information about the government policy on visa. To begin with you need to apply and get a job in one of our schools. Different schools have different policies with regard to visa for wife and children. The school that provides employment for you, will give you the necessary information.</p>
                                            </div>
                                        </div> -->
                                        
                                        <!-- QUESTION :: 04 -->
                                        <!-- <div class="panel-heading" role="tab" id="headingFour">
                                            <div class="row">
                                                <div class="col-10">Question Question Question</div>
                                                <div class="col-2">
                                                    <a id="quest04" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                            <div class="panel-body">
                                                <h6>Answer :</h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                            </div>
                                        </div> -->
                                        
                                        <!-- QUESTION :: 05 -->
                                        <!-- <div class="panel-heading" role="tab" id="headingFive">
                                            <div class="row">
                                                <div class="col-10">Question Question Question</div>
                                                <div class="col-2">
                                                    <a id="quest05" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                            <div class="panel-body">
                                                <h6>Answer :</h6>
                                                <p>Ut etiam sit amet nisl purus in mollis nunc sed. Imperdiet proin fermentum leo vel orci porta non pulvinar. Orci a scelerisque purus semper eget duis. Enim nulla aliquet porttitor lacus luctus. Viverra suspendisse potenti nullam ac. Blandit volutpat maecenas volutpat blandit. Diam maecenas sed enim ut sem viverra aliquet. Aenean vel elit scelerisque mauris pellentesque pulvinar. Nunc sed augue lacus viverra vitae congue. Nisi lacus sed viverra tellus in hac habitasse platea. Eget sit amet tellus cras. Dignissim cras tincidunt lobortis feugiat. Et ultrices neque ornare aenean euismod elementum. Tortor vitae purus faucibus ornare suspendisse sed nisi lacus sed. Egestas pretium aenean pharetra magna ac. Pulvinar mattis nunc sed blandit libero volutpat sed.</p>
                                            </div>
                                        </div> -->
                                        
                                        <!-- QUESTION :: 06 -->
                                        <!-- <div class="panel-heading" role="tab" id="headingSix">
                                            <div class="row">
                                                <div class="col-10">Question Question Question</div>
                                                <div class="col-2">
                                                    <a id="quest06" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="true" aria-controls="collapseSix"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                            <div class="panel-body">
                                                <h6>Answer :</h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                            </div>
                                        </div> -->
                                        
                                        <!-- QUESTION :: 07 -->
                                        <!-- <div class="panel-heading" role="tab" id="headingSeven">
                                            <div class="row">
                                                <div class="col-10">Question Question Question</div>
                                                <div class="col-2">
                                                    <a id="quest07" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                                            <div class="panel-body">
                                                <h6>Answer :</h6>
                                                <p>Ut etiam sit amet nisl purus in mollis nunc sed. Imperdiet proin fermentum leo vel orci porta non pulvinar. Orci a scelerisque purus semper eget duis. Enim nulla aliquet porttitor lacus luctus. Viverra suspendisse potenti nullam ac. Blandit volutpat maecenas volutpat blandit. Diam maecenas sed enim ut sem viverra aliquet. Aenean vel elit scelerisque mauris pellentesque pulvinar. Nunc sed augue lacus viverra vitae congue. Nisi lacus sed viverra tellus in hac habitasse platea. Eget sit amet tellus cras. Dignissim cras tincidunt lobortis feugiat. Et ultrices neque ornare aenean euismod elementum. Tortor vitae purus faucibus ornare suspendisse sed nisi lacus sed. Egestas pretium aenean pharetra magna ac. Pulvinar mattis nunc sed blandit libero volutpat sed.</p>
                                            </div>
                                        </div> -->
                                        
                                        <!-- QUESTION :: 08 -->
                                        <!-- <div class="panel-heading" role="tab" id="headingEight">
                                            <div class="row">
                                                <div class="col-10">Question Question Question</div>
                                                <div class="col-2">
                                                    <a id="quest08" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="true" aria-controls="collapseEight"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                                            <div class="panel-body">
                                                <h6>Answer :</h6>
                                                <p>Ut etiam sit amet nisl purus in mollis nunc sed. Imperdiet proin fermentum leo vel orci porta non pulvinar. Orci a scelerisque purus semper eget duis. Enim nulla aliquet porttitor lacus luctus. Viverra suspendisse potenti nullam ac. Blandit volutpat maecenas volutpat blandit. Diam maecenas sed enim ut sem viverra aliquet. Aenean vel elit scelerisque mauris pellentesque pulvinar. Nunc sed augue lacus viverra vitae congue. Nisi lacus sed viverra tellus in hac habitasse platea. Eget sit amet tellus cras. Dignissim cras tincidunt lobortis feugiat. Et ultrices neque ornare aenean euismod elementum. Tortor vitae purus faucibus ornare suspendisse sed nisi lacus sed. Egestas pretium aenean pharetra magna ac. Pulvinar mattis nunc sed blandit libero volutpat sed.</p>
                                            </div>
                                        </div> -->
                                        
                                        <!-- QUESTION :: 09 -->
                                        <!-- <div class="panel-heading" role="tab" id="headingNine">
                                            <div class="row">
                                                <div class="col-10">Question Question Question</div>
                                                <div class="col-2">
                                                    <a id="quest09" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="true" aria-controls="collapseNine"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
                                            <div class="panel-body">
                                                <h6>Answer :</h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                            </div>
                                        </div> -->
                                        
                                        <!-- QUESTION :: 10 -->
                                        <!-- <div class="panel-heading" role="tab" id="headingTen">
                                            <div class="row">
                                                <div class="col-10">Question Question Question</div>
                                                <div class="col-2">
                                                    <a id="quest10" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="true" aria-controls="collapseTen"></a>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
                                            <div class="panel-body">
                                                <h6>Answer :</h6>
                                                <p>Ut etiam sit amet nisl purus in mollis nunc sed. Imperdiet proin fermentum leo vel orci porta non pulvinar. Orci a scelerisque purus semper eget duis. Enim nulla aliquet porttitor lacus luctus. Viverra suspendisse potenti nullam ac. Blandit volutpat maecenas volutpat blandit. Diam maecenas sed enim ut sem viverra aliquet. Aenean vel elit scelerisque mauris pellentesque pulvinar. Nunc sed augue lacus viverra vitae congue. Nisi lacus sed viverra tellus in hac habitasse platea. Eget sit amet tellus cras. Dignissim cras tincidunt lobortis feugiat. Et ultrices neque ornare aenean euismod elementum. Tortor vitae purus faucibus ornare suspendisse sed nisi lacus sed. Egestas pretium aenean pharetra magna ac. Pulvinar mattis nunc sed blandit libero volutpat sed.</p>
                                            </div>
                                        </div> -->
                                        
                                    </div>
                                   
                                </div>
                                
                            </div>
                            
                        </div>
                       
                    </div>
                    
                </div>
                
                <!------ LATEST NEWS ------>
                <div class="col-lg-3 col-12">     
                    
                    @include('front.inc_latestnews') 
                </div>
            </div>
                
        </div>
    </div>
    
    @include('front.inc_topbutton')
    
    @include('front.inc_footer')
    
   
    
    <script type="text/javascript">
        // collapse //
        $(document).ready(function() {
            $('.collapse.in').prev('.panel-heading').addClass('active');
            $('#accordion')
                .on('show.bs.collapse', function(a) {
                $(a.target).prev('.panel-heading').addClass('active');
                $('#quest01').attr('class');
                $('#quest02').attr('class');
            })
                .on('hide.bs.collapse', function(a) {
                $(a.target).prev('.panel-heading').removeClass('active');
                $('#quest01').attr('class');
                $('#quest02').attr('class');
            });
        });
    </script>
    
</body>
</html>