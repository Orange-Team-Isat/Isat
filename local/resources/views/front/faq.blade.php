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