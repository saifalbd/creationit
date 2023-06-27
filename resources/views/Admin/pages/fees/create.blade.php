<x-admin-layout>
	<main>
		<div class="container-fluid">

			<div class="card mt-4">

				<div class="card-header">
					<div class="row">
						<div class="col-md-9 my-auto">
							<i class="fas fa-file-invoice"></i> Fees Collection <i class="fas fa-angle-right"></i> Payment Receive
						</div>
						<div class="col-md-3 text-right">

							<a href="{{route('fee.index')}}" class="btn btn-outline-primary"> <i class="fas fa-folder-open"></i> Received Record</a>
						</div>
					</div>
				</div>
				<div class="card mb-4">
					<div class="mt-3 card-body">
						<form name="frmUser" method="post" action="{{route('fee.store')}}" enctype="multipart/form-data">
							@csrf
							<div class="form-row">

								<div class="form-group col-md-6">
									<label for="inputAddress2">Admission ID</label>
									<select name="student_id" class="form-control js-select2 @error('student_id') is-invalid @enderror" @disabled(!!$byStudent_id)>
										<option value="">---</option>
									
										@foreach($students as $student)
										<option value="{{$student->id}}" @selected($student->id == $byStudent_id?$byStudent_id: old('student_id'))> {{$student->id}}/ {{$student->name}}/ {{$student->mobile}}</option>
										@endforeach
										
										

										
										

									</select>
                                    @error('student_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
								</div>
								<div class="form-group col-md-6">
									<label for="inputCourse">Course ID</label>

									<select name="course_id" class="form-control js-select2 @error('course_id') is-invalid @enderror">
										<option value="">---</option>
										@foreach($courses as $course)
										<option value="{{$course->id}}"> {{$course->id}}/ {{$course->name}}</option>
										@endforeach

									</select>
                                    @error('course_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
								</div>
							</div>
							<div class="form-row">

								<div class="form-group col-md-3">
									<label for="inputEmail4">Amount</label>
									<input type="number" class="form-control @error('amount') is-invalid @enderror" required name="amount">
                                    @error('amount')<div class="invalid-feedback">{{ $message }}</div>@enderror
								</div>
								<div class="form-group col-md-3">
									<label for="inputEmail4"> Date</label>
									<input type="date" class="form-control @error('date') is-invalid @enderror" required name="date" value="2023-06-09">
                                    @error('date')<div class="invalid-feedback">{{ $message }}</div>@enderror
								</div>
								<div class="form-group col-md-3">
									<label for="inputAddress2"> Payment Mode </label>
									<select type="text" class="form-control @error('trx_mode') is-invalid @enderror" required name="trx_mode">
									<option value="Cash"> Cash </option>
									<option value="Bkash"> Bkash </option>
									<option value="Nagad"> Nagad </option>
									<option value="Roket"> Roket </option>
									<option value="Bank"> Bank </option>

									</select>
                                    @error('trx_mode')<div class="invalid-feedback">{{ $message }}</div>@enderror
								</div>


								<div class="form-group col-md-3">
									<label for="inputAddress2">Trx No</label>
									<input type="text" class="form-control @error('trx_no') is-invalid @enderror" name="trx_no">
                                    @error('trx_no')<div class="invalid-feedback">{{ $message }}</div>@enderror
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="inputAddress2">Remark</label>
									<input type="text" class="form-control" name="remark">
                                    @error('remark')<div class="invalid-feedback">{{ $message }}</div>@enderror
								</div>



							</div>
							<hr>
							<input type="submit" name="submit" value="Save" id="register" class="btn btn-primary ">
							<button type="reset" class="btn btn-secondary">Reset</button>
						</form>
					</div>
				</div>
	</main>
</x-admin-layout>
