<x-admin-layout>
<main>
    <div class="container-fluid"><div class="mt-4 mb-3 page-title">
   <div class="row">
      <div class="col-sm-8 my-auto">
         <i class="far fa-list-alt"></i> Student Attendance Record <i class="fas fa-angle-right"></i> {{$attendance->batch->title}}  <i class="fas fa-angle-right"></i> {{$attendance->date}}      </div>
       <div class="col-md-3 my-auto">

      </div>
   </div>
</div>
<div class="card mb-4">
   <div class="card-body">
      <div class="table-responsive">
         <table class="table table-hover " id="dataTable" width="100%" cellspacing="0">
            <thead>
				<tr>
					<th> Admission ID</th>
					<th> Student Name</ th>
					<th> Mobile Number</ th>
					<th> Status</th>
					<th> In</th>
					<th> Out</th>
					<th> Remark </th>
					<th width="10%"> </th>
				</tr>
            </thead>
            <tbody>
            @foreach($list as $item)
                              <tr>




                <td>{{$item->id}}</td>
				<td  >  <a href="preview_student.php?id=38" >{{$item->student->name}}</a></td>
                <td >{{$item->student->mobile}}</td>
				<td >{{$item->attend?'Present':'Absent'}}</td>
				<td >{{$item->entry}}</td>
				<td >{{$item->leave}}</td>
				<td >{{$item->remark}}</td>

                  <td width="10%">

                     <a  data-appd="" class="delete btn-danger btn-sm" href="#"><i class="fa fa-trash"> </i>  </a>

                  </td>
               </tr>
                              <tr>




                <td>42</td>
				<td  >  <a href="preview_student.php?id=42" >Naimul Haque Naim </a></td>
                <td > 01307551523</td>
				<td > Present</td>
				<td > 00:00:00</td>
				<td > 00:00:00</td>
				<td > </td>

                  <td width="10%">

                     <a  data-appd="" class="delete btn-danger btn-sm" href="#"><i class="fa fa-trash"> </i>  </a>

                  </td>
               </tr>
            @endforeach

                           </tbody>
            <tfoot>
         </table>
      </div>
   </div>
</div>
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script>
   $(document).on('click','.delete',function(){
   var element = $(this);
   var del_id = element.attr("data-appd");
   var info = 'deladmission=' + del_id;
   if(confirm("Are you sure you want to delete this?"))
   {
    $.ajax({
      type: "POST",
      url: "ajaxdelete.php",
      data: info,
      success: function(){
    }
   });
     $(this).parents("tr").animate({ backgroundColor: "#003" }, "slow")
     .animate({ opacity: "hide" }, "slow");
    }
   return false;
   });
</script>
 </main>
</x-admin-layout>
