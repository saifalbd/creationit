<x-frontend-layout>


    <section class="team team-archive section-bg py-2 pb-5">
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-12">
                    @if($message = session()->get('success'))
                    <div class="alert alert-success mt-2">{{$message}}</div>
                    @endif
                </div>
            </div>
            <div class="row">
              <div class="col-sm-12 col-md-8 mx-auto bg-white py-3">
                @if($status->status == 'active')
                <div class="form-heding">
                    <h3 class="free-seminar mt-3">Join Free Seminar</h3> 
                </div>
                    <form method="post" action="{{route('seminar.store')}}" enctype="multipart/form-data"  style="background: #white; padding: 30px;">
                        @csrf
                        <div class="form-group">
                            <label for="">Name of Student</label>
                            <input type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{old('name')}}">
                        @error('name')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Present Address</label>
                            <input type="text" class="form-control form-control-lg @error('present_address') is-invalid @enderror" name="present_address" value="{{old('present_address')}}">
                            @error('present_address')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="">Valid Mobile Number</label>
                            <input type="number" class="form-control form-control-lg @error('number') is-invalid @enderror" name="mobile" value="{{old('mobile')}}">
                        @error('mobile')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Valid Email or Social Link</label>
                            <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{old('email')}}">
                        @error('email')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="form-group">
                        <label for="">Do you Know basic computer? </label>
                            <div class="flext">
                                <p>
                                <input type="radio" id="test1" value="yes" name="basic" checked>
                                <label for="test1">Yes</label>
                                </p>
                                <p>
                                <input type="radio" id="test2" value="no" name="basic">
                                <label for="test2">No</label>
                                </p>
                                
                            </div>
                            @error('basic')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Higher Educational Qualification </label>
                            <input type="text" class="form-control form-control-lg @error('education') is-invalid @enderror" name="education" value="{{old('education')}}">
                        @error('education')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Comment </label>
                            <textarea type="text" class="form-control form-control-lg @error('comment') is-invalid @enderror" name="comment" value="">{{old('comment')}}</textarea>
                        @error('comment')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="join-btn">Submit Application</button>
                        </div>
                    </form>
                </div>
                @else
                <div class="form-heding">
                    <h3 class="free-seminar mt-3">Seminar not Avaiable</h3> 
                </div>
                @endif
                       
              </div>
        </div>
    </section>
    


<style>
.free-seminar {
	background: #f48243;
	display: inline;
	padding: 5px 32px;
	border-radius: .5rem;
	color: white;
	font-weight: 600;
	font-size: 25px;
	font-family: "Poppins",serif !important;
}
.join-btn {
	background: #f48243;
	border: none;
	padding: 10px 20px;
	border-radius: .5rem;
	color: white;
	font-weight: bold;
	text-transform: uppercase;
	font-family: "Poppins";
	margin-top: 20px;
}

.form-heding {
	margin-top: 30px;
	margin-left: 25px;
	margin-bottom: 20px;
}

.form-group label {
	color: #777;
	font-family: "Poppins";
}

/* radio button */
.flext {
	display: flex;
}

[type="radio"]:checked,
[type="radio"]:not(:checked) {
    position: absolute;
    left: -9999px;
}
[type="radio"]:checked + label,
[type="radio"]:not(:checked) + label
{
    position: relative;
    padding-left: 28px;
    cursor: pointer;
    line-height: 20px;
    display: inline-block;
    color: #666;
}
[type="radio"]:checked + label::before, [type="radio"]:not(:checked) + label::before {
	content: '';
	position: absolute;
	left: 3px;
	top: 1px;
	width: 18px;
	height: 18px;
	border: 1px solid #ddd;
	border-radius: 100%;
	background: #fff;
}
[type="radio"]:checked + label::after, [type="radio"]:not(:checked) + label::after {
	content: '';
	width: 12px;
	height: 12px;
	background: #F87DA9;
	position: absolute;
	top: 4px;
	left: 6px;
	border-radius: 100%;
	-webkit-transition: all 0.2s ease;
	transition: all 0.2s ease;
}
[type="radio"]:not(:checked) + label:after {
    opacity: 0;
    -webkit-transform: scale(0);
    transform: scale(0);
}
[type="radio"]:checked + label:after {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
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
