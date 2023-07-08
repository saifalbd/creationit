<x-frontend-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
<section class="freelancing" style="position: relative">
    <div class="container-fluid bg">
        <div class="row pd">
            <div class="col-sm-12 col-md-6">
                <div class="video-banner">
                <h1>ফ্রিল্যান্সিং</h1>
                <p>ফ্রিল্যান্সিং-এ ক্যারিয়ার গড়তে চাচ্ছেন? ফ্রিল্যান্সার হিসেবে গড়ে তুলতে
                    ক্রিয়েশন আইটি ইনস্টিটিউট ১০টিরও বেশি সেক্টরে মানুষকে দক্ষ করে তুলছে।
                </p>
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
                <h1>ফ্রিল্যান্স মার্কেটপ্লেস</h1>
                <p>ফ্রিল্যান্স মার্কেটপ্লেস

                    ফ্রিল্যান্স কাজের জন্য রয়েছে বিভিন্ন মার্কেটপ্লেস। আন্তর্জাতিক এ
                    সব মার্কেটপ্লেসের প্রত্যেকটি ভিন্ন ভিন্ন নিয়ম মেনে চললেও কাজের 
                    সুবিধা রয়েছে সবখানেই।
                </p>
                <div class="freelance-market d-flex">
                    <div class="market-item">
                        <img src="/frontend/img/market.png" alt="">
                    </div>
                    <div class="market-item">
                        <img src="/frontend/img/market-2.png" alt="">
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

    <div class="other-section bg">
        <!-- Single Testimonial -->
        <div class="container pt-md-5 custom-design">
            <div class="row carousel-main">
                @foreach($freelanings as $item)
                <div class="col-sm-12 col-md-4 slide-item m-0 p-0">
                    <img src="/{{$item->photo}}" alt="">
                    <div class="item-text">
                        <h4>{{$item->page_title}}</h4>
                        <div class="see-btn"><a href="{{route('single.freelancing',$item->id)}}" style="">Read more</a></div>
                    </div>
                </div>
                @endforeach
            </div>   
        </div>
    </div>


<style>
.other-section {
	/* background: #54595F; */
	position: relative;
    display: grid;
}

.slide-item {
    padding-left: 50px;
}
.slide-item img {
	width: 91% !important;
	border-radius: .5rem;
	margin: 0px 7px;
	height: ;
}
.item-text {
	padding: 20px;
	text-align: center;
}
.item-text h4 {
	font-family: "Poppins",serif !important;
    text-transform: capitalize;
    font-size: 22px;
}

.item-text p {
	color: #606060;
	font-family: "Poppins",serif;
	font-size: 15px;
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
	background: white;
	color: orange;
    border: none
}

.slick-active button {
	background: orange !important;
	color: white !important;
	border-radius: 100px !important;
}

.slick-disabled {
  display: none;
}


@media(max-width:668px){
.slide-item img {
	height: auto;
	max-width: 90%;
}

.slide-item {
	height: auto;
}

.bg {
	background: #F4F9FC;
	padding: 20px !important;
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
    
</style>


<section>
    <div class="container-fluid bg">
        <div class="row pd">
            <div class="col-sm-12"><h2 class="freelancing-title">ফ্রিল্যান্সিং যাদের জন্য</h2></div>
        </div>
        <div class="row custom_item pd">
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
	padding: 50px 40px;
}
.pd {
	padding: 20px;
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
	margin: 20px 5px;
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

.freelance-content {
	padding-left: 30px;
}





/******************** tab to mobile *********************/
@media(max-width:768px){
.bg {
	background: #F4F9FC;
	padding: 20px 40px;
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
    margin-left: -20px !important;
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

.pd {
	padding: 10px 0px;
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
