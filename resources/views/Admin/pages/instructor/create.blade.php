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

                     <a href="{{route('instructor.index')}}" class="btn btn-outline-primary"> <i class="fas fa-folder-open"></i> Instructor List</a>
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
                           <input type="text" class="form-control @error('name') is-invalid @enderror" required name="name" value="{{old('name')}}">
                           @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-group col-md-3">
                           <label for="inputEmail4"> Specialty</label>
                           <select name="specialty" class="form-control @error('specialty') is-invalid @enderror" value="{{old('specialty')}}">
                              <option value="">---</option>
                              @foreach (["Diploma In Graphic Design","Professional Web Design",
                              "Office Application [Basic]","Computer Hardware",
                              "Computer Hardware",
                              "Digital Marketing",
                              "Spoken English"] as $item)
                                 <option value="{{$item}}" @selected($item==old('specialty'))>{{$item}}</option> 
                              @endforeach
                              
                           </select>
                           @error('specialty')<div class="invalid-feedback">{{ $message }}</div>@enderror

                        </div>

                        <div class="form-group col-md-2">
                           <label for="inputEmail4">NID</label>
                           <input type="text" class="form-control  @error('nid') is-invalid @enderror" name="nid" value="{{old('nid')}}">
                           @error('nid')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-group col-md-4">
                           <label for="inputEmail4">Designation</label>
                           <input type="text" class="form-control @error('designation') is-invalid @enderror" name="designation" value="{{old('designation')}}">
                           @error('designation')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>



                     </div>
                     <div class="form-row">
                        <div class="form-group col-md-3">
                           <label for="inputAddress2">Father's Name</label>
                           <input type="text" class="form-control @error('father_name') is-invalid @enderror" required name="father_name" value="{{old('father_name')}}">
                           @error('father_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group col-md-3">
                           <label for="inputAddress2">Mother's Name</label>
                           <input type="text" class="form-control @error('mother_name') is-invalid @enderror" name="mother_name"  value="{{old('mother_name')}}">
                           @error('mother_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group col-md-2">
                           <label for="inputCity">Mobile</label>
                           <input type="number" class="form-control @error('mobile') is-invalid @enderror" name="mobile"  value="{{old('mobile')}}">
                           @error('mobile')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group col-md-4">
                           <label for="inputCity">E-mail</label>
                           <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"  value="{{old('email')}}">
                           @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="form-group col-md-8">
                           <label for="inputCity">Address</label>
                           <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{old('address')}}">
                           @error('address')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-group col-md-2">
                           <label for="inputCity">Joining Date</label>
                           <input type="date" class="form-control @error('join_date') is-invalid @enderror" name="join_date" value="{{old('join_date')}}">
                           @error('join_date')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group col-md-2">
                           <label for="inputCity">Monthly Salary</label>
                           <input type="number" class="form-control  @error('salary') is-invalid @enderror" name="salary"  value="{{old('salary')}}">
                           @error('salary')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                     </div>

                     <div class="form-group col-md-4">
                        <label for="inputEmail4">Photo (Maximum 50 KB) </label>
                        <input type="file" class="form-control" name="photo"   value="{{old('photo')}}">
                        @error('photo')<div class="invalid-feedback">{{ $message }}</div>@enderror
                     </div>


                     <hr>
                     <input type="submit" name="submit" value="Submit" id="register" class="btn btn-primary ">
                     <button type="reset" class="btn btn-secondary">Reset</button>
                  </form>
               </div>
            </div>
   </main>
</x-admin-layout>