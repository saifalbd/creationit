<x-admin-layout>
<main>
               <div class="container-fluid"><div class="mt-4 mb-2 page-title">
   <div class="row">
  <div class="col-md-8 my-auto">
   Invoice <i class="fas fa-angle-right"></i> Invoice list
      </div>
      <div class="col-md-4 text-right">
		  <a class="btn btn-outline-primary "  href="{{url('invoice/create')}}" > <i class="fas fa-plus-square"></i> New Invoice </a>
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
				<th width="0%"> Invoice #</th>
					<th> Date </th>
                  <th> Name </th>
                  <th> Mobile</th>
                  <th> Total</th>
                  <th> Paid </th>
                  <th> Due</th>
	
				<th  > </th>
               </tr>
            </thead>
            <tbody>
                              <tr>
				  <td width="0%" class="bn-font">1678866132</td>
					<td> 15.03.2023</td>
					<td> Md. Sadi</td>
					<td> 01310698640</td>
					<td> 3950</td>
					<td> 2500</td>
					<td> 1450</td>
                  <td nowrap align="right">
					<a href="view_invoice.php?unique_id=1678866132" class="btn btn-primary btn-sm"> <i class="fa fa-print "></i></a>
					<a data-appd="6" class="delete btn btn-danger btn-sm" href="#"><i class="fa fa-trash-alt "> </i>  </a>
                  </td>
               </tr>
                <tr>
				  <td width="0%" class="bn-font">1678876439</td>
					<td> 15.03.2023</td>
					<td> Health Care</td>
					<td> 01749777850</td>
					<td> 9480</td>
					<td> 6000</td>
					<td> 3480</td>
                  <td nowrap align="right">
					<a href="view_invoice.php?unique_id=1678876439" class="btn btn-primary btn-sm"> <i class="fa fa-print "></i></a>
					<a data-appd="7" class="delete btn btn-danger btn-sm" href="#"><i class="fa fa-trash-alt "> </i>  </a>
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