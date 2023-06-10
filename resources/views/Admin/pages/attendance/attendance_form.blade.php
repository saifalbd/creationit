<x-admin-layout>
<main>
               <div class="container-fluid"> 

<div class="card mt-4">
	
	<div class="card-header">
   <div class="row">
      <div class="col-md-9 my-auto">
        <i class="far fa-list-alt"></i>  Attedance   <i class="fas fa-angle-right"></i> Attedance Entry
      </div>
      <div class="col-md-3 text-right">
  
         <a href="{{route('attendance.index')}}" class="btn btn-outline-primary"> <i class="fas fa-folder-open text-warning"></i> Attedance Record</a>
      </div>
   </div>
</div>
<div class="card mb-4">
 
   <div class="mt-3 card-body">
   <div class="alert alert-warning">
   Uncheck only those that were not present
   </div>
 <form name="frmUser" method="post" action="" enctype="multipart/form-data" >
         <div class="form-row">
						
			<div class="form-group col-md-6">
			<div style="border: 1px solid #eee; padding: 8px; border-radius: 12px;line-height: 30px;">
			 <input type="text" hidden name="admission_id[]" value="128"> 
			 <strong> 128.</strong>  Tawfiqua Islam 
			
			<div class="row">
			<div  class="col-sm-3">
			
			     <select name="status[]"  class="form-control status" required  >
          <option value="Present">Present</option>
          <option value="Absent">Absent</option>
          
        </select>
		  </div>	 
			<div class="col-sm-3">
			<input type="text" class="form-control" name="remark[]" placeholder="Remark"> 
			</div>
			<div class="col-sm-3">
				<input type="time" class="form-control" name="intime[]" placeholder="In Time"> 
		  </div>
		<div class="col-sm-3">
			<input type="time" class="form-control" name="outtime[]" placeholder="Out Time"> 
		  
		  </div>
		  </div>
            </div>
            </div>
			
						
			<div class="form-group col-md-6">
			<div style="border: 1px solid #eee; padding: 8px; border-radius: 12px;line-height: 30px;">
			 <input type="text" hidden name="admission_id[]" value="170"> 
			 <strong> 170.</strong>  Abida Islam 
			
			<div class="row">
			<div  class="col-sm-3">
			
			     <select name="status[]"  class="form-control status" required  >
          <option value="Present">Present</option>
          <option value="Absent">Absent</option>
          
        </select>
		  </div>	 
			<div class="col-sm-3">
			<input type="text" class="form-control" name="remark[]" placeholder="Remark"> 
			</div>
			<div class="col-sm-3">
				<input type="time" class="form-control" name="intime[]" placeholder="In Time"> 
		  </div>
		<div class="col-sm-3">
			<input type="time" class="form-control" name="outtime[]" placeholder="Out Time"> 
		  
		  </div>
		  </div>
            </div>
            </div>
			
						
			<div class="form-group col-md-6">
			<div style="border: 1px solid #eee; padding: 8px; border-radius: 12px;line-height: 30px;">
			 <input type="text" hidden name="admission_id[]" value="172"> 
			 <strong> 172.</strong>  Shah Sadia Tasnim 
			
			<div class="row">
			<div  class="col-sm-3">
			
			     <select name="status[]"  class="form-control status" required  >
          <option value="Present">Present</option>
          <option value="Absent">Absent</option>
          
        </select>
		  </div>	 
			<div class="col-sm-3">
			<input type="text" class="form-control" name="remark[]" placeholder="Remark"> 
			</div>
			<div class="col-sm-3">
				<input type="time" class="form-control" name="intime[]" placeholder="In Time"> 
		  </div>
		<div class="col-sm-3">
			<input type="time" class="form-control" name="outtime[]" placeholder="Out Time"> 
		  
		  </div>
		  </div>
            </div>
            </div>
			
						
			<div class="form-group col-md-6">
			<div style="border: 1px solid #eee; padding: 8px; border-radius: 12px;line-height: 30px;">
			 <input type="text" hidden name="admission_id[]" value="176"> 
			 <strong> 176.</strong>  Mahbubul Alam 
			
			<div class="row">
			<div  class="col-sm-3">
			
			     <select name="status[]"  class="form-control status" required  >
          <option value="Present">Present</option>
          <option value="Absent">Absent</option>
          
        </select>
		  </div>	 
			<div class="col-sm-3">
			<input type="text" class="form-control" name="remark[]" placeholder="Remark"> 
			</div>
			<div class="col-sm-3">
				<input type="time" class="form-control" name="intime[]" placeholder="In Time"> 
		  </div>
		<div class="col-sm-3">
			<input type="time" class="form-control" name="outtime[]" placeholder="Out Time"> 
		  
		  </div>
		  </div>
            </div>
            </div>
			
						
			<div class="form-group col-md-6">
			<div style="border: 1px solid #eee; padding: 8px; border-radius: 12px;line-height: 30px;">
			 <input type="text" hidden name="admission_id[]" value="181"> 
			 <strong> 181.</strong>  Sadia Chowdhury 
			
			<div class="row">
			<div  class="col-sm-3">
			
			     <select name="status[]"  class="form-control status" required  >
          <option value="Present">Present</option>
          <option value="Absent">Absent</option>
          
        </select>
		  </div>	 
			<div class="col-sm-3">
			<input type="text" class="form-control" name="remark[]" placeholder="Remark"> 
			</div>
			<div class="col-sm-3">
				<input type="time" class="form-control" name="intime[]" placeholder="In Time"> 
		  </div>
		<div class="col-sm-3">
			<input type="time" class="form-control" name="outtime[]" placeholder="Out Time"> 
		  
		  </div>
		  </div>
            </div>
            </div>
			
					 

            </div>
         
       
         <hr>
         <input type="submit" name="save" value="Submit" id="register" class="btn btn-primary ">
         <button type="reset" class="btn btn-secondary">Reset</button>
      </form>
   </div>
</div>
 </main>
</x-admin-layout>
