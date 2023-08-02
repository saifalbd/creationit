<x-frontend-layout>
<section class="call-action">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title  style2 text-center">
							<div class="section-top">
								<h1><span>Student</span><b>Payment</b></h1><h4></h4>
							</div>
							 
						</div>
					</div>
				</div>
		<form name="frmUser" method="post" action="{{route('fee.storeByFront')}}" enctype="multipart/form-data">
         <div class="form-row">
		 
		     <div class="form-group col-md-8">
               <label for="inputAddress2">Admission ID</label>
 
        <input type="number" class="form-control" required="" name="admission_id">
            </div>
            </div>
			   <div class="form-row">
			
            <div class="form-group col-md-2">
               <label for="inputEmail4">Amount</label>
               <input type="number" class="form-control" required="" name="amount">
            </div> 
			<div class="form-group col-md-2">
               <label for="inputEmail4"> Date</label>
                <input type="date" class="form-control" required="" name="d_ate" value="2023-07-19">
			  
            </div>
			   <div class="form-group col-md-2">
               <label for="inputAddress2"> Payment Mode </label>
               <select type="text" class="form-control" required="" name="trx_mode">
			   <option value="Cash"> Cash </option>
			   <option value="Bkash"> Bkash </option>
			   <option value="Nagad"> Nagad </option>
			   <option value="Roket"> Roket </option>
			   <option value="Bank"> Bank </option>
			   
			   </select>
            </div>
			
			
				   <div class="form-group col-md-2">
               <label for="inputAddress2">Trx No</label>
               <input type="text" class="form-control" name="trxno">
            </div>
            </div>
			 <div class="form-row">
				   <div class="form-group col-md-4">
               <label for="inputAddress2">Remark</label>
               <input type="text" class="form-control" name="remark">
            </div>
            
 
         </div>
         <input type="submit" name="submit" value="Submit" class="bizwheel-btn">
         
        </form>
            </div>
</section>
</x-frontend-layout>