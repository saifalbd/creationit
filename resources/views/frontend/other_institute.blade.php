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
<!-- slider achivement -->
<section class="testimonials section-space">
    <div class="testimonial-inner">
        <div class="">
            <!-- Single Testimonial -->
            <div class="container">
                <div class="row mb-5">
                    <div class="co-sm-12">
                        <h2>Our Founder Achivement & Award</h2>
                    </div>
                </div>
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
</x-frontend-layout>