<x-admin-layout>
    <main>
        <div class="container-fluid">

<div class="card mt-4">

<div class="card-header">
<div class="row">
<div class="col-md-9 my-auto">
  <i class="far fa-list-alt"></i> Batch Information <i class="fas fa-angle-right"></i> Edit 
</div>
<div class="col-md-3 text-right">
  <a href="{{route('batch.index')}}" class="btn btn-outline-primary float-right"> <i class="fas fa-folder-open"></i> Batch List</a>
</div>
</div>
</div>
<div class="card mb-4">
<!---div class="card-header">
<i class="fas fa-user-plus mr-1"></i>
গ্রাহক এন্ট্রি
</div---> 
<div class="mt-3 card-body">
<form name="frmUser" method="post" action="" enctype="multipart/form-data" >
  <div class="form-row">
     <div class="form-group col-md-4">
        <label for="inputEmail4">Batch Title</label>
        <input type="text" class="form-control" required  name="name" value="BC-Special"  >
     </div>
     <div class="form-group col-md-2">
        <label for="inputEmail4"> Saturday</label>
         <input type="text" class="form-control"   name="saturday" value=""  >
       
     </div>
     <div class="form-group col-md-2">
        <label for="inputEmail4"> Sunday</label>
         <input type="text" class="form-control"   name="sunday" value=""  >
       
     </div>
     
       <div class="form-group col-md-2">
        <label for="inputAddress2">Monday</label>
        <input type="text" class="form-control"   name="monday" value="" >
     </div>
     <div class="form-group col-md-2">
        <label for="inputAddress2">Tuesday</label>
        <input type="text" class="form-control"   name="tuesday" value="" >
     </div>
     <div class="form-group col-md-2">
        <label for="inputAddress2">Wednesday</label>
        <input type="text" class="form-control"   name="wednesday" value="" >
     </div>
     <div class="form-group col-md-2">
        <label for="inputAddress2">Thursday</label>
        <input type="text" class="form-control"   name="thursday" value="" >
     </div>
     <div class="form-group col-md-2">
        <label for="inputAddress2">Friday</label>
        <input type="text" class="form-control"   name="friday" value="" >
     </div>
  </div>
  <hr>
  <input type="submit" name="submit" value="Submit" id="register" class="btn btn-primary ">
  <button type="reset" class="btn btn-secondary">Reset</button>
</form>
</div>
</div>
</main>

</x-admin-layout>
