<x-frontend-layout>
    <section class="call-action">
        <div class="container">
        
        
            <div class="row">
                <div class="col-12">
                    <div class="section-title  style2 text-center">
                        <div class="section-top">
                            <h1><span>Student </span><b>Verification</b></h1><h4></h4>
                        </div>
                         
                    </div>
                </div>
            </div>
            @if($message = Session::get('danger'))
                    <div class="alert alert-danger mt-2">{{$message}}</div>
                @endif
            <div class="row mt-5 mb-5">
                <div class="col-sm-12 col-md-6 mx-auto">
                      
                    <form  action="{{route('check.verification')}}" method="post">
                        @csrf
                        <input type="text" required name="mobile" value="" class="form-control" placeholder="check verification via mobile or name or email"/> <br> 
                        <button type="submit" class="btn btn-info" ><i class="fa fa-search"></i> Search </button>
                    </form>
                                         
                </div>
            </div>
             <!-- Search Form -->
            <!--/ End Search Form -->
        </div>
    </section> 
    </x-frontend-layout>
    