<x-admin-layout>

    @slot('style')
    @endslot
    <main>
        <div class="container-fluid">
            <div class="mt-4 mb-1 page-title">
                <div class="row">
                    <div class="col-md-9 my-auto">
                        Admission <i class="fas fa-angle-right"></i> New Admission
                    </div>
                    <div class="col-md-3 text-right">
                        <a href="{{ route('student.index') }}" class="btn btn-outline-primary"> <i
                                class="fas fa-folder-open"></i> Admission List</a>
                    </div>
                </div>
              
            </div>
            <div class=" mb-3 page-title">
            <div class="row">
                <div class="col-md-9 my-auto">
                    Add New Course By Student {{ $student->name }}/{{ $student->mobile }}
                </div>

            </div>
            </div>

            <form name="frmUser" method="post"
                action="{{ route('student.addCourse.store', ['student' => $student->id]) }}" enctype="multipart/form-data">
                @csrf

                <x-error-alert></x-error-alert>

                <div class="card mb-2">
                    <div class="card-header">
                        Course Information
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="inputEmail4"> Type </label>
                                <select name="type" id="type" value="{{ old('type') }}" required
                                    class="js-select2 form-control @error('type') is-invalid @enderror" occupation>
                                    <option value="">---</option>
                                    <option value="Certificate" @selected(old('type') == 'Certificate')> Certificate </option>
                                    <option value="Non-Certificate" @selected(old('type') == 'Non-Certificate')> Non-Certificate
                                    </option>
                                    <option value="Others" @selected(old('type') == 'Others')> Others </option>

                                </select>
                                @error('type')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Course</label>
                                <select name="course_id"
                                    class="form-control js-select2 @error('course_id') is-invalid @enderror">
                                    <option value="">---</option>
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->id }}" @selected(old('course_id') == $course->id)>
                                            {{ $course->name }}</option>
                                    @endforeach


                                </select>
                                @error('course_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputthird2">Batch</label>
                                <select name="batch_id" value="{{ old('batch_id') }}"
                                    class="form-control js-select2 @error('batch_id') is-invalid @enderror">
                                    <option value="">----</option>
                                    @foreach ($batches as $batch)
                                        <option value="{{ $batch->id }}" @selected($batch->id == old('batch_id'))>
                                            {{ $batch->title }}</option>
                                    @endforeach
                                </select>
                                @error('batch_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputEmail4">Roll No.</label>
                                <input type="number" class="form-control @error('roll') is-invalid @enderror"
                                    name="roll" value="{{ old('roll') }}">
                                @error('roll')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputEmail4">Registration No.</label>
                                <input type="number"
                                    class="form-control @error('registration_no') is-invalid @enderror"
                                    name="registration_no" value="{{ old('registration_no') }}">
                                @error('registration_no')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputthird2">Academic Year</label>
                                <input type="text" class="form-control @error('academic_year') is-invalid @enderror"
                                    name="academic_year" value="{{ old('academic_year') }}">
                                @error('academic_year')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputthird2">Session</label>
                                <input type="text" class="form-control @error('session') is-invalid @enderror"
                                    name="session" value="{{ old('session') }}">
                                @error('session')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
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
                                <input type="number" class="form-control @error('fee') is-invalid @enderror"
                                    id="fee" name="fee" value="{{ old('fee') }}">
                                @error('fee')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <label for="inputCity">Discount</label>
                                <input type="number" class="form-control @error('discount') is-invalid @enderror"
                                    id="discount" name="discount" value="{{ old('discount') }}">
                                @error('discount')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <label for="inputCity">Payable</label>
                                <input type="number" class="form-control @error('payable') is-invalid @enderror"
                                    id="payable" name="payable" value="{{ old('payable') }}">
                                @error('payable')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>



                        </div>
                        <div class="row">
                            <div class="form-group col-md-2">
                                <label for="inputCity">1st Installment</label>
                                <input type="number" class="form-control @error('first') is-invalid @enderror"
                                    name="first" value="{{ old('first') }}">
                                @error('first')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputCity">1st Installment Date</label>
                                <input type="date" class="form-control @error('first_date') is-invalid @enderror"
                                    name="first_date" value="{{ old('first_date') }}">
                                @error('first_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputCity">2nd Installment</label>
                                <input type="number" class="form-control @error('second') is-invalid @enderror"
                                    name="second" value="{{ old('second') }}">
                                @error('second')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputCity">2nd Installment Date </label>
                                <input type="date" class="form-control @error('second_date') is-invalid @enderror"
                                    name="second_date" value="{{ old('second_date') }}">
                                @error('second_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputCity">3rd Installment</label>
                                <input type="text" class="form-control @error('third') is-invalid @enderror"
                                    name="third" value="{{ old('third') }}">
                                @error('third')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputCity">3rd Installment Date </label>
                                <input type="date" class="form-control @error('third_date') is-invalid @enderror"
                                    name="third_date" value="{{ old('third_date') }}">
                                @error('third_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
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
    @endslot
</x-admin-layout>
