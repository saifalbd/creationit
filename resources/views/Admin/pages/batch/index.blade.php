<x-admin-layout>
<main>
                <div class="container-fluid"><div class="mt-4 mb-3 page-title">
                <div class="row">
                <div class="col-md-9 my-auto">
                    <i class="far fa-list-alt"></i> Course Information <i class="fas fa-angle-right"></i> Course List
                </div>
                    <div class="col-md-3 my-auto">
                    <a href="add_course.php" class="btn btn-outline-primary  float-right"> <i class="fas fa-plus-square"></i> Add Course</a>
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
                        <tr>
                            <td width="0%" class="bn-font">1</td>
                            <td > Diploma In Graphic Design</td>
                            
                            
                            <td> 4 Months</td>
                            <td  > 10000</td>
                            <td > Wasim Ahmed Nishan</td>
                            
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
 <script>
    $(document).on('click','.delete',function(){
    var element = $(this);
    var del_id = element.attr("data-appd");
    var info = 'delcourse=' + del_id;
    if(confirm("Are you sure you want to delete this?"))
    {
     $.ajax({
       type: "POST",
       url: "ajaxdelete.php",
       data: info,
       success: function(){
     }
    });
      $(this).parents("tr").animate({ backgroundColor: "#003" }, "slow")
      .animate({ opacity: "hide" }, "slow");
     }
    return false;
    });
 </script>
  </main>
</x-admin-layout>