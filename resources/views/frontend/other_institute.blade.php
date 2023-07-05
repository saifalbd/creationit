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
<!-- slider achivement -->
<section class="testimonials">
    <div class="testimonial-inner">
        <div class="">
            <!-- Single Testimonial -->
            <div class="container">
                <div class="row p-5">
                    <div class="co-sm-12">
                        <h2>আমাদের অঙ্গ প্রতিষ্ঠান </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <img src="/frontend/img/partial_website_bannr.png" alt="">
                    </div>
                </div>
                
                <div class="row testimonial-slider">
                    @foreach ($institutes as $item )
                        
                    
                    <div class="col-sm-12 d-md-flex single-slider align-items-center justify-content-center">
                        <div class="custom-item">
                            <div class="ahive-img"><img src="{{$item->photo}}" alt="#"></div>
                        </div>
                        <div class="custom-item">
                            <div class="achive-content">
                                <h2>{{$item->title}}</h2>
                                <h4>{{$item->sub_title}}</h4>
                                <p>{{$item->description}}</p>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>      
                <div class="right-bar mt-5">
                    <!-- Search Bar -->
                    <ul class="right-nav">
                        <li class=""> <a href="https://www.nishansmedia.com/" target="_blank" class="course-btn"> Visit Web Site</a></li>
                    </ul>
                    <!--/ End Search Bar -->
                </div>

            </div>
        </div>
    </div>
</section>
<!--/ End achivement Slider -->
</x-frontend-layout>