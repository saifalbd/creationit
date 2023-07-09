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
       .ck-rounded-corners .ck.ck-editor__main > .ck-editor__editable, .ck.ck-editor__main > .ck-editor__editable.ck-rounded-corners {
	border-radius: var(--ck-border-radius);
	border-top-left-radius: 0;
	border-top-right-radius: 0;
	height: 200px;
}
   </style>
   @endslot
   <main>
   <div class="container-fluid"> 
    
    
    <div class="card mb-4 mt-4">
        <div class="card-header">
       <div class="row">
          <div class="col-md-9 my-auto">
            <i class="far fa-list-alt"></i>  Course Information <i class="fas fa-angle-right"></i> Course Edit
          </div>
          <div class="col-md-3 text-right">
      
             <a href="{{route('course.index')}}" class="btn btn-outline-primary"> <i class="fas fa-folder-open"></i> Course List</a>
          </div>
       </div>
       </div>
       <div class="mt-3 card-body">
     <form name="frmUser" method="post" action="{{route('course.update',['course'=>$course->id])}}" enctype="multipart/form-data" >
      @method('PUT')
      @csrf
             <div class="form-row">
                <div class="form-group col-md-4">
                   <label for="inputEmail4">Course Name</label>
                   <input type="text" class="form-control  @error('name') is-invalid @enderror"   name="name" value="{{$course->name}}"   required>
                   @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div> 
                <div class="form-group col-md-2">
                   <label for="inputEmail4"> Duration</label>
                    <input type="text" class="form-control @error('duration') is-invalid @enderror"   name="duration" value="{{$course->duration}}"  placeholder="Month" required >
                    @error('duration')<div class="invalid-feedback">{{ $message }}</div>@enderror
                  
                </div>
                   <div class="form-group col-md-2">
                   <label for="inputAddress2">Fee</label>
                   <input type="text" class="form-control @error('fee') is-invalid @enderror"   name="fee" value="{{$course->fee}}"  required>
                   @error('fee')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div id="insMulti">
                  @foreach($course->instructors->pluck('id')->toArray() as $id)
                  <input type="hidden" name="instructors[]" value="{{$id}}">
                  @endforeach
                </div>
                <div class="form-group col-md-12">
                  
                  <label for="inputAddress2">Instructor</label>
                <select name="field1" id="field1" multiple 
                onchange="insMulti(Array.from(this.selectedOptions).map(x=>x.value??x.text))" 
                multiselect-hide-x="true" name="instructor_id" class="form-control @error('instructors') is-invalid @enderror"   required>
                @foreach($instructors as $instructor)
                <option value="{{$instructor->id}}" @selected(in_array($instructor->id,$course->instructors->pluck('id')->toArray()))>{{$instructor->name}}</option>
                @endforeach
                </select>
                @error('instructors')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                    
                 <div class="form-group col-md-12">
                   <label for="inputEmail4">Details</label>
                   <textarea name="details" id="text_editor" class="form-control @error('details') is-invalid @enderror" cols="20" rows="6" 
                   id="code_preview0">{{$course->details}}</textarea>
                   @error('details')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                
               
                <div class="form-group with-avatar col-md-6" id="avatarFgroup">
                  <div class="avarar-box">
                      <img src="{{$course->avatar->url}}" alt="" srcset="">
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
     @slot('script')
     <script src="{{asset('assets/js/multi-select.js')}}"></script>
     <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>
   <script>
   ClassicEditor
       .create( document.querySelector( '#text_editor' ) )
       .catch( error => {
           console.error( error );
       } );
 </script>


     @endslot
    
   </x-admin-layout>