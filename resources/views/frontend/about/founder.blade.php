
    <x-frontend-layout>
<style>
    .custom-row {
        display: flex;
        margin-bottom: 30px;
    }

.testimonial-inner {

	padding-bottom: 100px;
}

    .custom-item {
	width: 43%;
}
.row.testimonial-slider {
	padding: 20px;
	background: #f2f2f2;
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
    .achive-content h2 {
	font-size: 24px;
	color: #606060;
}

h2{
    text-transform: uppercase;
    font-weight: bold;
    font-size: 30px;
    color: #666;
    font-family: "Poppins", serif;
}
.achive-content h4{
    font-weight: 600;
}
	
.achive-content h4 {
    font-size: 20px;
}



.founer {
	margin-right: 20px;
	box-shadow: 1px 1px 2px 3px rgba(0,0,0,.1);
	border-radius: 2px;
	margin-top: 20px;
	padding: 5px;
}

.founer img {
	height: 500px;
}
    
/* responsive */
@media(max-width:768px){

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

.custom-item {
    width: 100%;
    display: block;
}

.achive-content h2 {
font-size: 20px;
}


.achive-content h4 {
	font-size: 18px;
	margin-bottom: 10px;
}





}

    
    </style>
        <!-- About Us -->
        <section class="about-us" style="background: #F4F9FC">
            <div class="container">
                @if($data == null)
                <h2>data not found</h2>
                @else

                <div class="row">
                    <div class="col-lg-5 col-md-5 col-12">
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
                                        {!! $data[0]->description !!}
                                    <p>
                                    </div>
                                
                            </div>
                            <div class="founder-info">
                                <img src="/{{$data[0]->file}}" alt="">
                                {{-- <h4>ওয়াসিম আহমেদ নিশান</h4>
                                <h5>ফাউন্ডার ও সিইও</h5> --}}
                                <h4>{{$data[0]->meta_desc}}</h4>
                                <h5>{{$data[0]->keywords}}</h5>

                            </div>
                        </div>
                        
                    </div>
                </div>
                @endif
                
            </div>
        </section>	


         <!-- slider achivement -->
         <section class="testimonials mt-3">
             <div class="testimonial-inner bg" style="background: #F4F9FC">
                 <div class="">
                     <!-- Single Testimonial -->
                     <div class="container">
                         <div class="row testimonial-slider">
                            @foreach ($achives as $item)
                                
                            
                             <div class="col-sm-12 mx-0 px-0 d-md-flex single-slider align-items-center justify-content-center">
                                 <div class="custom-item">
                                     <div class="ahive-img"><img src="{{$item->photo}}" alt="#"></div>
                                 </div>
                                 <div class="custom-item">
                                     <div class="achive-content">
                                         <h2>{{$item->title}}</h2>
                                         <h5>From </h5>
                                         <h4>{{$item->sub_title}}</h4>
                                        <P>{{$item->description}}</P>
                                     </div>
                                 </div>
                             </div>
                             @endforeach
                         </div>                                                                     
                     </div>
                 </div>
             </div>
         </section>
         <!--/ End achivement Slider -->


<section class="counterup section-space">
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



</x-frontend-layout>
