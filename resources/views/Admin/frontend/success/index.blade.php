<x-admin-layout>
    <main>
        <div class="container-fluid">
           <div class="mt-4 mb-3 page-title">
              <div class="row">
                 <div class="col-md-9 my-auto">
                    <i class="fas fa-layer-group"></i> Success Student List                  </div>
                 <div class="col-md-3 my-auto">
                    <a href="{{route("successfull.create")}}" class="btn btn-outline-primary float-right"> <i class="fas fa-plus-square"></i> Add</a>
                 </div>
              </div>
           </div>
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
                             <th>Student Name</th>
                             <th>Photo</th>
                             <th>Course Name</th>
                             <th>Designation</th>
                             <th width="10%">Action</th>
                          </tr>
                       </thead>
                       <tbody>
                        @foreach($data as $item)
                          <tr>
                           <td>{{$item->name}}</td>
                           <td>
                              <img src="/{{$item->photo}}" alt="" style="width: 70px">
                           </td>
                           <td>{{$item->course}}</td>
                           <td>{{$item->designation}}</td>
                           <td>
                              <a href="{{route('successfull.edit',$item->id)}}" class="btn btn-outline-warning"><i class="fas fa-edit"></i></a>

                              
                              <form action="{{route("successfull.destroy",$item->id)}}" method="post">
                              @csrf
                              @method('delete')
                              <button type="submit" class="btn btn-outline-danger delete"><i class="fas fa-trash"></i></button>
                           </form>
                           </td>
                          </tr>
                          @endforeach
                       </tbody>
                       <tfoot>
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
      text: "Delete the Successfull Student",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
        
      if (willDelete) {
        form.submit();
        swal("succeess! Student deleted Successfull!", {
          icon: "success",
        });
      } else {
        swal("Successfull student not delete!");
      }
    });

});


 </script>
</x-admin-layout>