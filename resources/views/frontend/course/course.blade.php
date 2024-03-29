<x-frontend-layout>
<!-- Services -->
<section class="services section-bg pb-5">
    <div class="container">
        <div class="row pt-5 mb-3">
            <div class="col-sm-12 col-md-12">

                <div class="section-title  style2 text-center" style="margin-bottom: 0;">
                    <div class="section-top" style="margin-top: 0;">
                        <h1><span>কোর্স সমূহ</span></h1>
                        
                    </div>
                     
                </div>

                <div>
                    <div class="section-title  style2 text-center mb-0">
                        <div class="section-top mt-0">
                            <h1>আমাদের সকল কোর্স সমূহ</h1>
                            <p style="font-size: 18px; margin-top:0;"> দেশ ও দেশের বাহিরে বর্তমানে যে ‍স্কিলগুলোর চাহিদা, সেসব দিয়ে সাজানো হয়েছে আমাদের কোর্স লিস্ট । 
                                এখন থেকে আপনাদের সুবিধামত অনলাইন বা অফলাইন কোর্সে এনরোল করতে পারেন ‍যে কোন সময় ।</p>
                        </div>
                         
                    </div>
                </div>

                <div class="course-heading-left">
                    <h4> </h4>
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
                        <li>Course Fee: {{$item->fee}}/- </li>
                         
                        <a class="btn btn-success btn-sm bizwheel-btn" style="margin-top: 9px; " href="{{route('frontend.admission')}}"><i class="fa fa-long-arrow-right"></i> Apply Now</a>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</section>
<!--/ End Services -->


<style>
.courser-heading-right p {
	font-family: "Tiro Bangla",serif !important;
}
</style>
</x-frontend-layout>
    