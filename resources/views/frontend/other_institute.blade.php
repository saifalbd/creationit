<x-frontend-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
.other-section {
	background: #54595F;
	position: relative;
}

.slide-item {
	height: 350px;
    padding-left: 50px;
}

.slide-item img {
	height: 350px;
	max-width: 100%;
	border-radius: .5rem;
	margin: 0px 7px;
}

.slick-dots {
	display: flex;
	justify-content: center;
	align-items: center;
	gap: 10px;
	margin-top: 20px;
}

.slick-prev.slick-arrow.slick-disabled {
	display: none !important;
}
.slick-prev.slick-arrow {
	display: none !important;
}

.slick-next.slick-arrow {
	display: none !important;
}

.slick-dots li button {
	background: ;
	width: 25px;
	height: 25px;
	border-radius: 100px;
	background: orange;
	color: white;
    border: none
}

.slick-active button {
	background: white !important;
	color: orange !important;
	border-radius: 100px !important;
}

.slick-disabled {
  display: none;
}


@media(max-width:668px){
.slide-item img {
	height: 250px;
	max-width: 90%;
}

.slide-item {
	height: 250px;
}



}


@media(max-width:480px){
.slide-item img {
    height: auto;
	width: 100%;
    max-width: 90%;
	margin: auto;
}

.slide-item {
	height: auto;
}


}

/* banner hro */
.media-content {
	text-align: left;
	margin-top: 80px;
    position: relative;
}

.media-text {
	margin-top: 50px;
}

.media-content strong {
	font-weight: bold;
	font-size: 19px;
	margin-top: ;
}

.media-text p {
	color: white;
}

.media-heading {
	margin-bottom: 25px;
}

.media-logo {
	position: absolute;
	top: 5%;
	left: 3%;
	width: 120px;
	background: white;
}


</style>
<!-- slider achivement -->
<section class="testimonials">
    <div class="testimonial-inner" style="background: #54595F;color:white;position: relative;">
        <div class="container py-5" style="position: relative">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="media-content">
                        <div class="media-heading">
                            <h2><i class="fas fa-check"></i>  গ্রাফিক ডিজাইন </h2>
                            <h2><i class="fas fa-check"></i>  ডিজিটাল প্রিন্টিং </h2>
                            <h2><i class="fas fa-check"></i>  প্রিন্ট আইটেম </h2>
                            <h2><i class="fas fa-check"></i>  ওয়েবসাইট ডিজাইন </h2>
                        </div>
                        <strong>________________</strong>

                        <div class="media-text">
                            <h4>নিজস্ব মেশিন দ্বারা প্রিন্টিং এর যাবতীয় কাজ করা হয়।</h4>

                        <p>বাংলাদেশের যে কোন প্রান্ত থেকে ক্রেস্ট, মগ, গেঞ্জি ও  ডিজিটাল ব্যানার 
                            সহ প্রিন্টিং আইটেম অর্ডার করুন নিশ্চিন্তে। কুরিয়ার মাধ্যমে পৌছে যাবে আপনার ঠিকানায়।  
                            মৌলভীবাজার জেলা’র ভিতরে হলে অনলাইন অর্ডারের ক্ষেত্রে থাকছে ৫% ডিসকাউন্ট।</p>
                        </div>

                            <div class="right-bar mt-5">
                                <!-- Search Bar -->
                                <ul class="right-nav single-item">
                                    <li class=""> <a href="tel:+8801777560463" target="_blank" class="course-btn"> কর করুন  <i class="fas fa-phone"></i></a></li>
                                </ul>
                                <!--/ End Search Bar -->
                            </div>
                        
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <img src="/frontend/img/nisan.png" alt="">
                </div>
            </div>

            <div class="media-logo">
                <img src="/frontend/img/nisan.logo.svg" alt=""> 
            </div>
        </div>

        <div class="other-section">
            <!-- Single Testimonial -->
            <div class="container pt-5 custom-design">
                <div class="row mt-5 carousel-main">
                    <div class="col-sm-12 col-md-4 slide-item m-0 p-0">
                        <img src="/frontend/img/print.webp" alt="">
                    </div>
                    <div class="col-sm-6 col-md-4 slide-item m-0 p-0">
                        <img src="/frontend/img/print-2.jpg" alt="">
                    </div>
                    <div class="col-sm-12 col-md-4 slide-item m-0 p-0">
                        <img src="/frontend/img/print-3.jpg" alt="">
                    </div>
                    <div class="col-sm-12 col-md-4 slide-item m-0 p-0">
                        <img src="/frontend/img/print.webp" alt="">
                    </div>
                    <div class="col-sm-12 col-md-4 slide-item m-0 p-0">
                        <img src="/frontend/img/print-2.jpg" alt="">
                    </div>
                </div>   

                <div class="right-bar mt-5">
                    <!-- Search Bar -->
                    <ul class="right-nav single-item">
                        <li class=""> <a href="https://www.nishansmedia.com/" target="_blank" class="course-btn"> Visit Web Site</a></li>
                    </ul>
                    <!--/ End Search Bar -->
                </div>

            </div>
        </div>
    </div>
</section>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>


    $('.carousel-main').slick({
      dots: true,
      button:false,
      lazyLoad: 'ondemand',
      infinite: false,
      speed: 600,
      slidesToShow: 3,
      slidesToScroll: 3,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            infinite: true,
            dots: true
          }
        },
        
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
            
    </script>

</x-frontend-layout>