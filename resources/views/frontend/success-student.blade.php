<x-frontend-layout>
    <section class="team team-archive section-bg section-space">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title  style2 text-center">
                        <div class="section-top">
                            <h1><b>আমাদের সফল ‍স্টুডেন্টস </b></h1> <h4> আমদের প্রফেসনার কোর্স সম্পূর্ন করে ছা্ত্রছাত্রীরা বিভিন্ন প্রফেশনে সফলতা অর্জন করেছে ।</h4>
                        </div>
                         
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($data as $item)
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Team -->
                    <div class="single-team">
                        <div class="team-head">
                            <img src="/{{$item->photo}}" alt="#">
                        </div>
                        <div class="t-content">
                            <!--div class="team-arrow">
                                <a><i class="fa fa-angle-up"></i></a>
                            </div-->
                            <div class="content-inner">
                                <h4 class="name"><a href="#">{{$item->name}}</a></h4>
                                <h5 class="">Course: <a href="#">{{$item->course}}</a></h5>
                                <span class="designation">Profession: {{$item->designation}}</span>
                                
                            </div>
                        </div>
                    </div>
                    <!--/ End Single Team -->
                </div> 
                @endforeach
             
              </div>
        </div>
    </section>


</x-frontend-layout>