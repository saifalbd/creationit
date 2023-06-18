<x-admin-layout>

    <main>
        <div class="container-fluid"><div class="mt-4 mb-3 page-title">
                <div class="row">
                    <div class="col-md-9 my-auto">
                        Admission  <i class="fas fa-angle-right"></i>      New Admission
                    </div>
                    <div class="col-md-3 text-right">
                        <a href="{{url('student')}}" class="btn btn-outline-primary"> <i class="fas fa-folder-open"></i> Admission List</a>
                    </div>
                </div>
            </div>
            <x-error-alert></x-error-alert>
            <form name="frmUser" method="post" action="{{route('student.update',['student'=>$student->id])}}" enctype="multipart/form-data" >
                @csrf
                @method('PUT')
                <div class="card mb-2">
                    <div class="card-header">
                        Student Information
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Name</label>
                                <input type="text" class="form-control @error('name') is_invalid @enderror" required name="name"
                                       value="{{ $student->name}}">
                                @error('name') <div class="invalid-feedback">{{$message}}}</div> @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputpresent_address2">Father's/Husband Name</label>
                                <input type="text" class="form-control @error('father_name') is_invalid @enderror" required
                                       name="father_name" value="{{ $student->father_name }}">
                                @error('father_name') <div class="invalid-feedback">{{$message}}}</div> @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputpresent_address2">Mother's Name</label>
                                <input type="text" class="form-control @error('mother_name') is_invalid @enderror" name="mother_name"
                                       value="{{ $student->mother_name }}">
                                @error('mother_name') <div class="invalid-feedback">{{$message}}}</div> @enderror
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputpresent_address2">Gender</label>
                                <select class="form-control" name="gender">
                                    <option  value="Male" @selected($student->gender == 'Male')> Male </option>
                                    <option value="Female" @selected($student->gender == 'Female')> Female </option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputpresent_address2">Date of Birth</label>
                                <input type="date" class="form-control @error('date_of_birth') is_invalid @enderror" name="date_of_birth"
                                       value="{{$student->date_of_birth}}">
                                @error('date_of_birth') <div class="invalid-feedback">{{$message}}}</div> @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <label for="inputCity">Highest Educational Qualification</label>
                                <input type="text" class="form-control @error('education') is_invalid @enderror" name="education"
                                       value="{{ $student->education }}" placeholder="Ex: HSC with GPA 4.50">
                                @error('education') <div class="invalid-feedback">{{$message}}}</div> @enderror
                            </div>

                            <div class="form-group col-md-2">
                                <label for="inputCity">Occupation </label>
                                <select class="form-control @error('occupation') is_invalid @enderror" name="occupation"
                                        >
                                    <option value="Student" @selected($student->occupation=='Student')> Student </option>
                                    <option value="Job" @selected($student->occupation=='Job')> Job </option>
                                    <option value="Business" @selected($student->occupation=='Business')> Business </option>
                                </select>
                                @error('occupation') <div class="invalid-feedback">{{$message}}}</div> @enderror
                            </div>

                            <div class="form-group col-md-2">
                                <label for="inputCity">Mobile</label>
                                <input type="number" class="form-control @error('mobile') is_invalid @enderror"  name="mobile"
                                       value="{{ $student->mobile }}">
                                @error('mobile') <div class="invalid-feedback">{{$message}}}</div> @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCity">Guardian's Mobile</label>
                                <input type="number" class="form-control @error('guardian_mobile') is_invalid @enderror"
                                       name="guardian_mobile" value="{{ $student->guardian_mobile }}">
                                @error('guardian_mobile') <div class="invalid-feedback">{{$message}}}</div> @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCity">E-mail</label>
                                <input type="email" class="form-control @error('email') is_invalid @enderror" id="email" name="email"
                                       value="{{ $student->email }}">
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
                                         >{{ $student->present_address }}</textarea>
                                @error('present_address') <div class="invalid-feedback">{{$message}}}</div> @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputCity">Permanent Address</label>
                                <textarea class="form-control @error('permanent_address') is_invalid @enderror" name="permanent_address"
                                          >{{$student->permanent_address}}</textarea>
                                @error('permanent_address') <div class="invalid-feedback">{{$message}}}</div> @enderror
                            </div>


                        </div>
                    </div>
                </div>

                @foreach($student->courses as $course)
                <div class="card mb-2">
                    <div class="card-header">
                        Course Information
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="inputEmail4"> Type  </label>
                                <select name="type" id="type" value="{{ $course->type }}"
                                        required class="js-select2 form-control @error('type') is_invalid @enderror"
                                        occupation>
                                    <option >---</option>
                                    <option value="Certificate" @selected($course->type=='Certificate')>   Certificate </option>
                                    <option value="Non-Certificate" @selected($course->type=='Non-Certificate')>    Non-Certificate </option>
                                    <option value="Others" @selected($course->type=='Others')>  Others </option>

                                </select>
                                @error('type') <div class="invalid-feedback">{{$message}}}</div> @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Course</label>
                                <select name="course_id"
                                        class="form-control js-select2 @error('course_id') is_invalid @enderror">
                                    <option value="">---</option>
                                    @foreach($courses as $c)
                                        <option value="{{$c->id}}" @selected($course->course_id == $c->id )>{{$c->name}}</option>
                                    @endforeach


                                </select>
                                @error('course_id') <div class="invalid-feedback">{{$message}}}</div> @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputthird2">Batch</label>
                                {{$course->batch_id}}
                                <select name="batch_id"
                                        class="form-control js-select2 @error('batch_id') is_invalid @enderror">
                                    <option value="">----</option>
                                    @foreach($batches as $b)
                                        <option value="{{$b->id}}" @selected($b->id == $course->batch_id)>{{$b->title}}</option>
                                    @endforeach
                                </select>
                                @error('batch_id') <div class="invalid-feedback">{{$message}}}</div> @enderror
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputEmail4">Roll No.</label>
                                <input type="number" class="form-control @error('roll') is_invalid @enderror" name="roll"
                                       value="{{ $course->roll  }}">
                                @error('roll') <div class="invalid-feedback">{{$message}}}</div> @enderror
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputEmail4">Registration No.</label>
                                <input type="number" class="form-control @error('registration_no') is_invalid @enderror"
                                       name="registration_no" value="{{$course->registration_no}}">
                                @error('registration_no') <div class="invalid-feedback">{{$message}}}</div> @enderror
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputthird2">Academic Year</label>
                                <input type="text" class="form-control @error('academic_year') is_invalid @enderror" name="academic_year"
                                       value="{{ $course->academic_year }}">
                                @error('academic_year') <div class="invalid-feedback">{{$message}}}</div> @enderror
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputthird2">Session</label>
                                <input type="text" class="form-control @error('session') is_invalid @enderror" name="session"
                                       value="{{ $course->session }}">
                                @error('session') <div class="invalid-feedback">{{$message}}}</div> @enderror
                            </div>

                        </div>
                    </div>
                </div>


                <div class="card mb-2">
                    <div class="card-header">
                        Fees Information
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="inputthird2">Fee</label>
                                <input type="number" class="form-control @error('fee') is_invalid @enderror" name="fee"
                                       value="{{ $course->fee }}">
                                @error('fee') <div class="invalid-feedback">{{$message}}}</div> @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <label for="inputCity">Discount</label>
                                <input type="number" class="form-control @error('discount') is_invalid @enderror" name="discount"
                                       value="{{ $course->discount }}">
                                @error('discount') <div class="invalid-feedback">{{$message}}}</div> @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <label for="inputCity">Payable</label>
                                <input type="number" class="form-control @error('payable') is_invalid @enderror" name="payable"
                                       value="{{ $course->fee - $course->discount  }}">
                                @error('payable') <div class="invalid-feedback">{{$message}}}</div> @enderror
                            </div>



                        </div>
                        <div class="row">
                            <div class="form-group col-md-2">
                                <label for="inputCity">1st Installment</label>
                                <input type="number" class="form-control @error('first') is_invalid @enderror" name="first"
                                       value="{{ $course->first_ins }}">
                                @error('first') <div class="invalid-feedback">{{$message}}}</div> @enderror
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputCity">1st Installment Date</label>
                                <input type="date" class="form-control @error('first_date') is_invalid @enderror" name="first_date"
                                       value="{{ $course->first_ins_date }}">
                                @error('first_date') <div class="invalid-feedback">{{$message}}}</div> @enderror
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputCity">2nd Installment</label>
                                <input type="number" class="form-control @error('second') is_invalid @enderror" name="second"
                                       value="{{ $course->second_ins }}">
                                @error('second') <div class="invalid-feedback">{{$message}}}</div> @enderror
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputCity">2nd Installment Date </label>
                                <input type="date" class="form-control @error('second_date') is_invalid @enderror" name="second_date"
                                       value="{{ $course->second_ins_date }}">
                                @error('second_date') <div class="invalid-feedback">{{$message}}}</div> @enderror
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputCity">3rd Installment</label>
                                <input type="text" class="form-control @error('third') is_invalid @enderror" name="third"
                                       value="{{ $course->third_ins }}">
                                @error('third') <div class="invalid-feedback">{{$message}}}</div> @enderror
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputCity">3rd Installment Date </label>
                                <input type="date" class="form-control @error('third_date') is_invalid @enderror" name="third_date"
                                       value="{{ $course->third_ins_date }}">
                                @error('third_date') <div class="invalid-feedback">{{$message}}}</div> @enderror
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="card mb-2">
                    <div class="card-header">
                        Reference
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="inputCity">Reference</label>
                                <input type="text" class="form-control @error('ref') is_invalid @enderror" name="ref"
                                       value="{{ $student->reference->ref }}">
                                @error('reference') <div class="invalid-feedback">{{$message}}}</div> @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputCity">Ref. Address</label>
                                <input type="text" class="form-control @error('ref_address') is_invalid @enderror" name="ref_address"
                                       value="{{ $student->reference->ref_address }}">
                                @error('ref_address') <div class="invalid-feedback">{{$message}}}</div> @enderror
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputCity">Ref. Mobile</label>
                                <input type="number" class="form-control @error('ref_mobile') is_invalid @enderror" name="ref_mobile"
                                       value="{{ $student->reference->ref_mobile }}">
                                @error('ref_mobile') <div class="invalid-feedback">{{$message}}}</div> @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">

                        <input type="submit" name="submit" value="Save" class="btn btn-primary ">
                        <button type="reset" class="btn btn-secondary">Reset</button>
            </form>
        </div>
        </div>
    </main>
</x-admin-layout>



