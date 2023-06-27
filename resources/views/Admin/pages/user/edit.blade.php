<x-admin-layout>
    <main>
       <div class="container-fluid">
 
          <div class="card mt-4">
 
             <div class="card-header">
                <div class="row">
                   <div class="col-md-9 my-auto">
                      User Info <i class="fas fa-angle-right"></i> Edit User Account
                   </div>
                   <div class="col-md-3 text-right">
 
                      <a href="{{route('user.index')}}" class="btn btn-outline-primary"> <i class="fas fa-folder-open"></i>User  List</a>
                   </div>
                </div>
             </div>
             <div class="card mb-4">
           
                <div class="mt-3 card-body">
                   <form name="frmUser" method="post" action="{{route('user.update',['user'=>$user->id])}}" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                      <div class="form-row">
                         <div class="form-group col-md-3">
                            <label for="inputEmail4">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" required name="name" value="{{$user->name}}">
                            @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                         </div>
 
                        
                         <div class="form-group col-md-2">
                            <label for="inputCity">Mobile</label>
                            <input type="number" class="form-control @error('mobile') is-invalid @enderror" name="mobile"  value="{{$user->mobile}}">
                            @error('mobile')<div class="invalid-feedback">{{ $message }}</div>@enderror
                         </div>
                       
 
                         <div class="form-group col-md-4">
                            <label for="inputCity">E-mail</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"  value="{{$user->email}}">
                            @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                         </div>

                        
 
 
 
                      </div>

                  
                      <div class="form-row">
                         
                        <div class="form-group col-md-3">
                            <label for="inputCity">Role</label>
                            <select type="email" class="form-control @error('role') is-invalid @enderror"  name="role">
                                <option value="">Select Role</option>
                                <option value="admin" @selected($user->role=='admin')>Admin</option>
                                <option value="hr" @selected($user->role=='hr')>Human Resources (HR)</option>
                            </select>
                            @error('role')<div class="invalid-feedback">{{ $message }}</div>@enderror
                         </div>
                         <div class="form-group col-md-2">
                            <label for="inputCity">Password (Optional)</label>
                            <input type="text" class="form-control @error('password') is-invalid @enderror" name="password"  value="{{old('password')}}">
                            @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                         </div>
                       

                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Photo (Maximum 50 KB) </label>
                            <input type="file" class="form-control" name="photo"   value="{{old('photo')}}">
                            @error('photo')<div class="invalid-feedback">{{ $message }}</div>@enderror
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