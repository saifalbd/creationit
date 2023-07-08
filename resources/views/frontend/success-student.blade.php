<x-frontend-layout>
    <section class="team team-archive section-bg py-2 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title  style2 text-center">
                        <div class="section-top">
                            <h1><span>সফল শিক্ষার্থী</span><b>আমাদের সফল শিক্ষার্থী </b></h1>
                            <h4>আমাদের যে সকল শিক্ষার্থীরা কাজ করছেন ফ্রিল্যান্সিং মার্কেটপ্লেসে ও বিভিন্ন প্রতিষ্ঠানে ।</h4>
                        </div>
                         
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <form action="{{route('student.search')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="search" placeholder="Search Student by name" class="form-control w-30">
                            <button type="submit" class="btn btn-primary mx-1">Search</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row custom-grid">
                @foreach($data as $item)
                <div class="col-lg-3 col-md-4">
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
                                <h4 class="name">{{$item->name}}</h4>
                                <span class="designation"> {{$item->designation}}</span>
                                
                            </div>
                        </div>
                    </div>
                    <!--/ End Single Team -->
                </div> 
                @endforeach
             
              </div>
        </div>
    </section>


<style>
.form-group {
    display: flex;
}

.section-top h4{
    font-size: 18px;
    margin-top: 10px;
}

.section-top h1 {
	font-size: 30px;
}

.content-inner h4 {
	font-size: 20px;
	text-transform: capitalize;
	font-family: "Poppins", serif !important;
}


@media(max-width:768px){
.section-top h4 {
	font-size: 15px;
}
.section-top h1{
    font-size: 22px !important;
    margin-top: 0px;
}

}

</style>

</x-frontend-layout>