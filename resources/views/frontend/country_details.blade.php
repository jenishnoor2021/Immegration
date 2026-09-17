@extends('layouts.front')
@section('content')
<!-- page-title -->
<!-- Page Header -->
@include('includes.heroimg')
<div class="container">
   <div class="wptb-item--inner">
      <h2 class="wptb-item--title ">Country Details</h2>
      <div class="wptb-breadcrumb-wrap">
         <ul class="wptb-breadcrumb">
            <li><a href="{{URL::to('/')}}">Home</a></li>
            <li><a href="#">Pages</a></li>
            <li><span>Country Details</span></li>
         </ul>
      </div>
   </div>
</div>
</div>
<!-- page-title end -->

<!-- Details Content -->
<section class="blog-details">
   <div class="container">
      <div class="row">

         <!-- Service Navigation List -->
         <div class="col-lg-4 col-md-5 pe-md-5">
            <div class="sidebar county_list">
               <div class="sidenav">
                  <ul class="side_menu">
                     <li class="menu-item active" data-country="uk">
                        <div class="menu-item_inner d-flex align-items-center justify-content-between">
                           <span>
                              <img src="{{asset('assets/img/country/uk.jpg')}}" alt="">
                              United Kingdom
                           </span>
                           <i class="bi bi-chevron-right"></i>
                        </div>
                     </li>

                     <li class="menu-item" data-country="usa">
                        <div class="menu-item_inner d-flex align-items-center justify-content-between">
                           <span>
                              <img src="{{asset('assets/img/country/usa.jpg')}}" alt="">
                              United States of America
                           </span>
                           <i class="bi bi-chevron-right"></i>
                        </div>
                     </li>

                     <li class="menu-item" data-country="canada">
                        <div class="menu-item_inner d-flex align-items-center justify-content-between">
                           <span>
                              <img src="{{asset('assets/img/country/canada.jpg')}}" alt="">
                              Canada
                           </span>
                           <i class="bi bi-chevron-right"></i>
                        </div>
                     </li>

                     <li class="menu-item" data-country="au">
                        <div class="menu-item_inner d-flex align-items-center justify-content-between">
                           <span>
                              <img src="{{asset('assets/img/country/australia.jpg')}}" alt="">
                              Australia
                           </span>
                           <i class="bi bi-chevron-right"></i>
                        </div>
                     </li>

                     <li class="menu-item" data-country="nz">
                        <div class="menu-item_inner d-flex align-items-center justify-content-between">
                           <span>
                              <img src="{{asset('assets/img/country/new-zealand.png')}}" alt="">
                              New Zealand
                           </span>
                           <i class="bi bi-chevron-right"></i>
                        </div>
                     </li>

                     <li class="menu-item" data-country="fr">
                        <div class="menu-item_inner d-flex align-items-center justify-content-between">
                           <span>
                              <img src="{{asset('assets/img/country/france.png')}}" alt="">
                              France
                           </span>
                           <i class="bi bi-chevron-right"></i>
                        </div>
                     </li>
                     <li class="menu-item" data-country="gr">
                        <div class="menu-item_inner d-flex align-items-center justify-content-between">
                           <span>
                              <img src="{{asset('assets/img/country/germany.png')}}" alt="">
                              Germany
                           </span>
                           <i class="bi bi-chevron-right"></i>
                        </div>
                     </li>
                  </ul>
               </div>

               <div class="wptb-banner2 mr-top-30">
                  <div class="wptb-banner-inner">
                     <a class="wptb-item--link" href="tel:9979865666"></a>
                     <div class="wptb-item--image">
                        <div class="wptb-item-img-primary " data-wow-delay="ms">
                           <img src="{{asset('assets/img/more/banner.jpg')}}" alt="">
                        </div>
                     </div>

                     <div class="wptb-wrap-content">
                        <div class="wptb-wrap-shape">
                           <svg class="wptb-svg-1" width="422" height="328" viewBox="0 0 422 328" xmlns="http://www.w3.org/2000/svg">
                              <path d="M0.287109 240.142C20.2871 205.285 96.63 135.228 242.001 133.856C385.076 132.507 421.433 46.9123 422.001 2.26061V0.14209C422.01 0.837364 422.011 1.54371 422.001 2.26061V327.571H0.287109V240.142Z"></path>
                           </svg>
                           <svg class="wptb-svg-2" width="422" height="329" viewBox="0 0 422 329" xmlns="http://www.w3.org/2000/svg">
                              <path d="M199.142 146.428C96.2852 139.571 23.7137 193.857 0.285156 221.857V328.142H421.999V0.713623C387.714 112.142 327.714 154.999 199.142 146.428Z"></path>
                           </svg>
                        </div>
                        <div class="wptb-content">
                           <div class="wptb-item--title">Visa &amp; Immigration</div>
                           <div class="wptb-item-contact-info">
                              <div class="wptb-item--icon">
                                 <i class="bi bi-telephone-fill"></i>
                              </div>
                              <span class="wptb-item--desc">Need Help? Book Appointment/Counselling</span>
                              <h5 class="wptb-item--number">+91  9979865666</h5>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
         </div>

         <div class="country_content col-lg-8 col-md-7 mt-5 mt-md-0">
            <div class="blog-details-inner" data-country="uk">
               <div class="post-content">
                  <div class="post-header mt-0">
                     <h1 class="post-title">United Kingdom(UK)</h1>
                  </div>
                  <div class="fulltext">
                     <p>The UK boasts a long-standing tradition of academic excellence, housing four of the top ten universities globally according to the QS World University Rankings. Institutions like Oxford, Cambridge, and Imperial College London hold immense international recognition, attracting students seeking a world-class education.</p>
                     <p>Degrees obtained from UK universities are highly respected and valued by employers worldwide. This recognition opens doors for international graduates seeking job opportunities across the globe, making a UK education a worthwhile investment.</p>
                     <p>UK universities offer a wide variety of programs across various disciplines, catering to diverse academic interests. This allows international students to find the perfect program to match their career aspirations, unlike some countries with limited program options.</p>
                     <p><b>Shorter Program Durations:</b> Compared to other popular destinations like the US, many undergraduate programs in the UK last three years, while postgraduate programs can be completed in one year. This condensed timeframe can be appealing to international students seeking a quicker path to obtaining their qualifications and entering the workforce.</p>
                     <p>The UK embraces a <b>multicultural society,</b> welcoming students from various backgrounds. This fosters a diverse and enriching learning environment, allowing international students to connect with people from different cultures and broaden their horizons.</p>

                     <div class="wptb-accordion wptb-accordion2 wow fadeInUp">
                        <div class="wptb--item active">
                           <h6 class="wptb-item-title"><span>1) Top Universities:</span> <i class="plus bi bi-plus"></i> <i class="minus bi bi-dash"></i></h6>
                           <div class="wptb-item--content">
                              <ul class="point-order">
                                 <li>University of Oxford</li>
                                 <li>University of Cambridge</li>
                                 <li>Imperial College London</li>
                                 <li>London School of Economics and Political Science (LSE)</li>
                                 <li>University College London (UCL)</li>
                                 <li>University of Edinburgh</li>
                                 <li>University of Manchester</li>
                                 <li>University of Bristol</li>
                                 <li>University of Warwick</li>
                                 <li>King's College London</li>
                              </ul>
                           </div>
                        </div>

                        <div class="wptb--item">
                           <h6 class="wptb-item-title"><span>2) Trending Courses to Study In UK</span> <i class="plus bi bi-plus"></i> <i class="minus bi bi-dash"></i></h6>
                           <div class="wptb-item--content">
                              <ul class="point-order">
                                 <li>Artificial Intelligence and Machine Learning</li>
                                 <li>Cybersecurity</li>
                                 <li>Data Science and Analytics</li>
                                 <li>Renewable Energy Engineering</li>
                                 <li>Healthcare Management</li>
                                 <li>Environmental Science and Conservation</li>
                                 <li>Finance and Investment Banking</li>
                                 <li>Hospitality and Tourism Management</li>
                                 <li>Creative Writing and Journalism</li>
                                 <li>Digital Marketing</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="blog-details-inner" data-country="usa" style="display:none;">
               <div class="post-content">
                  <div class="post-header mt-0">
                     <h1 class="post-title">United States of America</h1>
                  </div>
                  <div class="fulltext">
                     <p>The USA has a world-class education system that is recognized globally for its academic excellence and innovation. You can choose from more than 4,000 accredited colleges and universities that offer a wide range of programs and degrees in various fields of study.</p>
                     <p>You can also benefit from the flexible curriculum that allows you to explore different subjects and customize your learning experience.</p>
                     <p>The USA is a diverse and multicultural country that welcomes international students from all over the world. You can experience different cultures, languages, perspectives, and lifestyles in the USA. You can also join various student clubs and organizations that cater to your interests and hobbies, and make friends with people from different backgrounds and nationalities.</p>
                     <p>The USA is a leader in innovation and research that offers cutting-edge facilities and resources for students who want to pursue their academic and professional goals. You can access the latest technology, equipment, and libraries that support your learning and research. You can also collaborate with renowned faculty and researchers who are experts in their fields and contribute to the advancement of knowledge and discovery.</p>
                     <p>The USA has many career opportunities for students who want to gain practical skills and experience in their chosen fields. You can apply for optional practical training (OPT) or curricular practical training (CPT) that allow you to work in the USA for up to 12 months or more, depending on your program and visa status.</p>
                     <p>You can also network with potential employers and explore various job prospects in the USA or global. A US degree can be valuable in the global job market, potentially opening doors to promising career paths in the US or internationally.</p>

                     <div class="wptb-accordion wptb-accordion2 wow fadeInUp">
                        <div class="wptb--item active">
                           <h6 class="wptb-item-title"><span>1) Top Universities:</span> <i class="plus bi bi-plus"></i> <i class="minus bi bi-dash"></i></h6>
                           <div class="wptb-item--content">
                              <ul class="point-order">
                                 <li>Massachusetts Institute of Technology</li>
                                 <li>Harvard University</li>
                                 <li>Stanford University</li>
                                 <li>University of California Berkeley</li>
                                 <li>University of Chicago</li>
                                 <li>University of Pennsylvania</li>
                                 <li>Cornell University</li>
                                 <li>California Institute of Technology</li>
                                 <li>Yale University</li>
                                 <li>Princeton University</li>
                                 <li>Columbia University</li>
                                 <li>University of California, Los Angeles</li>
                                 <li>New York University</li>
                                 <li>Northwestern University</li>
                                 <li>Duke University</li>
                                 <li>University of Texas at Austin</li>
                                 <li>University of Washington</li>
                                 <li>University of Illinois at Urbana-Champaign</li>
                                 <li>Brown University</li>
                                 <li>Pennsylvania State University</li>
                                 <li>Boston University</li>
                                 <li>Georgia Institute of Technology</li>
                                 <li>Purdue University</li>
                                 <li>University of Wisconsin-Madison</li>
                                 <li>University of Southern California</li>
                                 <li>Texas A&M University</li>
                                 <li>Michigan State University</li>
                                 <li>Ohio State University</li>
                                 <li>University of Florida</li>
                                 <li>Arizona State University</li>
                              </ul>
                           </div>
                        </div>

                        <div class="wptb--item">
                           <h6 class="wptb-item-title"><span>2) Our Services:</span> <i class="plus bi bi-plus"></i> <i class="minus bi bi-dash"></i></h6>
                           <div class="wptb-item--content">
                              <ul class="point-order">
                                 <li>Artificial Intelligence and Machine Learning</li>
                                 <li>Cybersecurity</li>
                                 <li>Data Science and Analytics</li>
                                 <li>Renewable Energy Engineering</li>
                                 <li>Profile Evaluation</li>
                                 <li>Admission SOPs</li>
                                 <li>Letter of Recommendation</li>
                                 <li>Admission Application</li>
                                 <li>Financial Assistance</li>
                                 <li>Visa Documents</li>
                                 <li>Visa Application</li>
                                 <li>Education Loan Assistance</li>
                                 <li>Universal Brotherhood</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="blog-details-inner" data-country="canada" style="display:none;">
               <div class="post-content">
                  <div class="post-header mt-0">
                     <h1 class="post-title">Canada</h1>
                  </div>
                  <div class="fulltext">
                     <p>Canada is a top destination for international students because of its high quality of education, career opportunities, diverse culture, and quality of life outside of academics. Canada has a high-quality education system that offers a wide range of programs and degrees in various fields of study. You can choose from more than 400 colleges and university programs and benefit from the same rights and freedoms that protect all Canadians: respect for human rights, equality, diversity and a stable, peaceful society.</p>
                     <p>Canada has affordable tuition fees and living costs compared to other popular study destinations. You can also access scholarships and work opportunities to help pay for your education. Many programs also offer co-op work placements or internships to get hands-on experience while you study.</p>
                     <p>Canada is a diverse and inclusive environment that welcomes international students from all over the world. In Canada there are more than 250 ethnic origins along with 200 languages from around the world and 70 Indigenous languages spoken. You’ll feel at home in both our communities and classrooms.</p>
                     <p>Canada has many opportunities for students to gain work experience, network with employers, and apply for permanent residency after graduation. A recent study shows that 60% of international students who were employed during their period of study or after graduation became landed immigrants within 10 years of having obtained their first study permit.</p>

                     <div class="wptb-accordion wptb-accordion2 wow fadeInUp">
                        <div class="wptb--item active">
                           <h6 class="wptb-item-title"><span>1) Top Universities:</span> <i class="plus bi bi-plus"></i> <i class="minus bi bi-dash"></i></h6>
                           <div class="wptb-item--content">
                              <ul class="point-order">
                                 <li>University of Toronto</li>
                                 <li>University of Alberta</li>
                                 <li>University of Waterloo</li>
                                 <li>University of British Columbia</li>
                                 <li>University of Calgary</li>
                                 <li>University of Pennsylvania</li>
                                 <li>Cornell University</li>
                                 <li>California Institute of Technology</li>
                                 <li>Yale University</li>
                                 <li>Princeton University</li>
                                 <li>Columbia University</li>
                                 <li>University of California, Los Angeles</li>
                                 <li>University of Ottawa</li>
                                 <li>McMaster University</li>
                                 <li>Duke University</li>
                                 <li>University of Texas at Austin</li>
                                 <li>University of Washington</li>
                                 <li>University of Illinois at Urbana-Champaign</li>
                                 <li>Brown University</li>
                                 <li>Pennsylvania State University</li>
                                 <li>Boston University</li>
                                 <li>Dalhousie University</li>
                                 <li>Purdue University</li>
                                 <li>University of Wisconsin-Madison</li>
                                 <li>University of Southern California</li>
                                 <li>Texas A&M University</li>
                                 <li>Michigan State University</li>
                                 <li>Ohio State University</li>
                                 <li>University of Florida</li>
                                 <li>University of Calgary, etc</li>
                              </ul>
                           </div>
                        </div>

                        <div class="wptb--item">
                           <h6 class="wptb-item-title"><span>2) Top Colleges:</span> <i class="plus bi bi-plus"></i> <i class="minus bi bi-dash"></i></h6>
                           <div class="wptb-item--content">
                              <ul class="point-order">
                                 <li>Centennial College</li>
                                 <li>Conestoga College</li>
                                 <li>Humber College</li>
                                 <li>Lambton College</li>
                                 <li>George Brown College</li>
                                 <li>Seneca College Durham College Fanshawe College</li>
                                 <li>Georgian College</li>
                              </ul>
                           </div>
                        </div>

                        <div class="wptb--item">
                           <h6 class="wptb-item-title"><span>3) Our Services:</span> <i class="plus bi bi-plus"></i> <i class="minus bi bi-dash"></i></h6>
                           <div class="wptb-item--content">
                              <ul class="point-order">
                                 <li>Profile Evaluation</li>
                                 <li>Admission SOPs</li>
                                 <li>Letter of Recommendation</li>
                                 <li>Admission Application</li>
                                 <li>Financial Assistance</li>
                                 <li>Visa Documents</li>
                                 <li>Visa Application</li>
                                 <li>Education Loan Assistance</li>
                                 <li>Universal Brotherhood</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="blog-details-inner" data-country="au" style="display:none;">
               <div class="post-content">
                  <div class="post-header mt-0">
                     <h1 class="post-title">Australia</h1>
                  </div>
                  <div class="fulltext">
                     <p>Australia is a <b>top destination for international students</b> because it offers high-quality education, diverse culture, beautiful nature, and career opportunities. Here are some of the specific reasons why you might want to study in Australia:</p>
                     <p>Australia has a <b>high-quality education system</b> that is recognized globally for its academic excellence and innovation. You can choose from more than 42 universities and a range of 22,000 courses in various fields of study. You can also benefit from the Australian Qualifications Framework (AQF), which ensures that your qualifications are consistent and comparable with international standards.</p>
                     <p>Australia is a <b>diverse and multicultural country</b> that welcomes international students from all over the world. You can experience different cultures, languages, perspectives, and lifestyles in Australia. You can also join various student clubs and organizations that cater to your interests and hobbies, and make friends with people from different backgrounds and nationalities.</p>
                     <p>Australia is a <b>beautiful and natural country</b> that offers a variety of landscapes, climates, and attractions for you to explore. You can enjoy the world-famous beaches, the Great Barrier Reef, the Outback, the rainforests, and the wildlife in Australia. You can also participate in various outdoor activities such as surfing, hiking, camping, skiing, and more.</p>
                     <p>Australia has many <b>career opportunities</b> for students who want to gain practical skills and experience in their chosen fields. You can apply for post-study work rights that allow you to work in Australia for up to 2 to 4 years, depending on your qualification level and visa status.</p>

                     <div class="wptb-accordion wptb-accordion2 wow fadeInUp">
                        <div class="wptb--item">
                           <h6 class="wptb-item-title"><span>1) Top Colleges:</span> <i class="plus bi bi-plus"></i> <i class="minus bi bi-dash"></i></h6>
                           <div class="wptb-item--content">
                              <ul class="point-order">
                                 <li>University of Melbourne</li>
                                 <li>University of New South Wales</li>
                                 <li>University of Sydney</li>
                                 <li>Australian National University (ANU)</li>
                                 <li>Monash University</li>
                                 <li>University of Queensland</li>
                                 <li>University of Western Australia</li>
                                 <li>University of Adelaide</li>
                                 <li>University of Technology, Sydney</li>
                                 <li>Macquarie University</li>
                              </ul>
                           </div>
                        </div>

                        <div class="wptb--item">
                           <h6 class="wptb-item-title"><span>2) Trending Courses to study in Australia:</span> <i class="plus bi bi-plus"></i> <i class="minus bi bi-dash"></i></h6>
                           <div class="wptb-item--content">
                              <ul class="point-order">
                                 <li>Engineering</li>
                                 <li>Information Technology</li>
                                 <li>Cyber Security</li>
                                 <li>Architecture</li>
                                 <li>Hospitality & Tourism</li>
                                 <li>MBA</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="blog-details-inner" data-country="nz" style="display:none;">
               <div class="post-content">
                  <div class="post-header mt-0">
                     <h1 class="post-title">New Zealand</h1>
                  </div>
                  <div class="fulltext">
                     <p>New Zealand is a blend of a picturesque setting, high tech infrastructure, and some of the most famous universities in the world. In a nutshell, there are numerous benefits of studying in New Zealand including world class academia, high ROI, diverse culture and what not. The educational institutions in New Zealand allow students to explore profound opportunities in research and study. New Zealand supports your dream of pursuing your desired field of interest in arts, sciences and commerce by offering you a myriad of courses to choose from.</p>
                     <div class="wptb-accordion wptb-accordion2 wow fadeInUp">
                        <div class="wptb--item active">
                           <h6 class="wptb-item-title"><span>1) High-Quality Education:</span> <i class="plus bi bi-plus"></i> <i class="minus bi bi-dash"></i></h6>
                           <div class="wptb-item--content">
                              <p>New Zealand boasts a world-class education system with universities consistently ranking highly in international rankings. You can expect a rigorous and well-respected education.</p>
                           </div>
                        </div>

                        <div class="wptb--item">
                           <h6 class="wptb-item-title"><span>2) Lower Costs:</span> <i class="plus bi bi-plus"></i> <i class="minus bi bi-dash"></i></h6>
                           <div class="wptb-item--content">
                              <p>Compared to some other popular study abroad destinations like the USA, New Zealand can offer lower tuition fees and living expenses, making it a more cost-effective option.</p>
                           </div>
                        </div>

                        <div class="wptb--item">
                           <h6 class="wptb-item-title"><span>3) Safe and Welcoming Environment:</span> <i class="plus bi bi-plus"></i> <i class="minus bi bi-dash"></i></h6>
                           <div class="wptb-item--content">
                              <p>New Zealand consistently ranks among the safest countries in the world, known for its friendly and welcoming population.</p>
                           </div>
                        </div>

                        <div class="wptb--item">
                           <h6 class="wptb-item-title"><span>4) Natural Beauty:</span> <i class="plus bi bi-plus"></i> <i class="minus bi bi-dash"></i></h6>
                           <div class="wptb-item--content">
                              <p>New Zealand is renowned for its stunning natural landscapes, offering unique opportunities for outdoor activities and exploration.</p>
                           </div>
                        </div>

                        <div class="wptb--item">
                           <h6 class="wptb-item-title"><span>5) Work Opportunities:</span> <i class="plus bi bi-plus"></i> <i class="minus bi bi-dash"></i></h6>
                           <div class="wptb-item--content">
                              <p>International students in New Zealand may be eligible to work part-time while studying, gaining valuable work experience and potentially contributing to living expenses.</p>
                           </div>
                        </div>

                        <div class="wptb--item">
                           <h6 class="wptb-item-title"><span>6) Post-Graduation Options:</span> <i class="plus bi bi-plus"></i> <i class="minus bi bi-dash"></i></h6>
                           <div class="wptb-item--content">
                              <p>A New Zealand degree can be valuable globally, and the country offers pathways for international graduates to seek work opportunities or even permanent residency.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="blog-details-inner" data-country="fr" style="display:none;">
               <div class="post-content">
                  <div class="post-header mt-0">
                     <h1 class="post-title">France</h1>
                  </div>
                  <div class="fulltext">
                     <p>France, in Western Europe, encompasses medieval cities, alpine villages and Mediterranean beaches. Paris, its capital, is famed for its fashion houses, classical art museums including the Louvre and monuments like the Eiffel Tower. The country is also renowned for its wines and sophisticated cuisine:</p>
                     <div class="wptb-accordion wptb-accordion2 wow fadeInUp">
                        <div class="wptb--item active">
                           <h6 class="wptb-item-title"><span>1) Academic Excellence:</span> <i class="plus bi bi-plus"></i> <i class="minus bi bi-dash"></i></h6>
                           <div class="wptb-item--content">
                              <p><b>i) Renowned Universities:</b> France boasts prestigious universities like Trinity College Dublin and University College Cork, consistently ranking high in global university rankings. These institutions offer high-quality education, experienced faculty, and strong research opportunities.</p>
                              <p><b>ii) Globally Recognized Degrees:</b> A degree from an Irish university is recognized and respected worldwide, potentially opening doors to promising career opportunities internationally.</p>
                           </div>
                        </div>

                        <div class="wptb--item">
                           <h6 class="wptb-item-title"><span>2) Affordability:</span> <i class="plus bi bi-plus"></i> <i class="minus bi bi-dash"></i></h6>
                           <div class="wptb-item--content">
                              <p><b>i) Relatively Lower Costs: </b> Compared to other popular study abroad destinations like the USA or UK, France offers generally lower tuition fees and living expenses. This can make studying in Ireland a more financially viable option for many students.</p>
                              <p><b>ii) Scholarship Opportunities: </b> Several scholarships are available for international students, further reducing the financial burden of studying in France.</p>
                           </div>
                        </div>

                        <div class="wptb--item">
                           <h6 class="wptb-item-title"><span>3) Work and Immigration Options:</span> <i class="plus bi bi-plus"></i> <i class="minus bi bi-dash"></i></h6>
                           <div class="wptb-item--content">
                              <p><b>i) Part-time Work Opportunities: </b> International students in France are allowed to work part-time while studying, allowing them to gain work experience and potentially contribute to their living expenses.</p>
                              <p><b>ii) Post-study Work Visa: </b> After graduation, international students may be eligible for a post-study work visa, allowing them to gain valuable work experience in France and potentially improve employability or explore immigration options.</p>
                           </div>
                        </div>

                        <div class="wptb--item">
                           <h6 class="wptb-item-title"><span>4) Cultural Experience and Quality of Life:</span> <i class="plus bi bi-plus"></i> <i class="minus bi bi-dash"></i></h6>
                           <div class="wptb-item--content">
                              <p><b>i) Welcoming and Friendly Culture: </b> France is known for its friendly and welcoming population, making it easier for international students to feel comfortable and integrate into the local community.</p>
                              <p><b>ii) Rich History and Culture: </b> France boasts a rich history and vibrant culture, offering students the opportunity to immerse themselves in its unique traditions and heritage.</p>
                              <p><b>iii) High Quality of Life: </b> France consistently ranks high in terms of quality of life, offering a safe and secure environment with good healthcare, infrastructure, and a healthy work-life balance.</p>
                           </div>
                        </div>

                        <div class="wptb--item">
                           <h6 class="wptb-item-title"><span>5) Additional Advantages:</span> <i class="plus bi bi-plus"></i> <i class="minus bi bi-dash"></i></h6>
                           <div class="wptb-item--content">
                              <p><b>i) English-speaking Country: </b> As an English-speaking country, France eliminates the language barrier for students who are not native English speakers.</p>
                              <p><b>ii) Focus on Innovation and Technology: </b> Irish universities are known for their strong focus on innovation and technology, offering students the opportunity to develop skills highly sought after in the global job market.</p>
                              <p><b>iii) Beautiful Scenery and Outdoor Activities: </b> France is known for its stunning natural beauty, offering students opportunities for outdoor activities and exploration.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="blog-details-inner" data-country="gr" style="display:none;">
               <div class="post-content">
                  <div class="post-header mt-0">
                     <h1 class="post-title">Germany</h1>
                  </div>
                  <div class="fulltext">
                     <p>Germany is a Western European country with a landscape of forests, rivers, mountain ranges and North Sea beaches. It has over 2 millennia of history. Berlin, its capital, is home to art and nightlife scenes, the Brandenburg Gate and many sites relating to WWII :</p>
                     <div class="wptb-accordion wptb-accordion2 wow fadeInUp">
                        <div class="wptb--item active">
                           <h6 class="wptb-item-title"><span>1) Academic Excellence:</span> <i class="plus bi bi-plus"></i> <i class="minus bi bi-dash"></i></h6>
                           <div class="wptb-item--content">
                              <p><b>i) Renowned Universities:</b> Germany boasts prestigious universities like Trinity College Dublin and University College Cork, consistently ranking high in global university rankings. These institutions offer high-quality education, experienced faculty, and strong research opportunities.</p>
                              <p><b>ii) Globally Recognized Degrees:</b> A degree from an Irish university is recognized and respected worldwide, potentially opening doors to promising career opportunities internationally.</p>
                           </div>
                        </div>

                        <div class="wptb--item">
                           <h6 class="wptb-item-title"><span>2) Affordability:</span> <i class="plus bi bi-plus"></i> <i class="minus bi bi-dash"></i></h6>
                           <div class="wptb-item--content">
                              <p><b>i) Relatively Lower Costs: </b> Compared to other popular study abroad destinations like the USA or UK, Germany offers generally lower tuition fees and living expenses. This can make studying in Ireland a more financially viable option for many students.</p>
                              <p><b>ii) Scholarship Opportunities: </b> Several scholarships are available for international students, further reducing the financial burden of studying in Germany.</p>
                           </div>
                        </div>

                        <div class="wptb--item">
                           <h6 class="wptb-item-title"><span>3) Work and Immigration Options:</span> <i class="plus bi bi-plus"></i> <i class="minus bi bi-dash"></i></h6>
                           <div class="wptb-item--content">
                              <p><b>i) Part-time Work Opportunities: </b> International students in Germany are allowed to work part-time while studying, allowing them to gain work experience and potentially contribute to their living expenses.</p>
                              <p><b>ii) Post-study Work Visa: </b> After graduation, international students may be eligible for a post-study work visa, allowing them to gain valuable work experience in France and potentially improve employability or explore immigration options.</p>
                           </div>
                        </div>

                        <div class="wptb--item">
                           <h6 class="wptb-item-title"><span>4) Cultural Experience and Quality of Life:</span> <i class="plus bi bi-plus"></i> <i class="minus bi bi-dash"></i></h6>
                           <div class="wptb-item--content">
                              <p><b>i) Welcoming and Friendly Culture: </b> Germany is known for its friendly and welcoming population, making it easier for international students to feel comfortable and integrate into the local community.</p>
                              <p><b>ii) Rich History and Culture: </b> Germany boasts a rich history and vibrant culture, offering students the opportunity to immerse themselves in its unique traditions and heritage.</p>
                              <p><b>iii) High Quality of Life: </b> Germany consistently ranks high in terms of quality of life, offering a safe and secure environment with good healthcare, infrastructure, and a healthy work-life balance.</p>
                           </div>
                        </div>

                        <div class="wptb--item">
                           <h6 class="wptb-item-title"><span>5) Additional Advantages:</span> <i class="plus bi bi-plus"></i> <i class="minus bi bi-dash"></i></h6>
                           <div class="wptb-item--content">
                              <p><b>i) English-speaking Country: </b> As an English-speaking country, Germany eliminates the language barrier for students who are not native English speakers.</p>
                              <p><b>ii) Focus on Innovation and Technology: </b> Irish universities are known for their strong focus on innovation and technology, offering students the opportunity to develop skills highly sought after in the global job market.</p>
                              <p><b>iii) Beautiful Scenery and Outdoor Activities: </b> Germany is known for its stunning natural beauty, offering students opportunities for outdoor activities and exploration.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
       </div>
      </div>
   </div>
</section>
<!-- End Details Content -->

@endsection