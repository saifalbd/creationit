<x-admin-layout>
<main>
               <div class="container-fluid"><div class="mt-4 mb-3 page-title">
   <div class="row">
      <div class="col-md-9 my-auto">
         <i class="far fa-list-alt"></i> Fees Collection Information  
      </div>
       <div class="col-md-3 my-auto">
		 <a href="{{route('fees.create')}}" class="btn btn-outline-primary float-right"> <i class="fas fa-plus-square"></i> Fees Receive</a>
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
				<th> Admmission #</th>
				<th> Student Name </th>
				<th> Batch </th> 
				<th> Fee</th>
				<th> Mode</th>
				<th> Trx. No</th>
				<th> Remark </th>
				<th> Date </th>
                <th  > </th>
               </tr>
            </thead>
            <tbody>
                              <tr>
                  <td> 42</td>
                  <td> <a href="preview_student.php?id=42" > Naimul Haque Naim  </a></td>
                  <td> GD-2201</td>
				  <td> 7000</td>
                  <td> Cash</td>
                  <td> </td>
                  <td> Course fee</td>
                  <td> 13.03.2023</td>
                  <td nowrap>
                     <a href="" class="btn btn-info btn-sm" > <i class="fa fa-print">  </i></a>  
                     <a href="{{route('fees.edit',2)}}" class="btn btn-success btn-sm" > <i class="fa fa-edit">  </i></a>  
                     <a  data-appd="5" class="delete btn-danger btn-sm" href="#"><i class="fa fa-trash"> </i>  </a>
                  </td>
               </tr>
                              
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
   var info = 'delfee=' + del_id;
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