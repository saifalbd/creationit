<x-admin-layout>
<main>
               <div class="container-fluid"><div class="mt-4 mb-3 page-title">
   <div class="row">
<div class="col-sm-8 my-auto">
         Admission <i class="fas fa-angle-right"></i> New Application
      </div>
   <div class="col-sm-4">
		 <a href="{{route('student.create')}}" class="btn btn-outline-primary float-right"> <i class="fas fa-plus-square"></i> Add Admission </a>
      </div>
   </div>
</div>
<div class="card mb-4">
   <div class="card-body">
      <div class="table-responsive">
         <br>
         <table class="table table-hover " id="dataTable" width="100%" cellspacing="0">
            <thead>
               <tr>
                  <th width="0%"> Admission#</th>
                  <th  > Date</th>
                  <th> Student Name </th>
				  <th> Course</th>
				  <th> Refarance </th>
				  <th> Mobile</th>
                  <th width="10%"> </th>
               </tr>
            </thead>
            <tbody>
               @foreach($students as $student)
               <tr>
                  <td width="0%" ><samp >{{$student->id}}</samp></td>
                  <td width="0%" > {{format($student->created_at->toDateString())}} </td>
                  <td> <a href="{{route('student.show',['student'=>$student->id])}}" >{{$student->name}} </a></td>
				  <td>{{$student->courseNames}}</td>
				  <td>{{$student->reference->ref}}</td>
				  <td>{{$student->mobile}}</td>


               <td nowrap>
					<a href="{{route('student.edit',['student'=>$student->id])}}"  class="btn btn-success btn-sm" ><i class="fas fa-check-circle"></i></a>
               <x-remove-btn :action="route('student.destroy',['student'=>$student->id])" title="Are You Sure? Delete Student {{$student->name}}"></x-remove-btn>
				
            </td>
               </tr>
               @endforeach

               </tbody>
            <tfoot>
         </table>
       <x-page-info :items="$students"></x-page-info>
      </div>
   </div>
</div>

 </main>
 @slot('script')
 <x-table-script></x-table-script> 
 @endslot
</x-admin-layout>
