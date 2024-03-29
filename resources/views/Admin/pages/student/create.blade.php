<x-admin-layout>

    @slot('style')
    <style>
        .form-group .avarar-box{
            display: none;
        }
        .form-group.with-avatar{
            display: grid;
            grid-template-columns: 100px auto;
        }

        .form-group.with-avatar .avarar-box{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form-group.with-avatar .avarar-box img{
            max-width: 90px;
            max-height: 90px;
        }
    </style>
    @endslot
    <main>
        <div class="container-fluid"><div class="mt-4 mb-3 page-title">
                <div class="row">
                    <div class="col-md-9 my-auto">
                        Admission  <i class="fas fa-angle-right"></i>      New Admission
                    </div>
                    <div class="col-md-3 text-right">
                        <a href="{{route('student.index')}}" class="btn btn-outline-primary"> <i class="fas fa-folder-open"></i> Admission List</a>
                    </div>
                </div>
            </div>
            <form name="frmUser" method="post" action="{{route('student.store')}}" enctype="multipart/form-data" >
                @csrf
                <div class="card mb-2">
                    <div class="card-header">
                        Student Information
                    </div>
                    <div class="card-body">
                        <x-error-alert></x-error-alert>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Name <b style="color:red;">**</b></label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" required name="name"
                                       value="{{ old('name') }}">
                                @error('name') <div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputpresent_address2">Father's/Husband Name <b style="color:red;">**</b></label>
                                <input type="text" class="form-control @error('father_name') is-invalid @enderror" required
                                       name="father_name" value="{{ old('father_name') }}">
                                @error('father_name') <div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputpresent_address2">Mother's Name <b style="color:red;">**</b></label>
                                <input type="text" class="form-control @error('mother_name') is-invalid @enderror" name="mother_name"
                                       value="{{ old('mother_name') }}">
                                @error('mother_name') <div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputpresent_address2">Gender <b style="color:red;">**</b></label>
                                <select class="form-control" name="gender" value="{{ old('gender') }}">
                                    <option value="Male"> Male </option>
                                    <option value="Female"> Female </option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputpresent_address2">Date of Birth <b style="color:red;">**</b></label>
                                <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth"
                                       value="{{ old('date_of_birth') }}">
                                @error('date_of_birth') <div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputCity">Highest Educational Qualification</label>
                                <input type="text" class="form-control @error('education') is-invalid @enderror" name="education"
                                       value="{{ old('education') }}" placeholder="Ex: HSC with GPA 4.50">
                                @error('education') <div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <label for="inputCity">Occupation </label>
                                <select class="form-control @error('occupation') is-invalid @enderror" name="occupation"
                                        value="{{ old('occupation') }}">
                                    <option value="Student"> Student </option>
                                    <option value="Job"> Job </option>
                                    <option value="Bussiness"> Bussiness </option>
                                </select>
                                @error('occupation') <div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <label for="inputCity">Mobile <b style="color:red;">**</b></label>
                                <input type="number" class="form-control @error('mobile') is-invalid @enderror"  name="mobile"  value="{{ old('mobile') }}">
                                @error('mobile') <div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCity">Guardian's Mobile</label>
                                <input type="number" class="form-control @error('guardian_mobile') is-invalid @enderror"
                                       name="guardian_mobile" value="{{ old('guardian_mobile') }}">
                                @error('guardian_mobile') <div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputCity">E-mail</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                                       value="{{ old('email') }}">
                                @error('email') <div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>

                            <div class="form-group with-avatar col-md-6" id="avatarFgroup">
                                <div class="avarar-box">
                                    <img src="{{asset('assets/img/avatar.png')}}" alt="" srcset="">
                                </div>
                               <div>
                                <label for="inputEmail4">Photo (Maximum 50 KB) </label>
                                <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo"
                                       value="{{ old('photo') }}" onchange="imageChange(event,'avatarFgroup')">
                                       @error('photo') <div class="invalid-feedback">{{$message}}</div> @enderror
                               </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputCity">Present Address</label>
                                <textarea class="form-control @error('present_address') is-invalid @enderror" name="present_address"
                                          >{{ old('present_address') }}</textarea>
                                @error('present_address') <div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputCity">Permanent Address</label>
                                <textarea class="form-control @error('permanent_address') is-invalid @enderror" name="permanent_address"
                                          >{{ old('permanent_address') }}</textarea>
                                @error('permanent_address') <div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>


                        </div>
                    </div>
                </div>

                <div class="card mb-2">
                    <div class="card-header">
                        Course Information
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="inputEmail4"> Type  <b style="color:red;">**</b> </label>
                                <select name="type" id="type" value="{{ old('type') }}"
                                        required class="js-select2 form-control @error('type') is-invalid @enderror"
                                        occupation>
                                    <option value="">---</option>
                                    <option value="Certificate" @selected(old('type') =='Certificate')>   Certificate </option>
                                    <option value="Non-Certificate" @selected(old('type') =='Non-Certificate')>    Non-Certificate </option>
                                    <option value="Others" @selected(old('type') == 'Others')>  Others </option>

                                </select>
                                @error('type') <div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Course <b style="color:red;">**</b></label>
                                <select name="course_id" id="course_id_input"
                                        class="form-control js-select2 @error('course_id') is-invalid @enderror">
                                    <option value="">---</option>
                                    @foreach($courses as $course)
                                        <option value="{{$course->id}}" @selected(old('course_id') ==$course->id)>{{$course->name}}</option>
                                    @endforeach


                                </select>
                                @error('course_id') <div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputthird2">Batch <b style="color:red;">**</b></label>
                                <select name="batch_id"  id="batch_id_input" value="{{ old('batch_id') }}"
                                        class="form-control js-select2 @error('batch_id') is-invalid @enderror">
                                    <option value="">----</option>
                                    @foreach($batches as $batch)
                                        <option value="{{$batch->id}}" @selected($batch->id == old('batch_id'))>{{$batch->title}}</option>
                                    @endforeach
                                </select>
                                @error('batch_id') <div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputEmail4">Roll No. <b style="color:red;">**</b></label>
                                <input type="number" id="roll_input" class="form-control @error('roll') is-invalid @enderror" name="roll"
                                       value="{{ old('roll') }}">
                                @error('roll') <div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputEmail4">Registration No. <b style="color:red;">**</b></label>
                                <input type="number" class="form-control @error('registration_no') is-invalid @enderror"
                                       name="registration_no" id="registration_no_input" value="{{ old('registration_no') }}">
                                @error('registration_no') <div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputthird2">Academic Year <b style="color:red;">**</b></label>
                                <input type="text" class="form-control @error('academic_year') is-invalid @enderror" name="academic_year"
                                       value="{{ old('academic_year') }}">
                                @error('academic_year') <div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputthird2">Session <b style="color:red;">**</b></label>
                                <input type="text" class="form-control @error('session') is-invalid @enderror" name="session"
                                       value="{{ old('session') }}">
                                @error('session') <div class="invalid-feedback">{{$message}}</div> @enderror
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
                                <input type="number" class="form-control @error('fee') is-invalid @enderror" id="fee" name="fee"
                                       value="{{ old('fee') }}">
                                @error('fee') <div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <label for="inputCity">Discount</label>
                                <input type="number" class="form-control @error('discount') is-invalid @enderror" id="discount" name="discount"
                                       value="{{ old('discount') }}">
                                @error('discount') <div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <label for="inputCity">Payable</label>
                                <input type="number" class="form-control @error('payable') is-invalid @enderror" id="payable" name="payable"
                                       value="{{ old('payable') }}">
                                @error('payable') <div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>



                        </div>
                        <div class="row">
                            <div class="form-group col-md-2">
                                <label for="inputCity">1st Installment</label>
                                <input type="number" class="form-control @error('first') is-invalid @enderror" name="first"
                                       value="{{ old('first') }}">
                                @error('first') <div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputCity">1st Installment Date</label>
                                <input type="date" class="form-control @error('first_date') is-invalid @enderror" name="first_date"
                                       value="{{ old('first_date') }}">
                                @error('first_date') <div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputCity">2nd Installment</label>
                                <input type="number" class="form-control @error('second') is-invalid @enderror" name="second"
                                       value="{{ old('second') }}">
                                @error('second') <div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputCity">2nd Installment Date </label>
                                <input type="date" class="form-control @error('second_date') is-invalid @enderror" name="second_date"
                                       value="{{ old('second_date') }}">
                                @error('second_date') <div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputCity">3rd Installment</label>
                                <input type="text" class="form-control @error('third') is-invalid @enderror" name="third"
                                       value="{{ old('third') }}">
                                @error('third') <div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputCity">3rd Installment Date </label>
                                <input type="date" class="form-control @error('third_date') is-invalid @enderror" name="third_date"
                                       value="{{ old('third_date') }}">
                                @error('third_date') <div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-header">
                        Reference
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="inputCity">Reference</label>
                                <input type="text" class="form-control @error('ref') is-invalid @enderror" name="ref"
                                       value="{{ old('ref') }}">
                                @error('reference') <div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputCity">Ref. Address</label>
                                <input type="text" class="form-control @error('ref_address') is-invalid @enderror" name="ref_address"
                                       value="{{ old('ref_address') }}">
                                @error('ref_address') <div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputCity">Ref. Mobile</label>
                                <input type="number" class="form-control @error('ref_mobile') is-invalid @enderror" name="ref_mobile"
                                       value="{{ old('ref_mobile') }}">
                                @error('ref_mobile') <div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <input type="submit" name="submit" value="Save" class="btn btn-primary ">
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </div>
            </form>
        
        </div>
    </main>

@slot('script')
<script>

const courseInput = document.getElementById('course_id_input');
const batchInput = document.getElementById('batch_id_input');
const rollInput = document.getElementById('roll_input');
const regInput = document.getElementById('registration_no_input');

async function setter(course_id,batch_id){
    try {
        const url = '/admin/course-roll-reg';
        const {data} = await window.axios.post(url,{course_id,batch_id});
        rollInput.value = data.roll;
        regInput.value = data.reg;

        
    } catch (error) {
        console.error(error)
    }

}

courseInput.addEventListener('change',function(){
    const course_id = this.value;
    const batch_id = batchInput.value;
    if(course_id && batch_id){
        setter(course_id,batch_id)
    }
});

batchInput.addEventListener('change',function(){
    const course_id = courseInput.value;
    const batch_id =this.value;
    if(course_id && batch_id){
        setter(course_id,batch_id)
    }
});

    const discount = document.getElementById('discount');
    const fee = document.getElementById('fee');
    const payable = document.getElementById('payable');
    discount.addEventListener('change',function(){
        const val = parseFloat(this.value);
        let feeVal = parseFloat(fee.value);
        if(feeVal){ payable.value = feeVal - val;}
    });
    </script>
@endslot
</x-admin-layout>



