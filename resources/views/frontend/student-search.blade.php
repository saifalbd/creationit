<x-frontend-layout>
    <section class="team team-archive section-bg section-space">
 

        <div class="container">
        
            <div class="row">
                <div class="col-12">
                    <div class="section-title  style2 text-center">
                        <div class="section-top">
                            <h4><b> ({{$data->count()}}) Result Appear by your Search </b></h4> 
                        </div>
                         
                    </div>
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
                                <h4 class="name"><span>{{$item->name}}</span></h4>
                                <h5 class=""><span>{{$item->course}}</span></h5>
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
</style>

</x-frontend-layout>