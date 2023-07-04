<x-frontend-layout>
<section class="about-us section-space" style="position: relative">
    <div class="container my-5 bg">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="video-content">
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
                        <img src="/frontend/img/market-8.png" alt="">
                    </div>
                </div>
                <div class="freelance-market d-flex">
                    <div class="market-item">
                        <img src="/frontend/img/market-9.png" alt="">
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container bg my-5">
        <div class="row">
            <div class="col-sm-12"><h2>ফ্রিল্যান্সিং যাদের জন্য</h2></div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="profession-item">
                    <img src="/frontend/img/profession.png" alt="">
                    <h2>গৃহিণী</h2>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="profession-item">
                    <img src="/frontend/img/profession-2.png" alt="">
                    <h2>চাকুরী প্রত্যাশী</h2>
                </div>
            </div>

            <div class="col-sm-12 col-md-4">
                <div class="profession-item">
                    <img src="/frontend/img/profession-3.png" alt="">
                    <h2>উদ্যোক্তা</h2>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="profession-item">
                    <img src="/frontend/img/profession-4.png" alt="">
                    <h2>ছাত্র-ছাত্রী</h2>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="profession-item">
                    <img src="/frontend/img/profession-5.png" alt="">
                    <h2>প্রবাসী</h2>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="profession-item">
                    <img src="/frontend/img/profession-7.png" alt="">
                    <h2>ফ্রিল্যান্সিং এ আগ্রহী</h2>
                </div>
            </div>
            

        </div>
    </div>


    {{-- video modal --}}

<div class="video-modal" id="video_content">
    <div class="video-content">
        <iframe class="modal-view" width="560" height="315" src="{{$data[0]->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <span class="video-close" id="video_close"><i class="fas fa-times-circle"></i> </span>
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
	width: 80%;
	margin: auto;
	position: relative;
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

@media(max-width:768px){
.modal-view {
    margin-top: 20px !important;
}

.video-content span.video-close {
	top: 0%;
	right: 0%;
}

.freelance-content h1 {
	font-size: 35px;
	margin-top: 20px;
}



}




.bg {
	background: #fff7f6;
	padding: 50px 40px;
}
.video-thumnail {
	position: relative;
}
.video-thumnail img {
	width: 100%;
}

.video-icon i {
	padding: ;
	position: absolute;
	top: 50%;
	color: red;
	background: white;
	left: 50%;
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




</style>


</x-frontend-layout>