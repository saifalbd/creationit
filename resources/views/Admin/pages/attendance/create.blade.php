<x-admin-layout>
<main>
               <div class="container-fluid">

<div class="card mt-4">

	<div class="card-header">
   <div class="row">
      <div class="col-md-9 my-auto">
        <i class="far fa-check-circle"></i>  Attendance Information <i class="fas fa-angle-right"></i> Attendance Entry
      </div>
      <div class="col-md-3 text-right">

         <a href="{{route('attendance.index')}}" class="btn btn-outline-primary"> <i class="fas fa-folder-open"></i> Attendance Record</a>
      </div>
   </div>
</div>

<div class="card mb-4">
	<div class="mt-3 card-body">

	<form method="post" action="{{route('attendance.store')}}" enctype="multipart/form-data" >
        @csrf
		<div class="form-row">


	<div class="form-group col-md-4">
			 <label for="inputthird2">Batch</label>
			<select name="batch_id" class="form-control js-select2 @error('batch_id') is-invalid @enderror"  required >

				<option value="">---</option>
                @foreach($batches as $batch)
								<option value="{{$batch->id}}">{{$batch->title}}</option>
                @endforeach

							</select>
			</div>

						<div class="form-group col-md-2">
               <label for="inputthird2">Date</label>
               <input type="date" class="form-control @error('date') is-invalid @enderror" name="date" required>


			</div>

		 <div class="form-group col-md-2">
		 <label for="inputthird2"> -</label>
		  <input type="submit"   value="Next" id="register" class="btn btn-primary btn-block ">
		</div>
		</div>

      </form>
   </div>
</div>
 </main>
</x-admin-layout>
