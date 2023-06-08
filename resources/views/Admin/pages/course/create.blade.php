<x-admin-layout>
<main>
                <div class="container-fluid"> 
 
 
 <div class="card mb-4 mt-4">
     <div class="card-header">
    <div class="row">
       <div class="col-md-9 my-auto">
         <i class="far fa-list-alt"></i>  Course Information <i class="fas fa-angle-right"></i> Course Entry
       </div>
       <div class="col-md-3 text-right">
   
          <a href="{{route('course.index)}}" class="btn btn-outline-primary"> <i class="fas fa-folder-open"></i> Course List</a>
       </div>
    </div>
    </div>
    <div class="mt-3 card-body">
  <form name="frmUser" method="post" action="" enctype="multipart/form-data" >
          <div class="form-row">
             <div class="form-group col-md-4">
                <label for="inputEmail4">Course Name</label>
                <input type="text" class="form-control" required  name="name" required >
             </div> 
             <div class="form-group col-md-2">
                <label for="inputEmail4"> Duration</label>
                 <input type="text" class="form-control" required  name="duration"  placeholder="Month" required >
               
             </div>
                <div class="form-group col-md-2">
                <label for="inputAddress2">Fee</label>
                <input type="text" class="form-control" required  name="fee" required >
             </div>
                  <div class="form-group col-md-4">
                <label for="inputAddress2">Instructor</label>
                
                <select name="instructor" class="form-control js-select2"  >
                    <option value="">---</option>
                    <option value="1">Wasim Ahmed Nishan</option>
                    <option value="2">M Shamsul Islam </option>
                    <option value="3">Arpa Paul</option>
                    <option value="4">Faisal Ahmed Shahi</option>
                    <option value="5">Durga Moni</option>
                    <option value="6">Rubel Ahmed</option>
                    <option value="7">Abdulla khan</option>
                </select>
             </div>
              <div class="form-group col-md-12">
                <label for="inputEmail4">Details</label>
             
                <textarea name="details"  class="form-control" cols="20" rows="6" id="code_preview0"></textarea>
             </div>
             
            
             <div class="form-group col-md-4">
                <label for="inputEmail4">Photo (Maximum 50 KB) </label>
                <input type="file" class="form-control" name="photo"  >
             </div>
            
          </div>
          <hr>
          <input type="submit" name="submit" value="Submit" id="register" class="btn btn-primary ">
          <button type="reset" class="btn btn-secondary">Reset</button>
       </form>
    </div>
 </div>
  </main>
 
</x-admin-layout>