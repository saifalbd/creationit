<x-admin-layout>
    <main>
      <div class="container-fluid">
        
    <div class="mt-4 page-title">
      <div class="row">
        <div class="col-md-9 my-auto">
            <i class="far fa-list-alt"></i> Achivement Information <i class="fas fa-angle-right"></i> Page List
        </div>
            <div class="col-md-3 my-auto">
            <a href="{{route('achivement.create')}}" class="btn btn-outline-primary  float-right"> <i class="fas fa-plus-square"></i> Add Post</a>
        </div>
      </div>
    @if($message = Session::get('danger'))
      <div class="alert alert-danger mt-3">{{$message}}</div>
    @elseif ($message = Session::get('success'))
    <div class="alert alert-success mt-3">{{$message}}</div>
    @endif
    
    <div class="card mb-4">
    <div class="card-body">
    <div class="table-responsive">
    <br>
    <table class="table table-hover " id="dataTable" width="100%" cellspacing="0">
     <thead>
       <tr>
         <th width="15%" align="left" valign="top">TITLE</th>
         <th width="15%" align="left" valign="top" nowrap>Sub Title</th>
         <th width="20%" align="left" valign="top" nowrap>Photo</th>
         <th width="40%" align="left" valign="top" nowrap>Short Description</th>
         <th width="20%" align="left" valign="top" nowrap>Condition</th>
         <th width="6%" align="right" valign="top" nowrap="nowrap">Action</th>
       </tr>
     </thead>
     <tbody>
    
      @foreach($data as $item)
        <tr>
          <td> {{$item->title}}</td>
          <td>{{$item->sub_title}}</td>
          <td >
            <img src="/{{$item->photo}}" alt="" style="width:100px;height:70px">
          </td>
          <td>{{$item->description}}</td>
          <td >{{$item->condition}}</td>
          <td width="6%">
            <a class="btn btn-success" href="{{route('achivement.edit',$item->id)}}"> <i class="fas fa-edit"></i></a>
            <form action="{{route('achivement.destroy',$item->id)}}" method="post">
              @csrf
              @method('delete')
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
          text: "Do you want to delete",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
            
          if (willDelete) {
            form.submit();
            swal("succeess! Deleted Successfull!", {
              icon: "success",
            });
          } else {
            swal("Page is not delete !");
          }
        });
    
    });
    
    
     </script>
    
    </x-admin-layout>