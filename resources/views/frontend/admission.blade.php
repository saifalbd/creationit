<x-frontend-layout>
<!-- Breadcrumb -->
<div class="breadcrumbs" >
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <!-- Bread Menu -->
                    <div class="bread-menu">
                        <ul>
                            <li><a href="{{route('frontend')}}">Home <i class="fas fa-angle-right"></i></a> </li>
                            <li><a href="{{route('frontend.admission')}}"> Student Admission</a></li>
                        </ul>
                    </div>
                     
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / End Breadcrumb -->


<section class="call-action"  >
    <div class="container">
    
<form name="frmUser" method="post" action="{{route('pendingStore')}}" enctype="multipart/form-data"  style="background: #eeeeeea8;border: 1px solid #ccc; padding: 30px;">
 @csrf

 <x-error-alert></x-error-alert>
       <div class="row">
        <div class="form-group col-md-4">
            <label for="inputEmail4">Course</label>
            <select name="course_id" value="{{ old('course_id') }}"
                    class="form-control js-select2 @error('course_id') is_invalid @enderror">
                <option value="">---</option>
                @foreach(\App\Models\Course::all() as $course)
                    <option value="{{$course->id}}">{{$course->name}}</option>
                @endforeach


            </select>
            @error('course_id') <div class="invalid-feedback">{{$message}}}</div> @enderror
        </div>
                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Name</label>
                                <input type="text" class="form-control @error('name') is_invalid @enderror" required name="name"
                                       value="{{ old('name') }}">
                                @error('name') <div class="invalid-feedback">{{$message}}}</div> @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputpresent_address2">Father's/Husband Name</label>
                                <input type="text" class="form-control @error('father_name') is_invalid @enderror" required
                                       name="father_name" value="{{ old('father_name') }}">
                                @error('father_name') <div class="invalid-feedback">{{$message}}}</div> @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputpresent_address2">Mother's Name</label>
                                <input type="text" class="form-control @error('mother_name') is_invalid @enderror" name="mother_name"
                                       value="{{ old('mother_name') }}">
                                @error('mother_name') <div class="invalid-feedback">{{$message}}}</div> @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputpresent_address2">Gender</label>
                                <select class="form-control" name="gender" value="{{ old('gender') }}">
                                    <option value="Male"> Male </option>
                                    <option value="Female"> Female </option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputpresent_address2">Date of Birth</label>
                                <input type="date" class="form-control @error('date_of_birth') is_invalid @enderror" name="date_of_birth"
                                       value="{{ old('date_of_birth') }}">
                                @error('date_of_birth') <div class="invalid-feedback">{{$message}}}</div> @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputCity">Highest Educational Qualification</label>
                                <input type="text" class="form-control @error('education') is_invalid @enderror" name="education"
                                       value="{{ old('education') }}" placeholder="Ex: HSC with GPA 4.50">
                                @error('education') <div class="invalid-feedback">{{$message}}}</div> @enderror
                            </div>

                            <div class="form-group col-md-3">
                                <label for="inputCity">Occupation </label>
                                <select class="form-control @error('occupation') is_invalid @enderror" name="occupation"
                                        value="{{ old('occupation') }}">
                                    <option value="Student"> Student </option>
                                    <option value="Job"> Job </option>
                                    <option value="Bussiness"> Bussiness </option>
                                </select>
                                @error('occupation') <div class="invalid-feedback">{{$message}}}</div> @enderror
                            </div>

                            <div class="form-group col-md-3">
                                <label for="inputCity">Mobile</label>
                                <input type="number" class="form-control @error('mobile') is_invalid @enderror"  name="mobile"  value="{{ old('mobile') }}">
                                @error('mobile') <div class="invalid-feedback">{{$message}}}</div> @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCity">Guardian's Mobile</label>
                                <input type="number" class="form-control @error('guardian_mobile') is_invalid @enderror"
                                       name="guardian_mobile" value="{{ old('guardian_mobile') }}">
                                @error('guardian_mobile') <div class="invalid-feedback">{{$message}}}</div> @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCity">E-mail</label>
                                <input type="email" class="form-control @error('email') is_invalid @enderror" id="email" name="email"
                                       value="{{ old('email') }}">
                                @error('email') <div class="invalid-feedback">{{$message}}}</div> @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Photo (Maximum 50 KB) </label>
                                <input type="file" class="form-control" name="photo"
                                       value="{{ old('photo') }}">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputCity">Present Address</label>
                                <textarea class="form-control @error('present_address') is_invalid @enderror" name="present_address"
                                          value="{{ old('present_address') }}"> </textarea>
                                @error('present_address') <div class="invalid-feedback">{{$message}}}</div> @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputCity">Permanent Address</label>
                                <textarea class="form-control @error('permanent_address') is_invalid @enderror" name="permanent_address"
                                          value="{{ old('permanent_address') }}"> </textarea>
                                @error('permanent_address') <div class="invalid-feedback">{{$message}}}</div> @enderror
                            </div>


                        </div>
        <hr>
        
        <input type="submit" name="submit" value="Submit" id="register" class="bizwheel-btn">

        </form>
    </div>
</div>
</section>	


</x-frontend-layout>
