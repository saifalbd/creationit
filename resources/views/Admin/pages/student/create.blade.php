<x-admin-layout>

<main>
<div class="container-fluid"><div class="mt-4 mb-3 page-title">
   <div class="row">
      <div class="col-md-9 my-auto">
         Admission  <i class="fas fa-angle-right"></i>      New Admission
      </div>
      <div class="col-md-3 text-right">
         <a href="{{url('student')}}" class="btn btn-outline-primary"> <i class="fas fa-folder-open"></i> Admission List</a>
      </div>
   </div>
</div>
   <form name="frmUser" method="post" action="" enctype="multipart/form-data" >
 <div class="card mb-2">
   <div class="card-header">
      Student Information
   </div>
   <div class="card-body">
      <div class="row">
          <div class="form-group col-md-4">
               <label for="inputEmail4">Name</label>
               <input type="text" class="form-control" required  name="name" >
            </div>
            <div class="form-group col-md-4">
               <label for="inputpresent_address2">Father's/Husband Name</label>
               <input type="text" class="form-control" required  name="father_name" >
            </div>
            <div class="form-group col-md-4">
               <label for="inputpresent_address2">Mother's Name</label>
               <input type="text" class="form-control" name="mother_name" >
            </div>
			<div class="form-group col-md-2">
               <label for="inputpresent_address2">Gender</label>
               <select  class="form-control" name="gender" >
				<option value="Male"> Male </>
				<option value="Female"> Female </>
			   </select>
            </div>
			<div class="form-group col-md-2">
               <label for="inputpresent_address2">Date of Birth</label>
               <input type="date" class="form-control" name="dob" >
            </div>
			
				<div class="form-group col-md-4">
               <label for="inputCity">Highest Educational Qualification</label>
               <input type="text" class="form-control"  name="education" placeholder="Ex: HSC with GPA 4.50">
            </div>
			
			 <div class="form-group col-md-2">
               <label for="inputCity">Occupation </label>
			     <select  class="form-control" name="occupation" >
				<option value="Student"> Student </>
				<option value="Job"> Job </>
				<option value="Bussiness"> Bussiness </>
			   </select>
            </div>
		
			 <div class="form-group col-md-2">
               <label for="inputCity">Mobile</label>
               <input type="number" class="form-control"  name="mobile">
            </div>
			<div class="form-group col-md-4">
               <label for="inputCity">Guardian's Mobile</label>
               <input type="number" class="form-control"  name="mobile_guardian">
            </div>
            <div class="form-group col-md-4">
               <label for="inputCity">E-mail</label>
               <input type="email" class="form-control"  id="email"  name="email">
            </div>
			
			<div class="form-group col-md-4">
               <label for="inputEmail4">Photo (Maximum 50 KB) </label>
               <input type="file" class="form-control" name="photo"  >
            </div>
			
               <div class="form-group col-md-6">
               <label for="inputCity">Present Address</label>
			    <textarea class="form-control" name="present_address"> </textarea> 
            </div>
            <div class="form-group col-md-6">
               <label for="inputCity">Permanent Address</label>
			   <textarea class="form-control" name="permanent_address"> </textarea> 
            </div>
			 	           
			
      </div>
   </div>
</div> 
   
<div class="card mb-2">
   <div class="card-header">
      Course Information
   </div>
   <div class="card-body">
      <div class="row">
	  <div class="form-group col-md-4">
            <label for="inputEmail4"> Type  </label>
          <select name="type" id="type" required class="js-select2"  >
            <option >---</option>
                 <option value="Certificate">   Certificate </option>
				 <option value="Non-Certificate">    Non-Certificate </option>
				 <option value="Others">  Others </option>
		
          </select>
         </div>
	  <div class="form-group col-md-4">
               <label for="inputEmail4">Course</label>
              <select name="course" class="form-control js-select2"  >
                <option >---</option>
					<option value="1">Diploma In Graphic Design</option>
		<option value="4">Professional Web Design </option>
		<option value="5">Motion Graphics & VFX</option>
		<option value="7">Office Application [Basic]</option>
		<option value="8">Computer Hardware</option>
		<option value="9">Digital Marketing</option>
		<option value="11">Spoken English</option>
	              </select>
            </div>
         <div class="form-group col-md-4">
            <label for="inputthird2">Batch</label>
            <select name="batch" class="form-control js-select2"  >
               <option ></option>
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
            <label for="inputEmail4">Roll No.</label>
            <input type="number" class="form-control"   name="roll"  >
         </div>
         <div class="form-group col-md-2">
            <label for="inputEmail4">Registration No.</label>
            <input type="number" class="form-control"  name="reg"  >
         </div>
         <div class="form-group col-md-2">
            <label for="inputthird2">Academic Year</label>
            <input type="text" class="form-control"   name="academic" >
         </div>
         <div class="form-group col-md-2">
            <label for="inputthird2">Session</label>
            <input type="text" class="form-control" name="session" >
         </div>
		 
      </div>
   </div>
</div>
<div class="card mb-2">
   <div class="card-header">
      Fees Information
   </div>
   <div class="card-body">
      <div class="row">
         <div class="form-group col-md-4">
            <label for="inputthird2">Fee</label>
            <input type="number" class="form-control" name="fee" >
         </div>
       
         <div class="form-group col-md-4">
            <label for="inputCity">Discount</label>
            <input type="number" class="form-control" name="discount" >
         </div>
		 
         <div class="form-group col-md-4">
            <label for="inputCity">Payable</label>
            <input type="number" class="form-control" name="payable" >
         </div>
		 

		 
      </div>
      <div class="row">
         <div class="form-group col-md-2">
            <label for="inputCity">1st Installment</label>
            <input type="number" class="form-control"  name="first" >
         </div>
         <div class="form-group col-md-2">
            <label for="inputCity">1st Installment Date</label>
            <input type="date" class="form-control" name="first_date" >
         </div>
         <div class="form-group col-md-2">
            <label for="inputCity">2nd Installment</label>
            <input type="number" class="form-control"    name="second" >
         </div>
         <div class="form-group col-md-2">
            <label for="inputCity">2nd Installment Date </label>
            <input type="date" class="form-control" name="second_date" >
         </div>
         <div class="form-group col-md-2">
            <label for="inputCity">3rd Installment</label>
            <input type="text" class="form-control" name="third" >
         </div>
         <div class="form-group col-md-2">
            <label for="inputCity">3rd Installment Date </label>
            <input type="date" class="form-control" name="third_date" >
         </div>
      </div>
   </div>
</div>
<div class="card mb-2">
   <div class="card-header">
      Reference
   </div>
   <div class="card-body">
      <div class="row">
         <div class="form-group col-md-4">
            <label for="inputCity">Reference</label>
            <input type="text" class="form-control" name="reference" >
         </div>
         <div class="form-group col-md-6">
            <label for="inputCity">Ref. Address</label>
            <input type="text" class="form-control" name="ref_address" >
         </div>
         <div class="form-group col-md-2">
            <label for="inputCity">Ref. Mobile</label>
            <input type="number" class="form-control" name="ref_mobile" >
         </div>
      </div>
   </div>
</div>
<div class="card mb-4">
   <div class="card-body">
            <input type="hidden" class="form-control" readonly name="d_ate" value="2023-06-09"  required >
         <input type="submit" name="submit" value="Save" class="btn btn-primary ">
         <button type="reset" class="btn btn-secondary">Reset</button>
      </form>
   </div>
</div>
 </main>
</x-admin-layout>



