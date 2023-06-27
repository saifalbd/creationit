<x-admin-layout>
    <main>
      <div class="container-fluid">
        @if ($message = Session::get('danger'))
            <div class="alert alert-danger mt-2">{{$message}}</div>
        @endif
    <div class="mt-4 page-title">
      <div class="row">
        <div class="col-md-9 my-auto">
            <i class="far fa-list-alt"></i> Contact Information <i class="fas fa-angle-right"></i> Page List
        </div>

      </div>

    <div class="card mb-4">
    <div class="card-body">
    <div class="table-responsive">
    <br>
    <table class="table table-hover " id="dataTable" width="100%" cellspacing="0">
     <thead>
       <tr>
         <th width="20%" align="left" valign="top">Name</th>
         <th width="10%" align="left" valign="top" nowrap>Email</th>
    
         <th width="10%" align="left" valign="top" nowrap>Mobile</th>
         <th width="20%" align="left" valign="top" nowrap>Subject</th>
         <th width="50%" align="left" valign="top" nowrap>Description</th>
         <th>Action</th>
       </tr>
     </thead>
     <tbody>
    
      @foreach($data as $item)
        <tr>
          <td align="left"> {{$item->name}}</td>
          <td align="left" nowrap>{{$item->email}}</td>
          <td align="left" nowrap>{{$item->phone}}</td>
          <td align="left" nowrap>{{$item->subject}}</td>
          <td align="left">{{$item->message}}</td>

    
          <td align="right" nowrap="nowrap" width="6%">
            <form action="{{route('contact.delete')}}" method="post">
              @csrf
              <a class="btn btn-danger delete text-white" ><i class="fa fa-times" aria-hidden="true"></i></a>
              <input type="hidden" value="{{$item->id}}" name="contact_id">
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
          text: "Want to delete the Contact Information",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
            
          if (willDelete) {
            form.submit();
            swal("succeess! Contact deleted Successfull!", {
              icon: "success",
            });
          } else {
            swal("Page is not delete !");
          }
        });
    
    });
    
    
     </script>
    
    </x-admin-layout>