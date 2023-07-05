<x-admin-layout>
    <main>
    <div class="container-fluid">
      <div class="mt-4 mb-3 page-title"> Dashboard <i class="fas fa-angle-right"></i> Hero Section Create</div>
      @if($message = Session::get('danger'))
        <div class="alert alert-danger">{{$message}}</div>
      @endif
      <form enctype="multipart/form-data" method="post" action="{{route('hero.store')}}">
        @csrf
        <div class="row">
        <div class="col-md-12">
        <div class="card mb-4">
        <div class="card-body">
          <div class="row">
            <div class="form-group col-md-6">
              <label>Title</label>
              <input class="form-control" name="title" type="text">
              @error('title')
                <div class="alert alert-danger mt-2"><span>{{$message}}</span></div>
              @enderror
            </div>
            <div class="form-group col-md-6">
                <label><i class="fas fa-th" aria-hidden="true"></i> Choose Photo:</label>
                <input class="form-control" name="photo" type="file">
                @error('photo')
                <div class="alert alert-danger mt-2"><span>{{$message}}</span></div>
                @enderror
                </div>

            <div class="form-group col-md-12">
              <label><i class="fas fa-th" aria-hidden="true"></i> Short Description:</label>
              <textarea class="form-control" name="description" cols="40" rows="4" placeholder="Short drescription about this post..."> </textarea>
              @error('description')
              <div class="alert alert-danger mt-2"><span>{{$message}}</span></div>
            @enderror
            </div>

            
            
            <div class="form-group">
                <button type="submit" class="btn btn-success" ><i class="fa fa-upload" ></i> Update</button>
                <button class="btn btn-secondary" type="reset"> Reset </button>
            </div>


          </div>
        </div>
        </div>
      </div>
    
       </div>
    </form>
    </main>  

    <main>
        <div class="container-fluid">
 
           @if($message = Session::get('success'))
          <div class="alert alert-success mt-3">{{$message}}</div>
          @elseif (($message = Session::get('danger')))
          <div class="alert alert-danger mt-3">{{$message}}</div>
           @endif


           <div class="card mb-4">
              <div class="card-body">
                 <div class="table-responsive">
                    <br>
                    <table class="table table-hover " id="dataTable" width="100%" cellspacing="0">
                       <thead>
                          <tr>
                             <th>Hero Section Title</th>
                             <th>Photo</th>
                             <th>Description</th>

                          </tr>
                       </thead>
                       <tbody>
                        
                          <tr>
                           <td>{{$data->title}}</td>
                           <td>
                              <img src="/{{$data->photo}}" alt="" style="width: 70px">
                           </td>
                           <td>{{$data->description}}</td>
 
                          </tr>
                       </tbody>
                       <tfoot>
                    </table>
                 </div>
              </div>
           </div>

     </main>
  


    </x-admin-layout>