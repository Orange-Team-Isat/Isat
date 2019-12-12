<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>@include('front.inc_header') <?php $pageName="isat"; ?></head>
<body>
    <div class="thetop"></div>
    
    @include('front.inc_topmenu')
    
    <!--------------- I S A T - B A N N E R - S L I D E --------------->
    
    @include('front.inc_isat-banner')
    
    <!--------------- I S A T :: E D U C A T I O N - S Y S T E M S --------------->
    <div class="content-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-12">
                    <div class="row">
                        <div class="col">
                            <h2>Education Systems</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="content-section">
                                <div class="content-txt txt-indent">
                                    <p>The curriculums offered at international schools in Thailand fall into four main categories:</p>
                                </div>
                                
                                <ul class="menutab">
                                    <li><a href="#section-1">
                                        <div class="school-icon"><img src="{{asset('assets/images/isat/icon-usa.png')}}"></div>
                                        <p>American <br>Curriculum</p>
                                        </a>
                                    </li>
                                    <li><a href="#section-2">
                                        <div class="school-icon"><img src="{{asset('assets/images/isat/icon-england.png')}}"></div>
                                        <p>British <br>Curriculum</p>
                                        </a>
                                    </li>
                                    <li><a href="#section-3">
                                        <div class="school-icon"><img src="{{asset('assets/images/isat/icon-school.png')}}"></div>
                                        <p>International Baccalaureate <br>Curriculum</p>
                                        </a>
                                    </li>
                                    <li><a href="#section-4">
                                        <div class="school-icon"><img src="{{asset('assets/images/isat/icon-globe.png')}}"></div>
                                        <p>Other National <br>Curriculums</p>
                                        </a>
                                    </li>
                                </ul>

                                <div class="content-txt txt-indent">
                                    <p>Each system has its advantages and disadvantages and of course, each school has its own strengths and weaknesses within their particular curriculum. There are also other curriculums which do not fall into any of these categories, but may be developed by an individual school, or by individual people.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- THE AMERICAN CURRICULUM -->
                    <div class="row" id="section-1">
                        <div class="col">
                            <h4>The American Curriculum</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="content-section">
                                <div class="content-txt txt-indent">
                                    <p>In the United States each individual state is responsible for its own curriculum and educational process. This means that the curriculum offered will vary from one American overseas school to the next. The curriculum continually evolves and it is based on learning standards and benchmarks. International American schools generally have higher standards than the public system schools within the US and they have to be accredited by one of four national non-governmental agencies. To gain accreditation, the school’s curriculum must be in line with the standards determined by the organisation (e.g. the Western Association of Schools and Colleges, WASC and New England Association of Schools and Colleges NEASC).</p>
                                    <p>In Thailand, schooling for children under an American state curriculum may begin at the age of five or less in pre-schools or kindergartens. Learning at these ages is less academically based and is more intended to introduce children to a school’s social environment, although all schools will offer some degree of alphabetic and numerical teaching. Elementary, Middle School and High School education covers children from the ages of 6 to 18 years old and most schools will require students take exit examinations in core subject areas to enable students to graduate with an American based high school diploma. Student may also take external exams, such as Advanced Placements (AP) which strengthen university applications. Depending upon the specific admissions requirements of each college or university, the majority of overseas students looking to be offered a placement at a US college must also complete the external SATs or other college entrance examinations to whatever level the university prescribes.</p>
                                    <p>In line with schools within the United States, schools in Thailand offering an American based curriculum will balance academic life with a rich and diverse array of community activities including sport, the arts, scholastic based clubs and a number of tutoring and mentoring enterprises.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- THE BRITISH CURRICULUM -->
                    <div class="row" id="section-2">
                        <div class="col">
                            <h4>The British Curriculum</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="content-section">
                                <div class="content-txt txt-indent">
                                    <p>In Britain, education is currently compulsory for all children between the ages of 5 and 16 with clear provision made for students aged 3-5 and 16-18. Children are placed in year groups based on their age on 31 August. Progress between Year Groups is usually automatic, although students may be out of their age group for exceptional reasons. Year Groups are clustered into Key Stages and a defined curriculum is produced for each Key Stage. Throughout each Key Stage there are clear assessments and examinations to monitor and track each child’s academic progress.</p>
                                    <p>Students study the International version of the General Certificate of Secondary Education (IGCSE) over the two years of Key Stage 4, from the age of 14. Most students study a compulsory core of English, Mathematics and Science plus a number of optional subjects. The norm is for students to take 8 or 9 IGCSE courses. The IGCSE examinations are a formal assessment of a child’s ability in each of the subjects they have studied. These are the final years of their compulsory high school education. The route however for students wishing to go to university is to continue into Key Stage 5, also known as Sixth Form, to follow two-year Advanced Level courses. GCSE and IGCSE are internationally recognised academic standards and used, alongside Advanced Levels, as part of the academic selection process for entry into the top universities around the World.</p>
                                </div>
                                <div class="content-txt">
                                    <p>The table below outlines the way in which the school and the curriculum are divided.</p>
                                </div>
                                
                                <div class="system-table">                                    
                                    <table width="100%">
                                        <thead>
                                            <tr>
                                                <th>Age on <br>31 August</th>
                                                <th>Year</th>
                                                <th>Curriculum Stage <br>[Examination Course]</th>
                                                <th>School <br>[Division]</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>3 years</td>
                                                <td>EY1</td>
                                                <td rowspan="2">Early Years Foundation Stage</td>
                                                <td rowspan="4">Junior School<br>[Pre-Preparatory]</td>
                                            </tr>
                                            <tr>
                                                <td>4 years</td>
                                                <td>EY2</td>
                                            </tr>
                                            <tr class="blueBG">
                                                <td>5 years</td>
                                                <td>Y1</td>
                                                <td rowspan="2">Key Stage 1</td>
                                            </tr>
                                            <tr class="blueBG">
                                                <td>6 years</td>
                                                <td>Y2</td>
                                            </tr>
                                            
                                            <tr>
                                                <td>7 years</td>
                                                <td>Y3</td>
                                                <td rowspan="4">Key Stage 2</td>
                                                <td rowspan="4">Junior School<br>[Preparatory]</td>
                                            </tr>
                                            <tr>
                                                <td>8 years</td>
                                                <td>Y4</td>
                                            </tr>
                                            <tr>
                                                <td>9 years</td>
                                                <td>Y5</td>
                                            </tr>
                                            <tr>
                                                <td>10 years</td>
                                                <td>Y6</td>
                                            </tr>
                                            
                                            <tr class="blueBG">
                                                <td>11 years</td>
                                                <td>Y7</td>
                                                <td rowspan="3">Key Stage 3</td>
                                                <td rowspan="5">Senior School</td>
                                            </tr>
                                            <tr class="blueBG">
                                                <td>12 years</td>
                                                <td>Y8</td>
                                            </tr>
                                            <tr class="blueBG">
                                                <td>13 years</td>
                                                <td>Y9</td>
                                            </tr>
                                            <tr>
                                                <td>14 years</td>
                                                <td>Y10</td>
                                                <td rowspan="2">Key Stage 4 [IGCSE]</td>
                                            </tr>
                                            <tr>
                                                <td>15 years</td>
                                                <td>Y11</td>
                                            </tr>
                                            
                                            <tr class="blueBG">
                                                <td>16 years</td>
                                                <td>Y12</td>
                                                <td rowspan="2">Key Stage 5 [A Level]</td>
                                                <td rowspan="2">Senior School<br>[Sixth Form]</td>
                                            </tr>
                                            <tr class="blueBG">
                                                <td>17 years</td>
                                                <td>Y13</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                    
                            </div>
                        </div>
                    </div>
                    
                    
                    <!-- INTERNATIONAL CURRICULUM -->
                    <div class="row" id="section-3">
                        <div class="col">
                            <h4>The International Baccalaureate (IB) Curriculum</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="content-section">
                                <div class="content-txt txt-indent">
                                    <p>Each year, the IB is taught in over 3,500 schools in over 140 countries with over one million children. Parents who choose the IB curriculum for their children can be assured that all schools offering any of the 3 IB programmes (Primary Years, Middle Years or Diploma) must be authorized to do so directly from the IB organisation. As the curriculum is devised by educators rather than governments, it can also be said to be a truly international education and free from political and economic influences. Quality is assured by the IB, as IB schools will undergo an evaluation for each of the IB programmes every 5 years.</p>
                                    <p>Parents choose to send their children to IB curriculum schools for a wide number of reasons including the relevance of the programmes to all students regardless of home country or mother tongue. The IB is widely regarded as having a holistic approach and globally aware characteristics. The programmes emphasize not only learning knowledge, but also challenge students to develop skills and positive attitudes, and to take responsible action. IB teachers are all trained by the IB, providing a consistent, high-quality education in all IB schools. All of which in turn make it the curriculum of choice for many international families.</p>
                                    <p>The 3 IB programmes cover learning for students aged 3 - 18 years old and each programme can be studied individually or as a continuum. A school that offers at least one of the 3 programmes is called an IB World School. A school may offer one, two or all three of the IB programmes.</p>
                                    <p>Learning in the Primary and Middle Years Programmes focuses on the development of the whole child as an inquirer, both in the classroom and in the world outside. Students learn higher level questioning skills, and the learning is driven by their natural curiosity. The programmes provide frameworks that encourage students to embrace and understand the connections between traditional subjects and the real world, and become critical and reflective thinkers. The IB Diploma Programme is for students aged 16-18 years old. It is an academically challenging and balanced programme, with final examinations as well as assessments, that prepares students for success both at university and in life beyond. The IB Diploma is respected by universities around the world for its depth and breadth of learning, the consistency of the value of the grades, and for the additional elements of Creativity, Action & Service and Theory of Knowledge, all of which make IB applicants stand out positively during the university admissions process.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- OTHER NATIONAL CURRICULUM -->
                    <div class="row" id="section-4">
                        <div class="col">
                            <h4>Other National Curriculums
                                <span>(Australian, Canadian, French, German, Japanese, Indian, Singaporean etc.)</span>
                            </h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="content-section mb-0">
                                <div class="content-txt txt-indent">
                                    <p>In addition to British, American and IB schools, Bangkok also boasts a number of other national curriculum schools. These schools offer education following their home country’s curriculum and usually teach in their home country’s language. These schools are especially suited to families whose overseas stay is relatively short, or whose children plan to attend university in their home country. Frequently these schools are subsidised by the home country government. The advantage of attending a national curriculum school in Thailand is that students can follow the education they are used to while still gaining experience of living overseas, and they will be able to return to their home country with minimum disruption.</p>
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
        // ANCHOR SC //
        function scrollNav() {
            $('.menutab a').click(function(){  
                //Animate
                $('html, body').stop().animate({
                    scrollTop: $( $(this).attr('href') ).offset().top - 0
                }, 800);
                return false;
            });
        }
        scrollNav();
    </script>
    
</body>
</html>