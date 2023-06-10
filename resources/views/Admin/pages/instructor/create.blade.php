<x-admin-layout>
   <main>
      <div class="container-fluid">

         <div class="card mt-4">

            <div class="card-header">
               <div class="row">
                  <div class="col-md-9 my-auto">
                     Instructor Info <i class="fas fa-angle-right"></i> Create Instructor Account
                  </div>
                  <div class="col-md-3 text-right">

                     <a href="list_instructor.php" class="btn btn-outline-primary"> <i class="fas fa-folder-open"></i> Instructor List</a>
                  </div>
               </div>
            </div>
            <div class="card mb-4">
               <!---div class="card-header">
       <i class="fas fa-user-plus mr-1"></i>
       গ্রাহক এন্ট্রি
       </div--->
               <div class="mt-3 card-body">
                  <form name="frmUser" method="post" action="{{route('instructor.store')}}" enctype="multipart/form-data">
                     @csrf
                     <div class="form-row">
                        <div class="form-group col-md-3">
                           <label for="inputEmail4">Name</label>
                           <input type="text" class="form-control" required name="name" value="{{old('name')}}">
                        </div>

                        <div class="form-group col-md-3">
                           <label for="inputEmail4"> Specialty</label>
                           <select name="specialty" class="form-control" value="{{old('specialty')}}">
                              <option></option>
                              <option value="Diploma In Graphic Design">Diploma In Graphic Design</option>
                              <option value="Professional Web Design ">Professional Web Design </option>
                              <option value="Motion Graphics & VFX">Motion Graphics & VFX</option>
                              <option value="Office Application [Basic]">Office Application [Basic]</option>
                              <option value="Computer Hardware">Computer Hardware</option>
                              <option value="Digital Marketing">Digital Marketing</option>
                              <option value="Spoken English">Spoken English</option>
                           </select>

                        </div>

                        <div class="form-group col-md-2">
                           <label for="inputEmail4">NID</label>
                           <input type="text" class="form-control" name="nid" value="{{old('nid')}}">
                        </div>

                        <div class="form-group col-md-4">
                           <label for="inputEmail4">Designation</label>
                           <input type="text" class="form-control" name="designation" value="{{old('designation')}}">
                        </div>



                     </div>
                     <div class="form-row">
                        <div class="form-group col-md-3">
                           <label for="inputAddress2">Father's Name</label>
                           <input type="text" class="form-control" required name="father_name" value="{{old('father_name')}}">
                        </div>
                        <div class="form-group col-md-3">
                           <label for="inputAddress2">Mother's Name</label>
                           <input type="text" class="form-control" name="mother_name"  value="{{old('mother_name')}}">
                        </div>
                        <div class="form-group col-md-2">
                           <label for="inputCity">Mobile</label>
                           <input type="number" class="form-control" name="mobile"  value="{{old('mobile')}}">
                        </div>
                        <div class="form-group col-md-4">
                           <label for="inputCity">E-mail</label>
                           <input type="email" class="form-control" id="email" name="email"  value="{{old('email')}}">
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="form-group col-md-8">
                           <label for="inputCity">Address</label>
                           <input type="text" class="form-control" name="address" value="{{old('address')}}">
                        </div>

                        <div class="form-group col-md-2">
                           <label for="inputCity">Joining Date</label>
                           <input type="date" class="form-control" name="join_date" value="{{old('join_date')}}">
                        </div>
                        <div class="form-group col-md-2">
                           <label for="inputCity">Monthly Salary</label>
                           <input type="number" class="form-control" name="salary"  value="{{old('salary')}}">
                        </div>

                     </div>

                     <div class="form-group col-md-4">
                        <label for="inputEmail4">Photo (Maximum 50 KB) </label>
                        <input type="file" class="form-control" name="photo"   value="{{old('photo')}}">
                     </div>


                     <hr>
                     <input type="submit" name="submit" value="Submit" id="register" class="btn btn-primary ">
                     <button type="reset" class="btn btn-secondary">Reset</button>
                  </form>
               </div>
            </div>
   </main>
</x-admin-layout>