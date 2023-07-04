<x-admin-layout>
   @slot('style')
   <style>
       .form-group .avarar-box{
           display: none;
       }
       .form-group.with-avatar{
           display: grid;
           grid-template-columns: 100px auto;
       }

       .form-group.with-avatar .avarar-box{
           display: flex;
           justify-content: center;
           align-items: center;
       }
       .form-group.with-avatar .avarar-box img{
           max-width: 90px;
           max-height: 90px;
       }
   </style>
   @endslot
<main>
<div class="container-fluid"> 
 
 
 <div class="card mb-4 mt-4">
     <div class="card-header">
    <div class="row">
       <div class="col-md-9 my-auto">
         <i class="far fa-list-alt"></i>  Course Information <i class="fas fa-angle-right"></i> Course Entry
       </div>
       <div class="col-md-3 text-right">
   
          <a href="{{route('course.index')}}" class="btn btn-outline-primary"> <i class="fas fa-folder-open"></i> Course List</a>
       </div>
    </div>
    </div>
    <div class="mt-3 card-body">
  <form name="frmUser" method="post" action="{{route('course.store')}}" enctype="multipart/form-data" >
   @csrf
          <div class="form-row">
             <div class="form-group col-md-4">
                <label for="inputEmail4">Course Name</label>
                <input type="text" class="form-control  @error('name') is-invalid @enderror"   name="name" value="{{old('name')}}"   required>
                @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
             </div> 
             <div class="form-group col-md-2">
                <label for="inputEmail4"> Duration</label>
                 <input type="text" class="form-control @error('duration') is-invalid @enderror"   name="duration" value="{{old('duration')}}"  placeholder="Month" required >
                 @error('duration')<div class="invalid-feedback">{{ $message }}</div>@enderror
               
             </div>
                <div class="form-group col-md-2">
                <label for="inputAddress2">Fee</label>
                <input type="text" class="form-control @error('fee') is-invalid @enderror"   name="fee" value="{{old('fee')}}"  required>
                @error('fee')<div class="invalid-feedback">{{ $message }}</div>@enderror
             </div>
                  <div class="form-group col-md-4">
                <label for="inputAddress2">Instructor</label>
                
                <select name="instructor_id" class="form-control js-select2 @error('instructor_id') is-invalid @enderror"   required>
                    <option value="">---</option>
                    @foreach($instructors as $instructor)
                    <option value="{{$instructor->id}}" @selected(old('instructor_id')==$instructor->id)>{{$instructor->name}}</option>
                    @endforeach
                </select>
                @error('instructor_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
             </div>
              <div class="form-group col-md-12">
                <label for="inputEmail4">Details</label>
             
                <textarea name="details"  class="form-control @error('details') is-invalid @enderror" cols="20" rows="6" id="code_preview0">{{old('details')}}</textarea>
                @error('details')<div class="invalid-feedback">{{ $message }}</div>@enderror
             </div>
             
            
             <div class="form-group with-avatar col-md-6" id="avatarFgroup">
               <div class="avarar-box">
                   <img src="{{asset('assets/img/avatar.png')}}" alt="" srcset="">
               </div>
              <div>
               <label for="inputEmail4">Photo (Maximum 250 KB) </label>
               <input type="file" class="form-control @error('photo') is_invalid @enderror" name="photo"
                      value="{{ old('photo') }}" onchange="imageChange(event,'avatarFgroup')">
                      @error('photo') <div class="invalid-feedback">{{$message}}}</div> @enderror
              </div>
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