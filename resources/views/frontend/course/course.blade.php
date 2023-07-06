<x-frontend-layout>
<!-- Services -->
<section class="services section-bg section-space">
    <div class="container">
        <div class="row mt-5 mb-3">
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
    