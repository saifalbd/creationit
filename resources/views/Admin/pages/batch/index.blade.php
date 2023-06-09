<x-admin-layout>
<main>
               <div class="container-fluid"><div class="mt-4 mb-3 page-title">
   <div class="row">
      <div class="col-md-9 my-auto">
        <i class="fas fa-layer-group"></i> Batch Information <i class="fas fa-angle-right"></i> Batch List
      </div>
       <div class="col-md-3 my-auto">
		 <a href="{{url('batch/create')}}" class="btn btn-outline-primary float-right"> <i class="fas fa-plus-square"></i> Add Batch</a>
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
                  <th>Status </th>
                  <th width="10%"> </th>
               </tr>
            </thead>
            <tbody>
                              <tr>
                  <td width="0%">1</td>
                  <td > <a href="view_batch.php?id=5"> BC-Special</a></td>
                  <td>   <samp data="5" class="status_checks btn  btn-success btn-sm">Active </samp>  </td>
                  <td width="10%">
                     <a href="view_batch.php?id=5" class="btn btn-info btn-sm" > <i class="fa fa-eye"></i></a>
                     <a href="edit_batch.php?id=5" class="btn btn-success btn-sm"  > <i class="fa fa-edit"></i> </a> 
                     <a  data-appd="5" class="delete btn-danger btn-sm" href="#"><i class="fa fa-trash"></i></a>
                  </td>
               </tr>
                              <tr>
                  <td width="0%">2</td>
                  <td > <a href="view_batch.php?id=6"> BC-2201</a></td>
                  <td>   <samp data="6" class="status_checks btn  btn-success btn-sm">Active </samp>  </td>
                  <td width="10%">
                     <a href="view_batch.php?id=6" class="btn btn-info btn-sm" > <i class="fa fa-eye"></i></a>
                     <a href="edit_batch.php?id=6" class="btn btn-success btn-sm"  > <i class="fa fa-edit"></i> </a> 
                     <a  data-appd="6" class="delete btn-danger btn-sm" href="#"><i class="fa fa-trash"></i></a>
                  </td>
               </tr>
                              <tr>
                  <td width="0%">3</td>
                  <td > <a href="view_batch.php?id=10"> BC-2202</a></td>
                  <td>   <samp data="10" class="status_checks btn  btn-success btn-sm">Active </samp>  </td>
                  <td width="10%">
                     <a href="view_batch.php?id=10" class="btn btn-info btn-sm" > <i class="fa fa-eye"></i></a>
                     <a href="edit_batch.php?id=10" class="btn btn-success btn-sm"  > <i class="fa fa-edit"></i> </a> 
                     <a  data-appd="10" class="delete btn-danger btn-sm" href="#"><i class="fa fa-trash"></i></a>
                  </td>
               </tr>
                              <tr>
                  <td width="0%">4</td>
                  <td > <a href="view_batch.php?id=13"> GD-2201</a></td>
                  <td>   <samp data="13" class="status_checks btn  btn-success btn-sm">Active </samp>  </td>
                  <td width="10%">
                     <a href="view_batch.php?id=13" class="btn btn-info btn-sm" > <i class="fa fa-eye"></i></a>
                     <a href="edit_batch.php?id=13" class="btn btn-success btn-sm"  > <i class="fa fa-edit"></i> </a> 
                     <a  data-appd="13" class="delete btn-danger btn-sm" href="#"><i class="fa fa-trash"></i></a>
                  </td>
               </tr>
                              <tr>
                  <td width="0%">5</td>
                  <td > <a href="view_batch.php?id=14"> GD-2202</a></td>
                  <td>   <samp data="14" class="status_checks btn  btn-success btn-sm">Active </samp>  </td>
                  <td width="10%">
                     <a href="view_batch.php?id=14" class="btn btn-info btn-sm" > <i class="fa fa-eye"></i></a>
                     <a href="edit_batch.php?id=14" class="btn btn-success btn-sm"  > <i class="fa fa-edit"></i> </a> 
                     <a  data-appd="14" class="delete btn-danger btn-sm" href="#"><i class="fa fa-trash"></i></a>
                  </td>
               </tr>
                              <tr>
                  <td width="0%">6</td>
                  <td > <a href="view_batch.php?id=15"> GD-2203</a></td>
                  <td>   <samp data="15" class="status_checks btn  btn-success btn-sm">Active </samp>  </td>
                  <td width="10%">
                     <a href="view_batch.php?id=15" class="btn btn-info btn-sm" > <i class="fa fa-eye"></i></a>
                     <a href="edit_batch.php?id=15" class="btn btn-success btn-sm"  > <i class="fa fa-edit"></i> </a> 
                     <a  data-appd="15" class="delete btn-danger btn-sm" href="#"><i class="fa fa-trash"></i></a>
                  </td>
               </tr>
                              <tr>
                  <td width="0%">7</td>
                  <td > <a href="view_batch.php?id=16"> WD-2201</a></td>
                  <td>   <samp data="16" class="status_checks btn  btn-success btn-sm">Active </samp>  </td>
                  <td width="10%">
                     <a href="view_batch.php?id=16" class="btn btn-info btn-sm" > <i class="fa fa-eye"></i></a>
                     <a href="edit_batch.php?id=16" class="btn btn-success btn-sm"  > <i class="fa fa-edit"></i> </a> 
                     <a  data-appd="16" class="delete btn-danger btn-sm" href="#"><i class="fa fa-trash"></i></a>
                  </td>
               </tr>
                              <tr>
                  <td width="0%">8</td>
                  <td > <a href="view_batch.php?id=17"> BC-2204</a></td>
                  <td>   <samp data="17" class="status_checks btn  btn-success btn-sm">Active </samp>  </td>
                  <td width="10%">
                     <a href="view_batch.php?id=17" class="btn btn-info btn-sm" > <i class="fa fa-eye"></i></a>
                     <a href="edit_batch.php?id=17" class="btn btn-success btn-sm"  > <i class="fa fa-edit"></i> </a> 
                     <a  data-appd="17" class="delete btn-danger btn-sm" href="#"><i class="fa fa-trash"></i></a>
                  </td>
               </tr>
                              <tr>
                  <td width="0%">9</td>
                  <td > <a href="view_batch.php?id=18"> BC-2205</a></td>
                  <td>   <samp data="18" class="status_checks btn  btn-success btn-sm">Active </samp>  </td>
                  <td width="10%">
                     <a href="view_batch.php?id=18" class="btn btn-info btn-sm" > <i class="fa fa-eye"></i></a>
                     <a href="edit_batch.php?id=18" class="btn btn-success btn-sm"  > <i class="fa fa-edit"></i> </a> 
                     <a  data-appd="18" class="delete btn-danger btn-sm" href="#"><i class="fa fa-trash"></i></a>
                  </td>
               </tr>
                              <tr>
                  <td width="0%">10</td>
                  <td > <a href="view_batch.php?id=19"> BC-2207</a></td>
                  <td>   <samp data="19" class="status_checks btn  btn-success btn-sm">Active </samp>  </td>
                  <td width="10%">
                     <a href="view_batch.php?id=19" class="btn btn-info btn-sm" > <i class="fa fa-eye"></i></a>
                     <a href="edit_batch.php?id=19" class="btn btn-success btn-sm"  > <i class="fa fa-edit"></i> </a> 
                     <a  data-appd="19" class="delete btn-danger btn-sm" href="#"><i class="fa fa-trash"></i></a>
                  </td>
               </tr>
                              <tr>
                  <td width="0%">11</td>
                  <td > <a href="view_batch.php?id=20"> BC-2206</a></td>
                  <td>   <samp data="20" class="status_checks btn  btn-success btn-sm">Active </samp>  </td>
                  <td width="10%">
                     <a href="view_batch.php?id=20" class="btn btn-info btn-sm" > <i class="fa fa-eye"></i></a>
                     <a href="edit_batch.php?id=20" class="btn btn-success btn-sm"  > <i class="fa fa-edit"></i> </a> 
                     <a  data-appd="20" class="delete btn-danger btn-sm" href="#"><i class="fa fa-trash"></i></a>
                  </td>
               </tr>
                              <tr>
                  <td width="0%">12</td>
                  <td > <a href="view_batch.php?id=21"> BC-2208</a></td>
                  <td>   <samp data="21" class="status_checks btn  btn-success btn-sm">Active </samp>  </td>
                  <td width="10%">
                     <a href="view_batch.php?id=21" class="btn btn-info btn-sm" > <i class="fa fa-eye"></i></a>
                     <a href="edit_batch.php?id=21" class="btn btn-success btn-sm"  > <i class="fa fa-edit"></i> </a> 
                     <a  data-appd="21" class="delete btn-danger btn-sm" href="#"><i class="fa fa-trash"></i></a>
                  </td>
               </tr>
                              <tr>
                  <td width="0%">13</td>
                  <td > <a href="view_batch.php?id=22"> BC-2209</a></td>
                  <td>   <samp data="22" class="status_checks btn  btn-success btn-sm">Active </samp>  </td>
                  <td width="10%">
                     <a href="view_batch.php?id=22" class="btn btn-info btn-sm" > <i class="fa fa-eye"></i></a>
                     <a href="edit_batch.php?id=22" class="btn btn-success btn-sm"  > <i class="fa fa-edit"></i> </a> 
                     <a  data-appd="22" class="delete btn-danger btn-sm" href="#"><i class="fa fa-trash"></i></a>
                  </td>
               </tr>
                              <tr>
                  <td width="0%">14</td>
                  <td > <a href="view_batch.php?id=23"> Motion Graphic-2201</a></td>
                  <td>   <samp data="23" class="status_checks btn  btn-success btn-sm">Active </samp>  </td>
                  <td width="10%">
                     <a href="view_batch.php?id=23" class="btn btn-info btn-sm" > <i class="fa fa-eye"></i></a>
                     <a href="edit_batch.php?id=23" class="btn btn-success btn-sm"  > <i class="fa fa-edit"></i> </a> 
                     <a  data-appd="23" class="delete btn-danger btn-sm" href="#"><i class="fa fa-trash"></i></a>
                  </td>
               </tr>
                              <tr>
                  <td width="0%">15</td>
                  <td > <a href="view_batch.php?id=28"> GD-2204</a></td>
                  <td>   <samp data="28" class="status_checks btn  btn-success btn-sm">Active </samp>  </td>
                  <td width="10%">
                     <a href="view_batch.php?id=28" class="btn btn-info btn-sm" > <i class="fa fa-eye"></i></a>
                     <a href="edit_batch.php?id=28" class="btn btn-success btn-sm"  > <i class="fa fa-edit"></i> </a> 
                     <a  data-appd="28" class="delete btn-danger btn-sm" href="#"><i class="fa fa-trash"></i></a>
                  </td>
               </tr>
                              <tr>
                  <td width="0%">16</td>
                  <td > <a href="view_batch.php?id=30"> BC-2210</a></td>
                  <td>   <samp data="30" class="status_checks btn  btn-success btn-sm">Active </samp>  </td>
                  <td width="10%">
                     <a href="view_batch.php?id=30" class="btn btn-info btn-sm" > <i class="fa fa-eye"></i></a>
                     <a href="edit_batch.php?id=30" class="btn btn-success btn-sm"  > <i class="fa fa-edit"></i> </a> 
                     <a  data-appd="30" class="delete btn-danger btn-sm" href="#"><i class="fa fa-trash"></i></a>
                  </td>
               </tr>
                              <tr>
                  <td width="0%">17</td>
                  <td > <a href="view_batch.php?id=31"> GD-2205</a></td>
                  <td>   <samp data="31" class="status_checks btn  btn-success btn-sm">Active </samp>  </td>
                  <td width="10%">
                     <a href="view_batch.php?id=31" class="btn btn-info btn-sm" > <i class="fa fa-eye"></i></a>
                     <a href="edit_batch.php?id=31" class="btn btn-success btn-sm"  > <i class="fa fa-edit"></i> </a> 
                     <a  data-appd="31" class="delete btn-danger btn-sm" href="#"><i class="fa fa-trash"></i></a>
                  </td>
               </tr>
                              <tr>
                  <td width="0%">18</td>
                  <td > <a href="view_batch.php?id=32"> dada</a></td>
                  <td>   <samp data="32" class="status_checks btn  btn-success btn-sm">Active </samp>  </td>
                  <td width="10%">
                     <a href="view_batch.php?id=32" class="btn btn-info btn-sm" > <i class="fa fa-eye"></i></a>
                     <a href="edit_batch.php?id=32" class="btn btn-success btn-sm"  > <i class="fa fa-edit"></i> </a> 
                     <a  data-appd="32" class="delete btn-danger btn-sm" href="#"><i class="fa fa-trash"></i></a>
                  </td>
               </tr>
                              <tr>
                  <td width="0%">19</td>
                  <td > <a href="view_batch.php?id=33"> SP-2201</a></td>
                  <td>   <samp data="33" class="status_checks btn  btn-success btn-sm">Active </samp>  </td>
                  <td width="10%">
                     <a href="view_batch.php?id=33" class="btn btn-info btn-sm" > <i class="fa fa-eye"></i></a>
                     <a href="edit_batch.php?id=33" class="btn btn-success btn-sm"  > <i class="fa fa-edit"></i> </a> 
                     <a  data-appd="33" class="delete btn-danger btn-sm" href="#"><i class="fa fa-trash"></i></a>
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