<x-admin-layout>
<main>
  <div class="container-fluid">
    
<div class="mt-4 page-title">
  <div class="row">
    <div class="col-md-9 my-auto">
        <i class="far fa-list-alt"></i> Page Information <i class="fas fa-angle-right"></i> Page List
    </div>
        <div class="col-md-3 my-auto">
        <a href="{{route('page.create')}}" class="btn btn-outline-primary  float-right"> <i class="fas fa-plus-square"></i> Add Post</a>
    </div>
  </div>
@if($message = Session::get('danger'))
  <div class="alert alert-danger mt-3">{{$message}}</div>
@endif

<div class="card mb-4">
<div class="card-body">
<div class="table-responsive">
<br>
<table class="table table-hover " id="dataTable" width="100%" cellspacing="0">
 <thead>
   <tr>
     <th width="20%" align="left" valign="top">PAGE TITLE</th>
     <th width="50%" align="left" valign="top" nowrap>Description</th>

     <th width="10%" align="left" valign="top" nowrap>Meta Tag</th>
     <th width="20%" align="left" valign="top" nowrap>Keyword</th>
     <th width="10%" align="left" valign="top" nowrap>Photo</th>
     <th width="6%" align="right" valign="top" nowrap="nowrap">Action</th>
   </tr>
 </thead>
 <tbody>

  @foreach($data as $item)
    <tr>
      <td align="left"> {{$item->page_title}}</td>
      <td align="left">{{$item->description}}</td>
      <td align="left" nowrap>{{$item->meta_desc}}</td>
      <td align="left" nowrap>{{$item->keywords}}</td>
      @if($item->photo)
      <td >
        <img src="/{{$item->photo}}" alt="" style="width:100px;height:70px">
      </td>
     
      @endif

      <td align="right" nowrap="nowrap" width="6%">
        <form action="{{route('page.destroy',$item->id)}}" method="post">
          @csrf
          @method('delete')
          <a class="btn btn-success" href="{{route('page.edit',$item->id)}}"> <i class="fas fa-edit"></i></a>
          <a class="btn btn-danger delete text-white" ><i class="fa fa-times" aria-hidden="true"></i></a>
        </form>
        

      </td>
    </tr>
    @endforeach
    </table>
</div>
</div>
</div>
</main>


<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>


 <script>
$('.delete').click(function(e){
    e.preventDefault();
    var form = $(this).closest('form');

    swal({
      title: "Are you sure?",
      text: "Want to delete the page",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
        
      if (willDelete) {
        form.submit();
        swal("succeess! Page deleted Successfull!", {
          icon: "success",
        });
      } else {
        swal("Page is not delete !");
      }
    });

});


 </script>

</x-admin-layout>