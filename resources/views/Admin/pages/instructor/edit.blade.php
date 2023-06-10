<x-admin-layout>
<main>
               <div class="container-fluid">

<div class="card mt-4">
	
	<div class="card-header">
   <div class="row">
      <div class="col-md-9 my-auto">
         Instructor Info <i class="fas fa-angle-right"></i>       Edit Instructor Account
      </div>
      <div class="col-md-3 text-right">
         <a href="{{url('instructor')}}" class="btn btn-outline-primary float-right"> <i class="fas fa-folder-open"></i> Instructor List</a>
      </div>
   </div>
</div>
<div class="card mb-4">
 
     <div class="mt-3 card-body">
 <form name="frmUser" method="post" action="" enctype="multipart/form-data" >
         <div class="form-row">
            <div class="form-group col-md-3">
               <label for="inputEmail4">Name</label>
               <input type="text" class="form-control" required  name="name" value="Wasim Ahmed Nishan" >
            </div>
			<div class="form-group col-md-3">
               <label for="inputEmail4"> Specialty </label>
              
			  <select name="specialty" class="form-control"  >
                <option >Motion Graphics & VFX</option>
                              <option value="Diploma In Graphic Design">Diploma In Graphic Design</option>
                              <option value="Professional Web Design ">Professional Web Design </option>
                              <option value="Motion Graphics & VFX">Motion Graphics & VFX</option>
                              <option value="Office Application [Basic]">Office Application [Basic]</option>
                              <option value="Computer Hardware">Computer Hardware</option>
                              <option value="Digital Marketing">Digital Marketing</option>
                              <option value="Spoken English">Spoken English</option>
                             </select>
            </div>
			
            <div class="form-group col-md-3">
               <label for="inputEmail4">Designation </label>
               <input type="text" class="form-control" name="designation" placeholder=" " value="Founder & CEO"  >
            </div>    
			
			<div class="form-group col-md-3">
               <label for="inputEmail4">NID </label>
               <input type="text" class="form-control" name="nid" placeholder="অপশনাল" value=""  >
            </div>
          
            
         </div>
         <div class="form-row">
            <div class="form-group col-md-3">
               <label for="inputAddress2">Father's Name</label>
               <input type="text" class="form-control" required  name="father_name" value="Mohammed Rafik Ahmed"  >
            </div>
            <div class="form-group col-md-3">
               <label for="inputAddress2">Mother's Name</label>
               <input type="text" class="form-control" name="mother_name" value="Mrs Runa Begum"  >
            </div>
			 <div class="form-group col-md-2">
               <label for="inputCity">Mobile</label>
               <input type="number" class="form-control"  name="mobile" value="01714517239" >
            </div>
            <div class="form-group col-md-4">
               <label for="inputCity">Email</label>
               <input type="email" class="form-control" name="email" value="nishansmedia@gmail.com" >
            </div>
         </div>
         <div class="form-row">
               <div class="form-group col-md-6">
               <label for="inputCity">Address</label>
               <input type="text" class="form-control" name="address" value="Moulvibazar" >
            </div>
            
            <div class="form-group col-md-2">
               <label for="inputCity">Joining</label>
               <input type="date" class="form-control" name="joining" value="2018-12-01" >
            </div>
            <div class="form-group col-md-2">
               <label for="inputCity">Monthly Salary</label>
				  <input type="number" class="form-control" name="salary" value="30000" >
            </div>
       
	     <div class="form-group col-md-2">
               <label for="inputEmail4">Photo (Maximum 50KB)</label>
               <input type="file" class="form-control" name="photo"  >
            </div>
        
         </div>
         <hr>
         <input type="submit" name="submit" value="Submit" class="btn btn-primary ">
         <button type="reset" class="btn btn-secondary">Reset</button>
      </form>
   </div>
</div>
 </main>
</x-admin-layout>
