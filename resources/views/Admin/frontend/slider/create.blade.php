<x-admin-layout>
<main>
               <div class="container-fluid">
<div class="container">

  @if ($message = Session::get('destroy'))
  <div class="alert alert-danger alert-block mt-5">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <strong>{{ $message }}</strong>
  </div>
  @endif
<div class="mt-4 page-title">

  Dashboard <i class="fas fa-angle-right"></i>   Slider
</div>

  <div class="row">

    <div class="col-md-8">
      <div class="card mb-4">
        <div class="card-body">
        <div class="row">

      @foreach ($data as $slider)
        
      
      <div class="col-md-3">
        <img src="/{{$slider->photo}}" class="img-thumbnail" alt="." style="height:100px;width:100%" />
       </a>
        <div>
          ({{$slider->serial}})
          <a  class ="btn btn-link text-danger" href="{{route('slider.destroy',$slider->id)}}"><i class="fa fa-times" aria-hidden="true"></i>
            Delete </a>
            
      </div>
    </div>
    @endforeach
        </div>
        </div>
      </div>
    </div>

      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-body">
      
  
          <form enctype="multipart/form-data" method="post" action="{{route('slider.store')}}">
            @csrf
            <div class="form-group"> 
            <label> Caption:</label>
              <input name="title" type="text" autofocus class="form-control" id="title" pattern="[^&lt;&gt;,]+" tabindex="0" size="50"/>
              </div>
              <div class="form-group">
              <label> Photo:</label>
        
            <input name="photo" type="file" class="form-control"  id="f" tabindex="11" />
              @error('photo')
                <div class="alert alert-danger  mt-2">
                  <span>{{$message}}</span>
                </div>
              @enderror
          </div>
              <div class="form-group">
            <label> Serial</label>
          
            <input name="serial" type="number"   required class="form-control" id="sn" pattern="[^&lt;&gt;,]+" tabindex="1" size="50"/>
            @error('serial')
              <div class="alert alert-danger mt-2">
                <span>{{$message}}</span>
              </div>
            @enderror
            </div>
            
       

            <button type="submit" class="btn btn-success" ><i class="fa fa-upload" ></i> Upload</button>
       
        </form>
  </main>


</x-admin-layout>