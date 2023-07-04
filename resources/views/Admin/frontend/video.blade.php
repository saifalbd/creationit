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
    
      Dashboard <i class="fas fa-angle-right"></i>   Video
    </div>
    
      <div class="row">
    
        <div class="col-md-8">
          <div class="card mb-4">
            <div class="card-body">
            <div class="row">
            <div class="table-responsive">
                <table class="table table-center">
                    <thead>
                        <tr>
                            <th>Video </th>
                            <th>Banner</th>
                        </tr>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td style="width:200px" >
                                    <iframe src="{{$item->link}}" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=" frameborder="0"></iframe>
                                </td>
                                <td style="width:30%">
                                    <img src="/{{$item->photo}}" alt="" style="width: 200px">
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </thead>
                </table>
            </div>

            </div>
            </div>
          </div>
        </div>
    
          <div class="col-md-4">
            <div class="card mb-4">
              <div class="card-body">
          
      
              <form enctype="multipart/form-data" method="post" action="{{route('video.update')}}">
                @csrf
                <div class="form-group"> 
                <label> Caption:</label>
                  <input name="link" type="text" class="form-control" pattern="[^&lt;&gt;,]+" size="50"/ placeholder="https://www.youtube.com/embed/LhSDxp0oQK8">
                  @error('link')
                  <div class="alert alert-danger  mt-2">
                    <span>{{$message}}</span>
                  </div>
                @enderror
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
   
           
                <button type="submit" class="btn btn-success" ><i class="fa fa-upload" ></i> Upload</button>
           
            </form>
      </main>
    
    
    </x-admin-layout>

    {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/VYKsI5ILiaQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> --}}