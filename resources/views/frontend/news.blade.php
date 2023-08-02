<x-frontend-layout>
<style>
.news-head.overlay img {
	height: 250px;
}






</style>
    <section class="team team-archive section-bg py-2 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title  style2 text-center">
                        <div class="section-top">
                            <h1><span>নিউজ ও ইভেন্ট</span><b>নিউজ ও ইভেন্ট
                            </b></h1>
                            <h4>প্রাতিষ্ঠানিক গুরুত্বপূর্ণ সকল নিউজ ও ইভেন্ট।
                            </h4>
                        </div>
                         
                    </div>
                </div>
            </div>

            <div class="row">
            @foreach($data as $item)
            <div class="col-lg-4 col-md-6 col-12 d-grid">
                    <!-- Single Blog -->
                    <div class="single-news ">
                        <div class="news-head overlay">
                            <img src="/{{$item->photo}}" alt="#">
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                <h4 class="news-title">{{$item->page_title}}</h4>
                                <a href="{{route('news.detail',$item->id)}}" class="more">Continue reading <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--/ End Single Blog -->
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    {{ $data->links('vendor.pagination.custom-pagination') }}

                </div>
            </div>


</section>
<style>
.single-news .news-title {
	line-height: 25px;
	font-size: 20px;
}
</style>
</x-frontend-layout>