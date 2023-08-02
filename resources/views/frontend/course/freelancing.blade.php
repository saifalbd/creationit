<x-frontend-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
<section class="freelancing bg pt-md-3" style="position: relative">
    <div class="container">
        <div class="row pd">
            <div class="col-sm-12 col-md-6">
                <div class="video-banner">
               <div class="bannar-title">
                <h1>ফ্রিল্যান্সিং</h1>
                <p>ফ্রিল্যান্সিং-এ ক্যারিয়ার গড়তে চাচ্ছেন? ফ্রিল্যান্সার হিসেবে গড়ে তুলতে
                    ক্রিয়েশন আইটি ইনস্টিটিউট ১০টিরও বেশি সেক্টরে মানুষকে দক্ষ করে তুলছে।
                </p>
               </div>
                <div class="video-thumnail">
                    <img src="/{{$data[0]->photo}}" alt="">
                    <span class="video-icon" id="video_icon">
                        <i class="fas fa-play"></i>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="freelance-content">
                <div class="freelan-title">
                    <h1>ফ্রিল্যান্স মার্কেটপ্লেস</h1>
                    <p>ফ্রিল্যান্স মার্কেটপ্লেস
    
                        ফ্রিল্যান্স কাজের জন্য রয়েছে বিভিন্ন মার্কেটপ্লেস। আন্তর্জাতিক এ
                        সব মার্কেটপ্লেসের প্রত্যেকটি ভিন্ন ভিন্ন নিয়ম মেনে চললেও কাজের 
                        সুবিধা রয়েছে সবখানেই।
                    </p>
                   </div>
                <div class="freelance-market d-flex">
                    <div class="market-item">
                        <img src="/frontend/img/market.png" alt="">
                    </div>
                    <div class="market-item">
                        <img src="/frontend/img/up-01.png" alt="">
                    </div>
                    <div class="market-item">
                        <img src="/frontend/img/market-3.png" alt="">
                    </div>
                    <div class="market-item">
                        <img src="/frontend/img/market-4.png" alt="">
                    </div>
                </div>
                <div class="freelance-market d-flex">
                    <div class="market-item">
                        <img src="/frontend/img/market-6.png" alt="">
                    </div>
                    <div class="market-item">
                        <img src="/frontend/img/market-7.png" alt="">
                    </div>
                    <div class="market-item">
                        <img src="/frontend/img/market-8.png" alt="">
                    </div>
                    <div class="market-item">
                        <img src="/frontend/img/market-9.png" alt="">
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="video-modal" id="video_content">
        <div class="video-content">
            <iframe class="modal-view" width="560" height="315" src="{{$data[0]->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <span class="video-close" id="video_close"><i class="fas fa-times-circle"></i> </span>
        </div>
    </div>

</section>

<!-- slider achivement -->
<section class="testimonials">
    <div class="testimonial-inner" style="color:white;position: relative;">
        <div class="other-section">
            <!-- Single Testimonial -->
            <div class="container pt-5 custom-design">
                <div class="row carousel-main">
                    @foreach ($freelanings as $item)
                    <div class="col-sm-12 col-md-4 slide-item m-0 p-0">
                        <img src="/{{$item->photo}}" alt="">
                        <h4><a href="{{route('single.freelancing',$item->id)}}">{{$item->page_title}}</a></h4>
                        <a href="{{route('single.freelancing',$item->id)}}">See more</a>
                    </div>
                    @endforeach
                </div>   
            </div>
        </div>
    </div>
</section>



<style>
.other-section {
	background: transparent;
	position: relative;
}

.slide-item {
    padding-left: 50px;
}

.slide-item h4{
    text-align: center;
	text-transform: capitalize;
	font-family: "Poppins",serif !important;
	margin-top: 22px;
	font-size: 22px;
}
.slide-item h4 a {
	color: #666;
    text-decoration: none
	
}

.slide-item img {
	width: 95%;
	border-radius: .5rem;
	margin: 0px 7px;
	height: 320px;
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




.slick-disabled {
  display: none;
}

.slick-slider {
	display: grid !important;
}

.other-section {
    padding-top: 50px;
}

.other-section {
	padding-top: 0px !important;
	padding-bottom: 40px;
}


@media(max-width:668px){
.slide-item img {
	width: 95%;
	height: 300px;
}
.testimonial-inner {
    padding-top: 0px;
}

.bg {
    padding: 0px;
}



.other-section {
    padding-top: 0px;
}


}


@media(max-width:480px){
.slide-item img {
    width: 95%;
	height: auto;
}

.slide-item {
	height: auto;
}


}
</style>


<section class="bg">
    <div class="container">
        <div class="row pd">
            <div class="col-sm-12"><h2 class="freelancing-title">ফ্রিল্যান্সিং যাদের জন্য</h2></div>
        </div>
        <div class="row custom_item">
            <div class="col-sm-6 col-md-4">
                <div class="profession-item">
                    <img src="/frontend/img/profession.png" alt="">
                    <h2>গৃহিণী</h2>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="profession-item">
                    <img src="/frontend/img/profession-2.png" alt="">
                    <h2>চাকুরী প্রত্যাশী</h2>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="profession-item">
                    <img src="/frontend/img/profession-3.png" alt="">
                    <h2>উদ্যোক্তা</h2>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="profession-item">
                    <img src="/frontend/img/profession-4.png" alt="">
                    <h2>ছাত্র-ছাত্রী</h2>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="profession-item">
                    <img src="/frontend/img/profession-5.png" alt="">
                    <h2>প্রবাসী</h2>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="profession-item">
                    <img src="/frontend/img/profession-7.png" alt="">
                    <h2>ফ্রিল্যান্সিং এ আগ্রহী</h2>
                </div>
            </div>
            

        </div>
    </div>

</section>





<script>
let videIcon = document.getElementById('video_icon');
let videoContent = document.getElementById('video_content');
let videoClose = document.getElementById('video_close');

videIcon.addEventListener('click', function(){
    videoContent.classList.add('active');
})


videoClose.addEventListener('click', function(){
    videoContent.classList.remove('active');
})

</script>
  
<style>



.video-modal {
	width: 100%;
	color: white;
	position: fixed;
	top: 0;
	left: 0;
	height: 100vh;
	z-index: 99999 !important;
    visibility: hidden;
    transform: scale(.6);
}

.video-modal::after {
	background: black;
	height: 100%;
	width: 100%;
	position: absolute;
	top: 0;
	left: 0;
	content: "";
	opacity: .8;
	z-index: -1;
}

.video-modal.active{
    visibility: visible;
    transform: scale(1);
    transition: .5s linear;
}

.video-content {
	width: 90%;
	margin: auto;
	position: relative;
}

.video-banner h1 {
	font-size: 30px;
}

.modal-view {
	width: 100%;
	height: 450px;
	box-shadow: 0px 0px 8px 8px rgba(230, 224, 224, 0.1);
	border: 1px solid #939393;
	border-radius: .5rem;
    margin-top: 100px;
}

.video-content span.video-close {
	position: absolute;
	top: 14%;
	color: red;
	font-size: 30px;
	cursor: pointer;
	z-index: 9999;
	overflow: ;
	left: ;
	right: -3%;
}

.bg {
	background: #F4F9FC;
	padding-top: 40px;
	padding-bottom: 50px;
}

.pd {
	padding-top: 40px;
}

.video-thumnail {
	position: relative;
    margin-top: 30px;
}

.video-thumnail img {
	width: 100%;
	box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
	border-radius: .5rem;
}

.video-icon i {
	position: absolute;
	top: 45%;
	color: red;
	background: white;
	left: 43%;
	height: 50px;
	width: 50px;
	line-height: 50px;
	text-align: center;
	border-radius: 100px;
	font-size: 19px;
	cursor: pointer;
}

.market-item {
	margin: 10px 5px;
	background: white;
	padding: 25px 5px;
	width: 25%;
	text-align: center;
	border-radius: .5rem;
	box-shadow: 0px 1px 1px #0000002e;
}

.profession-item {
	background: white;
	border-radius: 1rem;
	margin: 10px 0;
	text-align: center;
	padding-top: 50px;
	padding-bottom: 30px;
}

.profession-item h2 {
	margin-top: 20px;
	font-size: 25px;
	color: #939393;
}

.freelance-content h1 {
	font-size: 27px !important;
}






/******************** tab to mobile *********************/
@media(max-width:768px){
.bg {
	background: #F4F9FC;
	padding-top: 20px;
	padding-bottom: 40px;
}

.modal-view {
    margin-top: 20px !important;
}

.video-content span.video-close {
	top: 0%;
	right: -4%;
}

.freelance-content h1 {
	font-size: 35px;
	margin-top: 20px;
}

.video-banner {
	width: 100% !important;
}

.freelance-content {
	margin-top: 50px;
	margin-bottom: 20px;
}



.freelance-market {
	display: grid !important;
	grid-template-columns: repeat(2,50%);
	gap: 10px;
	width: 100%;
	overflow: hidden;
}

.market-item {
	width: 100% !important;
}

.profession-item h2 {
	margin-top: 15px;
	font-size: 20px;
}

.profession-item {
	background: white;
	border-radius: 1rem;
	margin: 10px 0;
	text-align: center;
	padding-top: 30px;
	padding-bottom: 21px;
}


.custom-design {
	padding-left: 40px;
	padding-right: 45px;
}
.pd {
	padding-top: 20px;
}



}


@media(max-width:578px){
.custom_item {
	display: grid !important;
	grid-template-columns: repeat(2,50%);
}

.profession-item {
	padding-top: 10px;
	padding-bottom: 9px;
}
.profession-item h2 {
	margin-top: 15px;
	font-size: 15px;
}


.freelancing-title {
	font-size: 25px;
}


}

/* small device */

@media(max-width:400px){
.custom_item {
	display: grid !important;
	grid-template-columns: repeat(1,100%);
}

.profession-item h2 {
	margin-top: 15px;
	font-size: 18px;
}

}


@media(max-width:300px){
.freelance-market {
	display: grid !important;
	grid-template-columns: repeat(1,100%);
	gap: 10px;
	width: 100%;
	overflow: hidden;
}


}

/* end responsive */





</style>



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
