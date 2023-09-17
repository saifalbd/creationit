<x-frontend-layout>

<section class="call-action"  >
    <div class="container">
    
<form name="frmUser" method="post" action="{{route('pendingStore')}}" enctype="multipart/form-data"  style="background: #eeeeeea8;border: 1px solid #ccc; padding: 30px;">
 
 @csrf
 <x-error-alert></x-error-alert>
    <div class="form-row">
    <div class="form-group col-md-4">
        <label for="inputEmail4">Course</label>
        <select name="course_id" class="form-control js-select2"  required>
            
               <option value="" >---</option>
                @foreach ($courses as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>  
                @endforeach
            </select>
        </div>	
                

        <div class="form-group col-md-4">
        <label for="inputEmail4">Name</label>
        <input type="text" class="form-control" required  name="name" required>
        </div>

        

        <div class="form-group col-md-4">
        <label for="inputpresent_address2">Father's/Husband Name</label>
        <input type="text" class="form-control" required  name="father_name" required >
        </div>
        <div class="form-group col-md-4">
        <label for="inputpresent_address2">Mother's Name</label>
        <input type="text" class="form-control" name="mother_name" required>
        </div>
        <div class="form-group col-md-2">
        <label for=" ">Gender</label>
        
        <select  class="form-control" name="gender" required>
            <option value="Male"> Male </option>
            <option value="Female"> Female </option>
        </select>
        
        </div>
        <div class="form-group col-md-2">
        <label for="inputpresent_address2">Date of Birth</label>
        <input type="date" class="form-control" name="date_of_birth" required>
        </div>
        
        <div class="form-group col-md-4">
        <label for="inputCity">Occupation </label>
            <select  class="form-control" name="occupation" required>
               <option value="Student"> Student </option>
            <option value="Job"> Job </option>
            <option value="Bussiness"> Bussiness </option>
        </select>
        </div>
        
        <div class="form-group col-md-4">
        <label for="inputCity">Highest Educational Qualification</label>
        <input type="text" class="form-control"  name="education" placeholder="Ex: HSC with GPA 4.50" required>
        </div>
        <div class="form-group col-md-2">
        <label for="inputCity">Mobile</label>
        <input type="number" class="form-control"  name="mobile" required>
        </div>
        <div class="form-group col-md-2">
        <label for="inputCity">Guardian's Mobile</label>
        <input type="number" class="form-control"  name="guardian_mobile">
        </div>
        <div class="form-group col-md-4">
        <label for="inputCity">E-mail</label>
        <input type="email" class="form-control"  id="email"  name="email">
        </div>

        <div class="form-group col-md-6">
        <label for="inputCity">Present Address</label>

        <textarea class="form-control" name="present_address" required> </textarea> 
        </div>
        <div class="form-group col-md-6">
        <label for="inputCity">Permanent Address</label>
        <textarea class="form-control" name="permanent_address"> </textarea> 
    
        </div>

        <div class="form-group col-md-6">
        <label for="inputEmail4">Photo (Maximum 50 KB) </label>
        <input type="file" class="form-control" name="photo" >
        </div>	  
        
        <div class="form-group col-md-6">
        <label for="inputEmail4"> Application Date </label>
            <input type="date" class="form-control"   name="d_ate" required >
        </div>

        </div>
        <hr>
        <input type="hidden" class="form-control" readonly name="d_ate" value="2023-06-16"  required >
        <input type="submit" name="submit" value="Submit" id="register" class="bizwheel-btn">

        </form>
    </div>
</div>
</section>	


</x-frontend-layout>
