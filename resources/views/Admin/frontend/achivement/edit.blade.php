<x-admin-layout>
    <main>
    <div class="container-fluid">
      <div class="mt-4 mb-3 page-title"> Dashboard <i class="fas fa-angle-right"></i> Post Create</div>
      @if($message = Session::get('danger'))
        <div class="alert alert-danger">{{$message}}</div>
      @endif
      <form enctype="multipart/form-data" method="post" action="{{route('achivement.update',$data->id)}}">
        @method('put')
        @csrf
        <div class="row">
        <div class="col-md-8">
        <div class="card mb-4">
        <div class="card-body">
          <div class="row">
            <div class="form-group col-md-12">
              <label>Title</label>
              <input class="form-control" name="title" type="text" value="{{$data->title}}">
              @error('title')
                <div class="alert alert-danger mt-2"><span>{{$message}}</span></div>
              @enderror
            </div>
            <div class="form-group col-md-12">
                <label>Sub Title</label>
                <input class="form-control" name="sub_title" type="text" value="{{$data->sub_title}}">
                @error('sub_title')
            <div class="alert alert-danger mt-2"><span>{{$message}}</span></div>
            @enderror
            </div>

            <div class="form-group col-md-12">
              <label> Sub title:</label>
              <textarea class="form-control" name="description" cols="40" rows="4" placeholder="Short drescription about this post..."> {{$data->sub_title}} </textarea>
              @error('description')
              <div class="alert alert-danger mt-2"><span>{{$message}}</span></div>
            @enderror
            </div>

            <div class="form-group col-md-12">
                <label> Condition :</label>
                <select class="form-control" name="condition" required>
                    <option value="">---</option>
                    @if ($data->condition == 'achive')
                    <option value="achive" selected>Achivement</option>
                    @else
                    <option value="achive">Achivement</option>
                    @endif

                    @if ($data->condition == 'institute')
                    <option value="institute" selected>Other Institute</option>
                    @else
                    <option value="institute">Other Institute</option>
                    @endif
                    
                    
                  </option>
                </select>

                @error('condition')
                <div class="alert alert-danger mt-2"><span>{{$message}}</span></div>
                @enderror
            </div>
            <div class="form-group col-md-12">
            <label>Choose Photo:</label>
            <input class="form-control" name="photo" type="file">
            <img src="/{{$data->photo}}" alt="" style="height:100px;width:150px;margin:20px">
            @error('photo')
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
    </x-admin-layout>