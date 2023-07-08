<x-frontend-layout>
<!-- Services -->
<section class="services section-bg pb-5">
    <div class="container">
        <div class="row pt-5 mb-3">
            <div class="col-sm-12 col-md-3 courser-heading-line">
                <div class="course-heading-left">
                    <h4>আমাদের সকল কোর্স সমূহ </h4>
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
            <div class="col-sm-6 col-md-4 col-lg-4 my-3">
                <div class="single-portfolio">
                    <div class="portfolio-head overlay">
                        <img src="/assets/img/{{$item->avatar->path}}" style="height: 220px; " alt="#">
                        <a class="more" href="{{route("single.course",$item->id)}}"><i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="portfolio-content">
                        <h4><a href="{{route("single.course",$item->id)}}">{{$item->name}}</a></h4>
                        <li>Duration: {{$item->duration}}</li>
                        <li>Coruse Fee: {{$item->fee}}/-</li>
                         
                        <a class="btn btn-success btn-sm bizwheel-btn" style="margin-top: 9px; " href="{{route('frontend.admission')}}"><i class="fa fa-long-arrow-right"></i> Apply Now</a>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</section>
<!--/ End Services -->
</x-frontend-layout>
    