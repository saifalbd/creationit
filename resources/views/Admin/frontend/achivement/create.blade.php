<x-admin-layout>
    <main>
    <div class="container-fluid">
      <div class="mt-4 mb-3 page-title"> Dashboard <i class="fas fa-angle-right"></i> Post Create</div>
      @if($message = Session::get('danger'))
        <div class="alert alert-danger">{{$message}}</div>
      @endif
      <form enctype="multipart/form-data" method="post" action="{{route('achivement.store')}}">
        @csrf
        <div class="row">
        <div class="col-md-8">
        <div class="card mb-4">
        <div class="card-body">
          <div class="row">
            <div class="form-group col-md-12">
              <label>Title</label>
              <input class="form-control" name="title" type="text">
              @error('title')
                <div class="alert alert-danger mt-2"><span>{{$message}}</span></div>
              @enderror
            </div>
            <div class="form-group col-md-12">
                <label>Sub Title</label>
                <input class="form-control" name="sub_title" type="text">
                @error('sub_title')
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

            <div class="form-group col-md-12">
                <label><i class="fas fa-th" aria-hidden="true"></i> Short Description:</label>
                <select class="form-control" name="condition" required>
                    <option value="">---</option>
                    <option value="achive">Achivement</option>
                    <option value="institute">Other Institute</option>
                  </option>
                </select>

                @error('condition')
                <div class="alert alert-danger mt-2"><span>{{$message}}</span></div>
                @enderror
            </div>
            <div class="form-group col-md-12">
            <label><i class="fas fa-th" aria-hidden="true"></i> Choose Photo:</label>
            <input class="form-control" name="photo" type="file">
            @error('photo')
            <div class="alert alert-danger mt-2"><span>{{$message}}</span></div>
            @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success" ><i class="fa fa-upload" ></i> Save</button>
                <button class="btn btn-secondary" type="reset"> Reset </button>
            </div>


          </div>
        </div>
        </div>
      </div>
    
       </div>
    </form>
    </main>  
    </x-admin-layout>