<x-frontend-layout>
<style>
.news-head.overlay img {
	height: 250px;
}
</style>
    <section class="team team-archive section-bg py-2 pb-5">
        <div class="container">
            <div class="row">
            @foreach($data as $item)
            <div class="col-lg-4 col-md-6 col-12">
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

</section>
</x-frontend-layout>