
    <x-frontend-layout>
<style>
    .custom-row {
        display: flex;
    }
    .custom-item {
        width: 40%;
    }
    
    .row.testimonial-slider {
        background: #fff7f6 !important;
        padding: 20px;
    }
    
    .testimonial-inner .single-slider {
        box-shadow: 0 0 0px #10101036;
    
    }
    
    .ahive-img img {
        height: 250px;
        width: 95% !important;
    }
    .achive-content {
        text-align: center;
    }
    
    .achive-content h2,h4,h5,p{
        color: #666;
    }
    h2{
        text-transform: uppercase;
        font-weight: bold;
        font-size: 30px;
        color: #666;
    }
    .achive-content h4{
        font-weight: 600;
    }
        
    .achive-content h4 {
        margin: 0;
    }

.founer {
	margin-top: 100px;
	margin-right: 20px;
}
    
    
    
    /* responsive */
    @media(max-height:768px){
    
    .custom-item {
        width: 100%;
    }
    .ahive-img img {
        height: auto;
        width: 100% ;
    }
    
    .achive-content {
        margin-top: 20px;
    }
    
    }

    
    </style>
        <!-- About Us -->
        <section class="about-us section-space mt-3">
            <div class="container">
                @if($data == null)
                <h2>data not found</h2>
                @else

                <div class="row">
                    <div class="col-lg-4 offset-lg-1 col-md-5 col-12">
                        <!-- About Video -->
                        <div class="founer">
                            <img src="/{{$data[0]->photo}}" alt="#">
                        </div>
                        <!--/End About Video  -->
                    </div>
                    <div class="col-lg-7 col-md-7 col-12">
                        <div class="about-content section-title default text-left">
                            <div class="section-top">
                                <h1><b>{{$data[0]->page_title}}</b></h1>
                            </div>
                            <div class="section-bottom">
                                <div class="text">
                                        
                                    <p>
                                        {{$data[0]->description}}
                                    <p>
                                    </div>
                                
                            </div>
                            <div class="founder-info">
                                <img src="/frontend/img/signaur.png" alt="">
                                <h4>ওয়াসিম আহমেদ নিশান</h4>
                                <h5>ফাউন্ডার ও সিইও</h5>
                            </div>
                        </div>
                        
                    </div>
                </div>
                @endif
                
            </div>
        </section>	


         <!-- slider achivement -->
         <section class="testimonials section-space">
             <div class="testimonial-inner">
                 <div class="">
                     <!-- Single Testimonial -->
                     <div class="container">
                         <div class="row testimonial-slider">
                             <div class="col-sm-12 d-md-flex single-slider align-items-center justify-content-center">
                                 <div class="custom-item">
                                     <div class="ahive-img"><img src="frontend/img/slider-3.jpg" alt="#"></div>
                                 </div>
                                 <div class="custom-item">
                                     <div class="achive-content">
                                         <h2>Best design Award 2022</h2>
                                         <h5>From </h5>
                                         <h4>Mr.Abdul manan MP</h4>
                                         Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores, laboriosam odio!
                                         
                                     </div>
                                 </div>
                             </div>
                             <div class="col-sm-12 d-md-flex single-slider align-items-center justify-content-center">
                                 <div class="custom-item">
                                     <div class="ahive-img"><img src="frontend/img/slider-3.jpg" alt="#"></div>
                                 </div>
                                 <div class="custom-item">
                                     <div class="achive-content">
                                         <h2>Best design Award 2022</h2>
                                         <h5>From </h5>
                                         <h4>Mr.Abdul manan MP</h4>
                                         Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores, laboriosam odio!
                                         
                                     </div>
                                 </div>
                             </div>
                         </div>                                                                     
                     </div>
                 </div>
             </div>
         </section>
         <!--/ End achivement Slider -->


<section class="counterup">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Single Counterup -->
                <div class="single-counter">
                    <div class="icon"><i class="fa fa-book"></i></div>
                    <div class="conter-content">
                        <div class="counter-head">
                            <h3><b class="number">7</b><span></span></h3>
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
                            <h3><b class="number">7</b><span> </span></h3>
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
                            <h3><b class="number">122</b><span>+</span></h3>
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
                            <h3><b class="number">81</b><span>+</span></h3>
                        </div>
                        <p>Course Completed</p>
                    </div>
                </div>
                <!--/ End Single Counterup -->
            </div>
        </div>
    </div>
</section>

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
                <div class="course-item">
                    <div class="course-content">
                        <img src="/frontend/img/web.png" alt="">
                    </div>
                    <div class="course-title">
                        <h4>{{$item->name}}</h4>
                    </div>
                    <div class="course-fee">
                        <strong>কোর্স ফি ‍<span> {{$item->fee}} </span></strong>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</section>
<!--/ End Services -->


</x-frontend-layout>
