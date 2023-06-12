<x-admin-layout>

<main>
<div class="container-fluid"><div class="container">
   <div class="mt-4 mb-3 page-title">
      <div class="row">
         <div class="col-md-9 title">
      Instructor Info <i class="fas fa-angle-right"></i> Instructor Info List
      </div>
         <div class="col-md-3">
            <a href="{{url('instructor/create')}}" class="btn btn-outline-primary float-right">  <i class="fas fa-plus-square "></i>  Add Instructor</a>
         </div>
      </div>
   </div>
@if(Session()->get('danger'))
   <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Deleted!</strong>Instructor Successfully Deleted
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
@endif
   <div class="row">
   @foreach ($instructors as $data )
      
   <div class="col-md-6 col-xl-4">
      <div class="card m-b-30">
         <div class="card-body row" style="padding: 15px 5px 1px 20px;">
            <div class="col-4">
               <a href=""><img src="../uploads/photo2023-03-17-07-53-56_6413c8342a94e.png " alt="" class="img-fluid rounded-circle w-60"></a>
            </div>
            <div class="col-8 card-title align-self-center mb-0" style="line-height: 20px;">
               <h5>{{$data->name}}</h5>
               <p class="m-0">{{$data->specialty}}</p>
            </div>
         </div>
         <hr>
         <ul class="mb-0" style="line-height: 20px;">
            <li class="mb-1">NID:  {{$data->nid}} </li>
            <li class="mb-1">Father: {{$data->father_name}}   </li>
            <li class="mb-1">Mother: {{$data->mother_name}}   </li>
            <li class="mb-1 font-bn"> Joining Date: {{$data->join_date}}  </li>
            <li class="mb-1 font-bn"> Monthly Salary: {{$data->salary}}  </li>
         </ul>
         <hr>
         <div class="card-body mb-0" style="padding: 0px 5px 1px 20px;">
            <svg class="svg-inline--fa fa-map-marker-alt fa-w-12" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path> </svg>  {{$data->address}}<!-- <i class="fas fa-map-marker-alt"></i> -->   <br>
            <svg class="svg-inline--fa fa-envelope fa-w-16" aria-hidden="true" focusable="false" data-prefix="far" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm0 48v40.805c-22.422 18.259-58.168 46.651-134.587 106.49-16.841 13.247-50.201 45.072-73.413 44.701-23.208.375-56.579-31.459-73.413-44.701C106.18 199.465 70.425 171.067 48 152.805V112h416zM48 400V214.398c22.914 18.251 55.409 43.862 104.938 82.646 21.857 17.205 60.134 55.186 103.062 54.955 42.717.231 80.509-37.199 103.053-54.947 49.528-38.783 82.032-64.401 104.947-82.653V400H48z"></path></svg><!-- <i class="far fa-envelope "></i> --> {{$data->email}}   <br>
            <svg class="svg-inline--fa fa-mobile-alt fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M272 0H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h224c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zM160 480c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm112-108c0 6.6-5.4 12-12 12H60c-6.6 0-12-5.4-12-12V60c0-6.6 5.4-12 12-12h200c6.6 0 12 5.4 12 12v312z"></path></svg>  {{$data->mobile}} <!-- <i class="fas fa-mobile-alt "></i> -->  
         </div>
         <div class="card-body mb-0">
            <div class="float-right btn-group btn-group-sm">
               <a href="#update_user.php?id=6" class="btn btn-warning tooltips" data-placement="top" data-toggle="tooltip" data-original-title="ইউজার পসাওয়ার্ড"><svg class="svg-inline--fa fa-user-lock fa-w-20" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-lock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M224 256A128 128 0 1 0 96 128a128 128 0 0 0 128 128zm96 64a63.08 63.08 0 0 1 8.1-30.5c-4.8-.5-9.5-1.5-14.5-1.5h-16.7a174.08 174.08 0 0 1-145.8 0h-16.7A134.43 134.43 0 0 0 0 422.4V464a48 48 0 0 0 48 48h280.9a63.54 63.54 0 0 1-8.9-32zm288-32h-32v-80a80 80 0 0 0-160 0v80h-32a32 32 0 0 0-32 32v160a32 32 0 0 0 32 32h224a32 32 0 0 0 32-32V320a32 32 0 0 0-32-32zM496 432a32 32 0 1 1 32-32 32 32 0 0 1-32 32zm32-144h-64v-80a32 32 0 0 1 64 0z"></path></svg><!-- <i class="fas fa-user-lock"></i> --> </a>
               <a href="edit_instructor.php?id=6" class="btn btn-success tooltips" data-placement="top" data-toggle="tooltip" data-original-title="সম্পাদন"><svg class="svg-inline--fa fa-user-edit fa-w-20" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-edit" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h274.9c-2.4-6.8-3.4-14-2.6-21.3l6.8-60.9 1.2-11.1 7.9-7.9 77.3-77.3c-24.5-27.7-60-45.5-99.9-45.5zm45.3 145.3l-6.8 61c-1.1 10.2 7.5 18.8 17.6 17.6l60.9-6.8 137.9-137.9-71.7-71.7-137.9 137.8zM633 268.9L595.1 231c-9.3-9.3-24.5-9.3-33.8 0l-37.8 37.8-4.1 4.1 71.8 71.7 41.8-41.8c9.3-9.4 9.3-24.5 0-33.9z"></path></svg><!-- <i class="fas fa-user-edit"></i> --> </a>
               <form action="{{route('instructor.destroy',$data->id)}}" method="post" style="margin: 0px;">
                  @csrf
                  @method('delete')
                  <a href="#" class="delete btn btn-danger tooltips" data-placement="top" data-toggle="tooltip" data-original-title="ডিলিট"><svg class="svg-inline--fa fa-times fa-w-11" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" data-fa-i2svg=""><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg><!-- <i class="fas fa-times"></i> -->  </a>
               </form>
            
            </div>

         </div>
      </div>
   </div>

   @endforeach
   
      
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
            text: "Delete the Instructor",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
              
            if (willDelete) {
              form.submit();
              swal("succeess! Instructor deleted success!", {
                icon: "success",
              });
            } else {
              swal("Instructor is not Delete!");
            }
          });
      
      });
      
 </script>



<script type="text/javascript">
   $(function () {
    $('[data-toggle="tooltip"]').tooltip()
   })

</script>
 </main>
</x-admin-layout>