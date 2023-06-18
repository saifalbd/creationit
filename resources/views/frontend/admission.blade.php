<x-frontend-layout>
<!-- Breadcrumb -->
<div class="breadcrumbs" >
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <!-- Bread Menu -->
                    <div class="bread-menu">
                        <ul>
                            <li><a href="{{route('frontend')}}">Home <i class="fas fa-angle-right"></i></a> </li>
                            <li><a href="{{route('frontend.admission')}}"> Student Admission</a></li>
                        </ul>
                    </div>
                     
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / End Breadcrumb -->


<section class="call-action"  >
    <div class="container">
    
<form name="frmUser" method="post" action="" enctype="multipart/form-data"  style="background: #eeeeeea8;border: 1px solid #ccc; padding: 30px;">
 <div class="form-row">
    <div class="form-group col-md-4">
        <label for="inputEmail4">Course</label>
        <select name="course" class="form-control js-select2"  required>
                <option value="" >---</option>
                <option value="1">Diploma In Graphic Design/4 Months</option>
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
            <option value="Male"> Male </>
            <option value="Female"> Female </>
        </select>
        
        </div>
        <div class="form-group col-md-2">
        <label for="inputpresent_address2">Date of Birth</label>
        <input type="date" class="form-control" name="dob" required>
        </div>
        
        <div class="form-group col-md-4">
        <label for="inputCity">Occupation </label>
            <select  class="form-control" name="occupation" required>
            <option value="Student"> Student </>
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
        <input type="number" class="form-control"  name="mobile_guardian">
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
        <input type="file" class="form-control" name="photo"  required>
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
