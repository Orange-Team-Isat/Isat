<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>@include('front.inc_header') <?php $pageName="isat"; ?></head>
<body>
    <div class="thetop"></div>
     @include('front.inc_topmenu')
    
    <!--------------- I S A T - B A N N E R - S L I D E --------------->
  
     @include('front.inc_isat-banner')
    
    <!--------------- I S A T :: I S A T - P R E S E N T --------------->
    <div class="content-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-12">
                    <div class="row">
                        <div class="col">
                            <h2>ISAT PRESENTS</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h4>ISAT Mission Statement</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="content-section">
                                <div class="content-txt txt-indent">
                                    <p>ISAT acts as the unified voice for international education in Thailand and as a centre for collective action on behalf of its membership. It serves and strengthens its membership by articulating and promoting high standards of educational quality, ethical practices and student learning.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h4>Core Tasks</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="content-section mb-0">
                                <ul class="content-list">
                                    <li>Promoting the ‘ISAT Protocol’ of its membership</li>
                                    <li>Encouraging communication and collaboration among membership schools.</li>
                                    <li>Promoting public awareness of ISAT member schools.</li>
                                    <li>Supporting professional development, school development and networking for member schools.</li>
                                    <li>Working with the Government to implement our common resolutions and to support Government policy, and requests which are approved by the ISAT Committee.</li>
                                </ul>
                                <div class="content-txt txt-indent">
                                    <p>The International Schools Association of Thailand (ISAT) was initially established in 1994 to be a link between its five member schools and the Thai Ministry of Education. Today, with 128 member schools, we work with all of the government ministries to build understanding of the benefits of international education in Thailand. However, ISAT is more than just a link between schools and government. Whilst we continue to promote quality international school education, we also go beyond our own member schools to foster quality education in all schools in Thailand. In that sense, ISAT has become a driving force for high education standards in the Kingdom.</p>
                                    <p>The calibre of education offered at the International Schools Association of Thailand’s (ISAT) member schools has been recognized by accreditation organizations such as the Western Association of Schools and Colleges (WASC), the New England Association of Schools and Colleges (NEASC), the Council of International Schools (CIS) and Education Development Trust (EDT).</p>
                                    <p>ISAT schools offer a range of curriculums from American, British, International Baccalaureate and other national curriculums such as French, Swiss, Singaporean, Japanese and Korean. A variety of campus and enrollment sizes as well as sports, fine arts and co-curricular offerings at the various schools throughout the country meet the needs and abilities of individual students from diverse backgrounds. Typically students from ISAT schools graduate and attend universities and colleges around the world.</p>
                                    <p>ISAT works closely with its member schools to ensure high standards of education through encouragement of best practices, ethical behaviour and professional development. Whilst representing the member schools to the Thai government, ISAT has worked closely with the Ministry of Education, the Board of Investments (BOI), the Department of International Trade Promotion, and the Office of the Private Education Commission, as well as other departments. ISAT is proud of the fact that some of its member schools have received the prestigious Prime Minister’s Award.</p>
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
    
   
</body>
</html>