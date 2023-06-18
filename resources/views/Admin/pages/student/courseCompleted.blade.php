<x-admin-layout>
    <main>
        <div class="container-fluid"><div class="mt-4 mb-3 page-title">
                <div class="row">
                    <div class="col-sm-8 my-auto">
                        Admission <i class="fas fa-angle-right"></i> New Application
                    </div>
                    <div class="col-sm-4">
                        <a href="{{url('student/create')}}" class="btn btn-outline-primary float-right"> <i class="fas fa-plus-square"></i> Add Admission </a>
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
                                <th width="0%"> Admission#</th>
                                <th  > Date</th>
                                <th> Student Name </th>
                                <th> Course</th>
                                <th> Refarance </th>
                                <th> Mobile</th>
                                <th width="10%"> </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td width="0%" ><samp >153</samp></td>
                                <td width="0%" > 01.05.2023 </td>
                                <td> <a href="preview_student.php?id=153" >Sumi Rani Deb </a></td>
                                <td> Computer Hardware</td>
                                <td> </td>
                                <td> 01933912179</td>


                                <td nowrap>
                                    <a href="{{route('student.edit',2)}}"  class="btn btn-success btn-sm" ><i class="fas fa-check-circle"></i></a>
                                    <a data-appd="153" class="delete btn btn-danger btn-sm" href="#"><i class="fa fa-trash"> </i>  </a>
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
                    var info = 'deladmission=' + del_id;
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
    </main>>
</x-admin-layout>
