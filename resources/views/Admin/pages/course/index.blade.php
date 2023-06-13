<x-admin-layout>
<main>
                <div class="container-fluid"><div class="mt-4 mb-3 page-title">
                <div class="row">
                <div class="col-md-9 my-auto">
                    <i class="far fa-list-alt"></i> Course Information <i class="fas fa-angle-right"></i> Course List
                </div>
                    <div class="col-md-3 my-auto">
                    <a href="{{route('course.create')}}" class="btn btn-outline-primary  float-right"> <i class="fas fa-plus-square"></i> Add Course</a>
                </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                <div class="table-responsive">
                    <br>
                    <table class="table table-hover " id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                            <th width="0%"> #</th>
                            <th> Name  </th>
                            
                            
                            <th> Duration </th> 
                            <th> Fee</th>
                            <th> Instructor </th>
                            
                            <th width="10%"> </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $item)
                        <tr>
                            <td width="0%" class="bn-font">{{$item->id}}</td>
                            <td >{{$item->name}}</td>
                            
                            
                            <td> {{$item->duration}} Months</td>
                            <td  >{{$item->fee}}</td>
                            <td >{{$item->instructor->name}}</td>
                            
                            <td width="10%">
                                <div class="d-flex">
                                    <a href="{{route('course.edit',2)}}" class="btn btn-success btn-sm" > <i class="fa fa-edit ">  </i></a>  
                                    <form action="{{route('course.destroy',$item->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a data-id="{{$item->id}}" class="delete btn btn-danger btn-sm" href="#"><i class="fa fa-trash "> </i></a>
                                    </form>
                                </div>
                               
                            
                            </td>
                            </tr>
                            @endforeach
                                        
                                   
                            </tbody>
             <tfoot>
          </table>
       </div>
    </div>
 </div>
 <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>


 <script>
$('.delete').click(function(e){
    e.preventDefault();
    var form = $(this).closest('form');
    var dataId = $(this).data('id');

    swal({
      title: "Are you sure?",
      text: "Delete the category",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
        
      if (willDelete) {
        form.submit();
        swal("succeess! category deleted success!", {
          icon: "success",
        });
      } else {
        swal("something is wrong!");
      }
    });

});


 </script>




  </main>
</x-admin-layout>