<x-frontend-layout>


    <section class="team team-archive section-bg py-2 pb-5">
        <div class="container">
            <div class="row">
					<div class="col-12">
						<div class="section-title  style2 text-center">
							<div class="section-top">
								<h1><span>আমাদের প্রশিক্ষক</span><b>আমাদের দক্ষ প্রশিক্ষক </b></h1>
                                <h4>আমাদের দক্ষ এবং অভিজ্ঞ প্রশিক্ষকদের সঠিক প্রশিক্ষণে
                                    স্কিল অর্জন করুন । </h4>
							</div>
							 
						</div>
					</div>
				</div>
            <div class="row custom-grid">
            @foreach ($data as  $item)
                         
                    
                <div class="col-md-4 col-lg-3">
                    <!-- Single Team -->
                    <div class="single-team">
                        <div class="team-head">
                            <img src="/assets/img/{{$item->avatar->path}}" alt="#">
                            <ul class="team-social">
                                <li><a target="_blank" href="{{$item->facebook}}"><i class="fab fa-facebook"></i></a></li>
                                <li><a target="_blank" href="{{$item->twitter}}"><i class="fab fa-twitter-square"></i></a></li>
                                <li><a target="_blank" href="{{$item->linkedin}}"><i class="fab fa-linkedin"></i></a></li>
                            </ul>	
                        </div>
                        <div class="t-content">
                            <!--div class="team-arrow">
                                <a><i class="fa fa-angle-up"></i></a>
                            </div-->
                            <div class="content-inner">
                                <h4 class="name"><a href="#">{{$item->name}}</a></h4>
                                <span class="designation">{{$item->designation}}</span>
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
.section-top h1 {
	font-size: 30px;
}

.single-team .t-content .name a {
	font-size: 18px;
}


.section-top h4 {
	font-size: 18px;
	margin-top: 10px;
}

.content-inner h4, span {
	font-family: "poppins",serf !important;
}

.content-inner h4 a{
    font-family: "poppins",serf !important;
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
