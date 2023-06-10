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
<div class="row">
      <div class="col-md-6 col-xl-4">
      <div class="card m-b-30">
         <div class="card-body row" style="padding: 15px 5px 1px 20px;">
            <div class="col-4">
               <a href=""><img src="/assets/img/logo.jpeg" alt="" class="img-fluid rounded-circle w-60"></a>
            </div>
            <div class="col-8 card-title align-self-center mb-0" style="line-height: 20px;">
               <h5>Wasim Ahmed Nishan</h5>
               <p class="m-0">Motion Graphics & VFX</p>
            </div>
         </div>
         <hr>
         <ul class="mb-0" style="line-height: 20px;">
            <li class="mb-1">NID:   </li>
            <li class="mb-1">Father:  Mohammed Rafik Ahmed   </li>
            <li class="mb-1">Mother:  Mrs Runa Begum   </li>
            <li class="mb-1 font-bn" > Joining Date: 01-12-2018  </li>
            <li class="mb-1 font-bn"> Monthly Salary: 30000   </li>
         </ul>
         <hr>
         <div class="card-body mb-0" style="padding: 0px 5px 1px 20px;">
            <i class="fas fa-map-marker-alt"></i> Moulvibazar  <br>
            <i class="far fa-envelope "></i> nishansmedia@gmail.com  <br>
            <i class="fas fa-mobile-alt "></i> 01714517239 
         </div>
         <div class="card-body mb-0" >
            <div class="float-right btn-group btn-group-sm">
               <a href="#update_user.php?id=1" class="btn btn-warning tooltips" data-placement="top" data-toggle="tooltip" data-original-title="ইউজার পসাওয়ার্ড"><i class="fas fa-user-lock"></i> </a>
               <a href="{{route('instructor.edit',2)}}" class="btn btn-success tooltips" data-placement="top" data-toggle="tooltip" data-original-title="সম্পাদন"><i class="fas fa-user-edit"></i> </a>
               <a href="delete_instructor.php?id=1" class="btn btn-danger tooltips" data-placement="top" data-toggle="tooltip" data-original-title="ডিলিট"><i class="fas fa-times"></i></a>
            </div>
         </div>
      </div>
   </div>
     
      
      
   </div>
<script type="text/javascript">
   $(function () {
    $('[data-toggle="tooltip"]').tooltip()
   })
   
</script>
 </main>
</x-admin-layout>