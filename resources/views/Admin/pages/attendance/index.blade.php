<x-admin-layout>
<main>
               <div class="container-fluid"><div class="mt-4 mb-3 page-title">
   <div class="row">
      <div class="col-md-9 my-auto">
         <i class="far fa-list-alt"></i> Course Information <i class="fas fa-angle-right"></i> Course List
      </div>
       <div class="col-md-3 my-auto">
		 <a href="{{url('attendance/create')}}" class="btn btn-outline-primary float-right"> <i class="fas fa-plus-square"></i> Attedance Entry</a>
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
                  <th> Date  </th>
                  <th> Batch </th> 
				  <th> Session</th>
                  <th> Students </th>
                  <th width="10%"> </th>
               </tr>
            </thead>
            <tbody>
                              <tr>

                  <td> <a href="list_attendance_recordes.php?d_ate=2023-03-13&batch=" >   13.03.2023</a></td>
					<td> </td>
					<td> </td>
					<td> 4</td>
                  
                  <td width="10%">
                     <a href="{{route('attendance.edit',2)}}" > <i class="fa fa-folder-open text-success">  </i>  </a>
 
                  </td>
               </tr>
                              
                           </tbody>
            <tfoot>
         </table>
      </div>
   </div>
</div> 
 </main>
</x-admin-layout>
