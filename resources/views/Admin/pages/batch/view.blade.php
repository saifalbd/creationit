<x-admin-layout>
    <main>
        <div class="container-fluid"><div class="mt-4 mb-3 page-title">
<div class="row">
<div class="col-md-9 my-auto">
 <i class="fas fa-layer-group"></i> Batch Information <i class="fas fa-angle-right"></i> Batch View
</div>
<div class="col-md-3 my-auto">
  <a href="{{route('batch.create')}}" class="btn btn-outline-primary float-right"> <i class="fas fa-plus-square"></i> Add Batch</a>
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
           <th>Batch Title</th>
           <th>Saturday </th>
           <th>Sunday </th>
           <th>Monday </th>
           <th>Tuesday </th>
           <th>Wednesday </th>
           <th>Thrusday </th>
           <th>Friday </th>
           <th width="10%"> </th>
        </tr>
     </thead>
     <tbody>
        <tr>
            <td width="0%" class="bn-font">1</td>
            <td > Diploma In Graphic Design</td>
            
            
            <td> 10:00 - 11:00</td>
            <td> 10:00 - 11:00</td>
            <td> 10:00 - 11:00</td>
            <td> 10:00 - 11:00</td>
            <td> 10:00 - 11:00</td>
            <td> 10:00 - 11:00</td>
            <td> 10:00 - 11:00</td>
            
            <td width="10%">
                <a href="" class="btn btn-success btn-sm" > <i class="fa fa-edit ">  </i></a>  
                <a data-appd="1" class="delete btn btn-danger btn-sm" href="#"><i class="fa fa-trash "> </i></a>
            </td>
        </tr>      
        </tbody>
     <tfoot>
  </table>
</div>
</div>
</div>


<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>

<script type="text/javascript">
$(document).on('click','.status_checks',function(){
var status = ($(this).hasClass("btn-success")) ? '0' : '1';
var msg = (status=='0')? 'Pending' : 'Deliverd';
if(confirm("Are you sure to "+ msg)){
 var current_element = $(this);
 url = "ajaxData.php";
 $.ajax({
   type:"POST",
   url: url,
   data: {id:$(current_element).attr('data'),status:status},
   success: function(data)
   {   
     location.reload();
   }
 });
}      
});
</script>

<script>
$(document).on('click', '.delete', function() {
var element = $(this);
var del_id = element.attr("data-appd");
var info = 'delbatch=' + del_id;
if (confirm("Are you sure you want to delete this?")) {
  $.ajax({
     type: "POST",
     url: "ajaxdelete.php",
     data: info,
     success: function() {}
  });
  $(this).parents("tr").animate({
        backgroundColor: "#003"
     }, "slow")
     .animate({
        opacity: "hide"
     }, "slow");
}
return false;
});
</script>


</main>
</x-admin-layout>