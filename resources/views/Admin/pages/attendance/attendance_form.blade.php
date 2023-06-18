<x-admin-layout>
<main>
               <div class="container-fluid">

<div class="card mt-4">

	<div class="card-header">
   <div class="row">
      <div class="col-md-9 my-auto">
        <i class="far fa-list-alt"></i>  Attedance   <i class="fas fa-angle-right"></i> Attedance Entry
      </div>
      <div class="col-md-3 text-right">

         <a href="{{route('attendance.index')}}" class="btn btn-outline-primary"> <i class="fas fa-folder-open text-warning"></i> Attedance Record</a>
      </div>
   </div>
</div>
<div class="card mb-4">

   <div class="mt-3 card-body">
   <div class="alert alert-warning">
   Uncheck only those that were not present
   </div>
 <form name="frmUser" method="post" action="{{route('attendanceList.store',['attendance'=>$attendance->id])}}" enctype="multipart/form-data" >
     @csrf
         <div class="form-row">

		 @foreach($students as $index=>$student)
			<div class="form-group col-md-6">
			<div style="border: 1px solid #eee; padding: 8px; border-radius: 12px;line-height: 30px;">
			 <input type="text" hidden name="items[{{$index}}][id]" value="{{$student->id}}">
			 <strong> {{$student->id}}.</strong> {{$student->name}}

			<div class="row">
			<div  class="col-sm-3">

			     <select name="items[{{$index}}][attend]"  class="form-control status" required  >
                     <option value="">---</option>
          <option value="1" @selected($student->attend==1)>Present</option>
          <option value="0" @selected($student->attend==0)>Absent</option>

        </select>
		  </div>
			<div class="col-sm-3">
			<input type="text" class="form-control @error('remark') is-invalid @enderror" name="items[{{$index}}][remark]" value="{{$student->remark}}" placeholder="Remark">
			</div>
			<div class="col-sm-3">
				<input type="time" class="form-control @error('entry') is-invalid @enderror" name="items[{{$index}}][entry]" value="{{$student->entry}}" placeholder="In Time">
		  </div>
		<div class="col-sm-3">
			<input type="time" class="form-control @error('leave') is-invalid @enderror" name="items[{{$index}}][leave]" value="{{$student->leave}}" placeholder="Out Time">

		  </div>
		  </div>
            </div>
            </div>

@endforeach











</div>
         <hr>
         <input type="submit" name="save" value="Submit" id="register" class="btn btn-primary ">
         <button type="reset" class="btn btn-secondary">Reset</button>
      </form>
   </div>
</div>
 </main>
</x-admin-layout>
