<style>
   .section-title h1 {
	font-size: 27px !important;
	line-height: 40px !important;
} 
</style>
    <x-frontend-layout>
        <!-- About Us -->
            <section class="about-us section-space">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 offset-lg-1 col-md-5 col-12">
                            <!-- About Video -->
                            <div class="modern-img-feature">
                                <img src="/{{$data->photo}}" alt="#">
                            </div>
                            <!--/End About Video  -->
                        </div>
                        <div class="col-lg-7 col-md-7 col-12">
                            <div class="about-content section-title default text-left">
                                <div class="section-top">
                                    <h1><b>{{$data->page_title}}</b></h1>
                                </div>
                                <div class="section-bottom">
                                    <div class="text">
                                         
                                        <p>
                                            {{$data->description}} 
                                        <p>
                                        </div>
                                 
                                </div>
                            </div>
                            
                         <hr>
                            <samp>
                            @if($data->file)
                            <a class="btn btn-link" href="/{{$data->file}}" >	 <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download Attachment	</a>	
                            @endif
    
                            </samp>
    
                        </div>
                    </div>
                    
                </div>
            </section>	
            <!--/ End About Us -->
    </x-frontend-layout>
