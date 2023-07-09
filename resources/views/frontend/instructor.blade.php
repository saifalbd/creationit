<x-frontend-layout>


    <section class="team team-archive section-bg section-space">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title  style2 text-center">
                        <div class="section-top">
                            <h1><b>আমাদের দক্ষ শিক্ষকরা </b> </h1> 
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
                                <li><a href="#"><i class="fa fa-facebook-official"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>	
                            </ul>	
                        </div>
                        <div class="t-content">
                            <!--div class="team-arrow">
                                <a><i class="fa fa-angle-up"></i></a>
                            </div-->
                            <div class="content-inner">
                                <h4 class="name"><a href="#">Wasim Ahmed Nishan</a></h4>
                                <span class="designation">Founder & CEO</span>
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
