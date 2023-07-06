<x-admin-layout>
<main>
<div class="container-fluid">
  <div class="mt-4 mb-3 page-title"> Dashboard <i class="fas fa-angle-right"></i> Post Create</div>
  @if($message = Session::get('danger'))
    <div class="alert alert-danger">{{$message}}</div>
  @endif
  <form enctype="multipart/form-data" method="post" action="{{route('page.store')}}">
    @csrf
    <div class="row">
    <div class="col-md-8">
    <div class="card mb-4">
    <div class="card-body">
      <div class="row">
        <div class="form-group col-md-12">
          <label>PAGE TITLE</label>
          <input class="form-control" name="page_title" type="text">
          @error('page_title')
            <div class="alert alert-danger mt-2"><span>{{$message}}</span></div>
          @enderror
        </div>
        <div class="form-group col-md-12">
          <textarea class="form-control" name="description" cols="40" rows="12" id="text_editor"> </textarea>
        @error('description')
          <div class="alert alert-danget mt-2"><span>{{$message}}</span></div>
        @enderror
        </div>
        <div class="form-group col-md-12">
          <label><i class="fas fa-th" aria-hidden="true"></i> Meta Description:</label>
          <textarea class="form-control" name="meta_desc" cols="40" rows="4" placeholder="Short drescription about this page..."> </textarea>
          @error('meta_desc')
          <div class="alert alert-danget mt-2"><span>{{$message}}</span></div>
        @enderror
        </div>
        <div class="form-group col-md-12">
          <label><i class="fas fa-key" aria-hidden="true"></i> Keywords:</label>
          <textarea class="form-control" name="keywords" cols="40" rows="3" placeholder="Focus words of this page..."> </textarea>
          @error('keywords')
          <div class="alert alert-danget mt-2"><span>{{$message}}</span></div>
        @enderror
        </div>
      </div>
    </div>
    </div>
  </div>

  <div class="col-md-4">
  <div class="card mb-4">
  <div class="card-body">

    <label><i class="fas fa-list"></i> Menu</label>
    <div class="form-group">
      <select class="form-control" name="menu" required>
          <option value="">---</option>
          <option value="1">About</option>
          <option value="2">News</option>
          <option value="3">Testimonial</option>
          <option value="4">Founder</option>

        </option>
      </select>
      @error('menu')
      <div class="alert alert-danget mt-2"><span>{{$message}}</span></div>
    @enderror
    </div>

    <label><i class="fas fa-image"></i> PHOTO (JPG)</label>
    <div class="form-group">
      <input class="form-control" name="photo" type="file">
      @error('photo')
      <div class="alert alert-danget mt-2"><span>{{$message}}</span></div>
    @enderror
    </div>


    <div class="form-group">
      <label><i class="fa fa-paperclip" aria-hidden="true"></i> ATTACHMENT ( PDF)</label>
      <input name="file" type="file" class="form-control" />
      @error('attachment')
      <div class="alert alert-danget mt-2"><span>{{$message}}</span></div>
    @enderror
    </div>
    <div class="card-footer">
       <button type="submit" class="btn btn-success" ><i class="fa fa-upload" ></i> Save</button>
      <button class="btn btn-secondary" type="reset"> Reset </button>
    </div>
   </div>
</form>
</main>  

<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>


<!-- partial -->
<script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>


<style>
  .ck-rounded-corners .ck.ck-editor__main > .ck-editor__editable, .ck.ck-editor__main > .ck-editor__editable.ck-rounded-corners {
	border-radius: var(--ck-border-radius);
	border-top-left-radius: 0;
	border-top-right-radius: 0;
	height: 200px;
}
</style>

<script>
  ClassicEditor
      .create( document.querySelector( '#text_editor' ) )
      .catch( error => {
          console.error( error );
      } );
</script>


</x-admin-layout>