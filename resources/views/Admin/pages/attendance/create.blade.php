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
	
	<form method="get" action="" enctype="multipart/form-data" >
		<div class="form-row">
 	
			
	<div class="form-group col-md-4">
			 <label for="inputthird2">Batch</label>
			<select name="batch" class="form-control js-select2"  required >
			
				<option >---</option>
								<option value="5">BC-Special</option>
								<option value="6">BC-2201</option>
								<option value="10">BC-2202</option>
								<option value="13">GD-2201</option>
								<option value="14">GD-2202</option>
								<option value="15">GD-2203</option>
								<option value="16">WD-2201</option>
								<option value="17">BC-2204</option>
								<option value="18">BC-2205</option>
								<option value="19">BC-2207</option>
								<option value="20">BC-2206</option>
								<option value="21">BC-2208</option>
								<option value="22">BC-2209</option>
								<option value="23">Motion Graphic-2201</option>
								<option value="28">GD-2204</option>
								<option value="30">BC-2210</option>
								<option value="31">GD-2205</option>
								<option value="32">dada</option>
								<option value="33">SP-2201</option>
							</select>
			</div>
			
						<div class="form-group col-md-2">
               <label for="inputthird2">Date</label>
               <input type="date" class="form-control" name="d_ate" required>
          
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
