<x-frontend-layout>
    

<style>
    .testimonial-inner .single-slider {
     background: white;
     padding: 30px;
 } 
 
 
 .hero-agency .a-feature, .single-feature:hover, .single-feature.active, .pf-details .portfolio-meta, .contact-form-area {
     border-top-color: #f48243;
     transform: scale(1.03);
 }
 
 .courser-heading-right p {
     font-family: "Tiro Bangla",serif !important;
 }
 
 
 .section-top h1 {
     margin: 0px auto;
 }
 
 
 .testimonials {
     padding: 40px 0px;
 }
 
 
 
 
 
 </style>

<!-- Hero Slider -->
<section class="hero-slider style1 d-none d-md-block">
    <div class="home-slider">
        <!-- Single Slider -->
    @foreach ($data as $item)
      <div class="single-slider" style="background-image:url('/{{$item->photo}}')">
            <div class="container">
                <div class="row">
            

                    <div class="col-lg-7 col-md-8 col-12">
                        <div class="welcome-text"> 
                            <div class="hero-text"> 
                                 
                                <div class="p-text">
                                     
                                </div>
                                <div class="button d-none">
                                    <a href="{{route('frontend.contact')}}" class="bizwheel-btn theme-1 effect">Contact With Us</a>
                                    <a href="{{route('frontend.course')}}" class="bizwheel-btn theme-2 effect">Our Course</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
     @endforeach                
    </div>
</section>
<!--/ End Hero Slider -->


<!-- Features Area -->
<section class="features-area section-bg">
    <div class="container">

        <div class="row">               
             <!-- Single Feature -->                 
                <div class="col-sm-12 col-md-6">
                    <div class="section-title  style2 text-center">
                        <div class="section-top">
                            <h1><b>{{$hero->title}}</b></h1>
                            <p> {{$hero->description}}</p>
                        </div>
                    </div>
                    <div class="right-bar">
                        <!-- Search Bar -->
                        <ul class="right-nav">
                            <li class=""> <a href="{{route('frontend.course')}}" class="course-btn"> <img src="/frontend/img/book.png" alt="">  ব্রাউজ কোর্স </a></li>
                        </ul>
                        <!--/ End Search Bar -->
                    </div>	
                
                    <div class="row mt-1">
                        <div class="col-sm-2 col-md-2">
                            <div class="bd-tech-board-img">
                                <img src="/frontend/img/ict-logo.png" alt="">
                            </div>
                          </div>
                          <div class="col-sm-10 col-md-10">
                            <div class="bd-tech-board mt-2">
                                <p>বাংলাদেশ সরকার অনুমোদিত</p>
                                <p>কারিগরি আইসিটি বাংলাদেশ কর্তৃক পরিচালিত প্রতিষ্ঠান </p>
                            </div>
                          </div> 
                    </div>

                    <!--/ End Right Bar -->
                </div><!--/ End Single Feature --><!-- Single Feature -->                 
                 <div class=" col-sm-12 col-md-6">
                     <div class="intro-feature">
                         <img src="/{{$hero->photo}}" alt="">
                     </div>
                 </div><!--/ End Single Feature -->
        </div>

        
        
    </div>
</section>
<!--/ End Features Area -->



{{-- !-- c Area --> --}}
    <section class="features-area section-bg">
        <div class="container">
            <div class="row">
                                            
                <div class="col-lg-3 col-md-6 col-12 d-grid">
                    <!-- Single Feature -->
                    <div class="single-feature feature-font">
                        <div class="icon-head"><img  src="/frontend/img/home-01.png" style="height: 150px;" alt="#"></div>
                        <h4><a href="{{route('about.us',1)}}">About Us</a></h4>
                        <p>
                        We offer a wide range of IT programs designed to empower individuals with the latest
                            professional skills and knowledge.

                        </p>
                        <div class="button">
                            <a href="{{route('about.us',1)}}" class="bizwheel-btn"><i class="fas fa-arrow-circle-right"></i>Read More</a>
                        </div>
                    </div>
                    <!--/ End Single Feature -->
                </div>
                                                    
                <div class="col-lg-3 col-md-6 col-12 d-grid">
                    <!-- Single Feature -->
                    <div class="single-feature feature-font">
                        <div class="icon-head"><img  src="/frontend/img/home-02.png" style="height: 150px;" alt="#"></div>
                        <h4><a href="{{route('founder')}}">Our Founder</a></h4>
                        <p>
                            Our vision is to create a community of diverse and talented students, 
                            faculty and staff collaborating to build a brighter future.

                        </p>
                        <div class="button">
                            <a href="{{route('founder')}}" class="bizwheel-btn"><i class="fas fa-arrow-circle-right"></i>Read More</a>
                        </div>
                    </div>
                    <!--/ End Single Feature -->
                </div>
                        
                <div class="col-lg-3 col-md-6 col-12 d-grid">
                    <!-- Single Feature -->
                    <div class="single-feature feature-font">
                        <div class="icon-head"><img  src="/frontend/img/home-03.png" style="height: 150px;" alt="#"></div>
                        <h4><a href="{{route('course.freelancing')}}">Freelancing</a></h4>
                        <p>
                            We have successfully trained more than 6K students on various field related to IT in the last few year.
                                Half of the students are working and earning from freelancing market & various organizations.
                        </p>
                        <div class="button">
                            <a href="{{route('course.freelancing')}}" class="bizwheel-btn"><i class="fas fa-arrow-circle-right"></i>Read More</a>
                        </div>
                    </div>
                    <!--/ End Single Feature -->
                </div>
                <div class="col-lg-3 col-md-6 col-12 d-grid">
                    <!-- Single Feature -->
                    <div class="single-feature feature-font">
                        <div class="icon-head"><img  src="/frontend/img/home-04.png" style="height: 150px;" alt="#"></div>
                        <h4><a href="{{route('success.student')}}">successful student</a></h4>
                        <p> 
                            Our institute's successful students redefine possibilities, achieving 
                            emarkable feats in the tech industry and making us proud every step of the way.
                        </p>
                        <div class="button">
                            <a href="{{route('success.student')}}" class="bizwheel-btn"><i class="fas fa-arrow-circle-right"></i>Read More</a>
                        </div>
                    </div>
                    <!--/ End Single Feature -->
                </div>
                                                        
                    
            </div>
        </div>
    </section>
<!--/ End Features Area -->

{{-- contact banner --}}
<section class="call-action overlay" "="">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-12">
                <div class="call-inner">
                    <h2>Contact With Us</h2>
                    <p>Contact us for any information related to the course</p>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="button">
                    <a href="{{route('frontend.contact')}}" class="bizwheel-btn">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>
 {{-- end contact banner --}}

<!-- course -->
<section class="services section-bg py-5 pt-2">
    <div class="container">
        <div class="row mb-3">
            <div class="col-sm-12 col-md-3 courser-heading-line">
                <div class="course-heading-left">
                    <h4>আমাদের রানিং কোর্স সমূহ  </h4>
                </div>
              </div>
              <div class="col-sm-12 col-md-8">
                <div class="courser-heading-right">
                    <p>
                        দেশ ও দেশের বাহিরে বর্তমানে যে ‍স্কিলগুলোর চাহিদা, সেসব দিয়ে সাজানো হয়েছে আমাদের কোর্স লিস্ট । 
                        এখন থেকে আপনাদের সুবিধামত অনলাইন বা অফলাইন কোর্সে এনরোল করতে পারেন ‍যে কোন সময় ।
                    </p>
                </div>
              </div> 
        </div>
        <div class="row">
            @foreach($courses as $item)
                <div class="col-sm-6 col-md-4 col-lg-4 my-3">
                    <div class="single-portfolio">
                        <div class="portfolio-head overlay">
                            <img src="/assets/img/{{$item->avatar->path}}" style="height: 220px; " alt="#">
                            <a class="more" href="{{route("single.course",$item->id)}}"><i class="fas fa-arrow-right"></i></a>
                        </div>
                        <div class="portfolio-content">
                            <h4><a href="{{route("single.course",$item->id)}}">{{$item->name}}</a></h4>
                            <li>Duration: {{$item->duration}} Months</li>
                            <li>Course Fee: {{$item->fee}} Taka</li>
                             
                            <a class="btn btn-success btn-sm bizwheel-btn" style="margin-top: 9px; " href="{{route('frontend.admission')}}"><i class="fa fa-long-arrow-right"></i> Apply Now</a>
                        </div>
                    </div>
                </div>
            @endforeach
            
        </div>
    </div>
</section>
<!--/ End course -->

<section class="counterup">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Single Counterup -->
                <div class="single-counter">
                    <div class="icon"><i class="fa fa-book"></i></div>
                    <div class="conter-content">
                        <div class="counter-head">
                            <h3><b class="number">{{$courses->count()}}</b><span></span></h3>
                        </div>
                        <p> Current Course</p>
                    </div>
                </div>
                <!--/ End Single Counterup -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Single Counterup -->
                <div class="single-counter">
                    <div class="icon"><i class="fa fa-user"></i></div>
                    <div class="conter-content">
                        <div class="counter-head">
                            <h3><b class="number">{{$instructor->count()}}</b><span> </span></h3>
                        </div>
                        <p>Instructor</p>
                    </div>
                </div>
                <!--/ End Single Counterup -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Single Counterup -->
                <div class="single-counter">
                    <div class="icon"><i class="fa fa-users"></i></div>
                    <div class="conter-content">
                        <div class="counter-head">
                            <h3><b class="number">{{$students->count()}}</b><span>+</span></h3>
                        </div>
                        <p>Current Student</p>
                    </div>
                </div>
                <!--/ End Single Counterup -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Single Counterup -->
                <div class="single-counter">
                    <div class="icon"><i class="fa fa-check-circle"></i></div>
                    <div class="conter-content">
                        <div class="counter-head">
                            <h3><b class="number">{{$completeStudents->count()}}</b><span>+</span></h3>
                        </div>
                        <p>Course Completed</p>
                    </div>
                </div>
                <!--/ End Single Counterup -->
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="testimonials" style="background-image:url('frontend/img/testimonial.png')">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-9 col-12">
                <div class="section-title default">
                    <div class="section-top">
                        <h1><b>Our Satisfied Students</b></h1>
                    </div>
                    <div class="section-bottom">
                        <div class="text"><p>Some of our Students and their review</p></div>
                    </div>
                </div>
                <div class="testimonial-inner">
                    <div class="testimonial-slider">
                        <!-- Single Testimonial -->
                        
                        @foreach($testimonials as $item)                            
                        <div class="single-slider">
                            <ul class="star-list">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <p>
                                <span style="\" color:"="" rgb(33,="" 37,="" 41);="" font-family:="" avenir,="" arial,="" helvetica;="" font-size:="" 16px;\"="">
                                    {!! $item->description !!}
                                </span>   </p>
                            <!-- Client Info -->
                            <div class="t-info">
                                <div class="t-left">
                                    <div class="client-head"><img src="{{$item->photo}}" alt="#"></div>
                                    <h2>
                                        {{$item->page_title}}
                                    <span>Student</span>
                                    </h2>
                                </div>
                                <div class="t-right">
                                    <div class="quote"><i class="fa fa-quote-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <!-- / End Single Testimonial -->
                        @endforeach

                        
                        
                                                                                            
                                                                                                 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Testimonials -->

</x-frontend-layout>
