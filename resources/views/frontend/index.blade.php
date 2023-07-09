<x-frontend-layout>
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
                                    <a href="contact.php" class="bizwheel-btn theme-1 effect">Contact With Us</a>
                                    <a href="course.php" class="bizwheel-btn theme-2 effect">Our Course</a>
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
@if($hero)
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
                
                    <div class="row mt-5">
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
@endif
<!--/ End Features Area -->



		<section class="features-area section-bg">
			<div class="container">
				<div class="row">
												
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Feature -->
						<div class="single-feature">
							<div class="icon-head"><img  src="/frontend/img/targer-2.jpg" style="height: 150px;" alt="#"></div>
							<h4><a href="{{route('about.us',1)}}" target="_blank">About Us</a></h4>
							<p> <p>The Creation Institute of Technology is a leading provider of computer training in Graphic Design, Web Design, D</p>
							<div class="button">
								<a href="{{route('about.us',1)}}" class="bizwheel-btn" target="_blank"><i class="fas fa-arrow-circle-right"></i>Read More</a>
							</div>
						</div>
						<!--/ End Single Feature -->
					</div>
					 		 		  					
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Feature -->
						<div class="single-feature">
							<div class="icon-head"><img  src="/frontend/img/team.png" style="height: 150px;" alt="#"></div>
							<h4><a href="{{route('founder')}}" target="_blank">Our Founder</a></h4>
							<p> <p>The mission of the IT Institute is to provide students with the knowledge and skills necessary to become success</p>
							<div class="button">
								<a href="{{route('founder')}}" class="bizwheel-btn" target="_blank"><i class="fas fa-arrow-circle-right"></i>Read More</a>
							</div>
						</div>
						<!--/ End Single Feature -->
					</div>
 		  					
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Feature -->
						<div class="single-feature">
							<div class="icon-head"><img  src="/frontend/img/freelancing.jpeg" style="height: 150px;" alt="#"></div>
							<h4><a href="{{route('course.freelancing')}}" target="_blank">Freelancing</a></h4>
							<p> <p>Moulvibazar district is located in the Sylhet division of Bangladesh. It is known for its natural beauty and has</p>
							<div class="button">
								<a href="{{route('course.freelancing')}}" target="_blank" class="bizwheel-btn"><i class="fas fa-arrow-circle-right"></i>Read More</a>
							</div>
						</div>
						<!--/ End Single Feature -->
					</div>
                    <div class="col-lg-3 col-md-6 col-12">
						<!-- Single Feature -->
						<div class="single-feature">
							<div class="icon-head"><img  src="/frontend/img/targer-4.jpg" style="height: 150px;" alt="#"></div>
							<h4><a href="{{route('success.student')}}" target="_blank">successful student</a></h4>
							<p> <p> Regular practice of skills: We encourage students to practice work regularly. So at any time, in any need, we a</p>
							<div class="button">
								<a href="{{route('success.student')}}" class="bizwheel-btn" target="_blank"><i class="fas fa-arrow-circle-right"></i>Read More</a>
							</div>
						</div>
						<!--/ End Single Feature -->
					</div>
					 		 		  					 
					 
				</div>
			</div>
		</section>
<!--/ End Features Area -->


<!-- Services -->
<section class="services section-bg section-space">
    <div class="container">
        <div class="row mt-5 mb-3">
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
                <div class="col-sm-6 col-md-4 col-lg-3 my-3">
                    <a href="{{url('course-detail')}}/{{$item->id}}" style="text-decoration: none">
                        <div class="course-item">
                            <div class="course-content">
                                <img src="{{$item->avatar->url}}" alt="">
                            </div>
                            <div class="course-title">
                                <h4>{{$item->name}}</h4>
                            </div>
                            <div class="course-fee">
                                <strong>কোর্স ফি ‍<span> {{$item->fee}} </span></strong>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
            
        </div>
    </div>
</section>
<!--/ End Services -->
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
<section class="testimonials section-space" style="background-image:url('frontend/img/testimonial.png')">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-9 col-12">
                <div class="section-title default text-left">
                    <div class="section-top">
                        <h1><b>Our Satisfied Students</b></h1>
                    </div>
                    <div class="section-bottom">
                        <div class="text"><p>some of our Students and their review</p></div>
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
                                    {{$item->description}}
                                </span>   </p>
                            <!-- Client Info -->
                            <div class="t-info">
                                <div class="t-left">
                                    <div class="client-head"><img src="{{$item->photo}}" alt="#"></div>
                                    <h2>{{$item->name}}</h2>
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
