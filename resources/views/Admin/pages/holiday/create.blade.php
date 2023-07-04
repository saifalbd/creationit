<x-admin-layout>
    <main>
        <div class="container-fluid">
  
           <div class="card mt-4">
  
              <div class="card-header">
                 <div class="row">
                    <div class="col-md-9 my-auto">
                       Holiday Info <i class="fas fa-angle-right"></i> Register New Holiday
                    </div>
                    <div class="col-md-3 text-right">
  
                       <a href="{{route('holiday.index')}}" class="btn btn-outline-primary"> <i class="fas fa-folder-open"></i>Holidays  List</a>
                    </div>
                 </div>
              </div>
              <div class="card mb-4">
            
                 <div class="mt-3 card-body">
                    <form name="frmUser" method="post" action="{{route('holiday.store')}}" enctype="multipart/form-data">
                       @csrf
                       <div class="form-row">
                          <div class="form-group col-md-4">
                             <label for="inputEmail4">Title</label>
                             <input type="text" class="form-control @error('title') is-invalid @enderror" required name="title" 
                             value="{{old('title')}}">
                             @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                          </div>
  
                         
                          <div class="form-group col-md-4">
                             <label for="inputCity">From Date</label>
                             <input type="date" class="form-control @error('form') is-invalid @enderror" name="from"  value="{{old('from')}}">
                             @error('from')<div class="invalid-feedback">{{ $message }}</div>@enderror
                          </div>
                        
  
                          <div class="form-group col-md-4">
                             <label for="inputCity">To Date (Optional)</label>
                             <input type="date" class="form-control @error('to') is-invalid @enderror" 
                              name="to"  value="{{old('to')}}">
                             @error('to')<div class="invalid-feedback">{{ $message }}</div>@enderror
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