<x-admin-layout>
    <main>
        <div class="container-fluid">
            <div class="mt-4 mb-3 page-title">
                <div class="row">
                    <div class="col-sm-8 my-auto">
                        Admission <i class="fas fa-angle-right"></i> New Application
                    </div>
                    <div class="col-sm-4">
                        <a href="{{route('student.create')}}" class="btn btn-outline-primary float-right"> <i class="fas fa-plus-square"></i> Add Admission </a>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <br>
                        <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_length" id="dataTable_length"><label>Show <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> entries</label></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-hover dataTable no-footer" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                        <thead>
                                            <tr role="row">
                                                <th width="0%" class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label=" Admission#: activate to sort column descending" style="width: 88.175px;"> Admission#</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label=" Date: activate to sort column ascending" style="width: 53.2px;"> Date</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label=" Student Name : activate to sort column ascending" style="width: 241.113px;"> Student Name </th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label=" Gender : activate to sort column ascending" style="width: 55.375px;"> Gender </th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label=" Course: activate to sort column ascending" style="width: 169.387px;"> Course</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label=" Batch : activate to sort column ascending" style="width: 130.312px;"> Batch </th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label=" Mobile: activate to sort column ascending" style="width: 81.5px;"> Mobile</th>
                                                <th width="10%" class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label=" : activate to sort column ascending" style="width: 82.3375px;"> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($students as $student)
                                            <tr>
                                                <td width="0%"><samp>{{$student->id}}</samp></td>

                                                <td> 13.03.2023 </td>
                                                <td> <a href="{{route('student.show',['student'=>$student->id])}}">{{$student->name}}</a></td>
                                                <td>{{$student->gender}}</td>
                                                <td>{{$student->courses->pluck('course')->pluck('name')->join(',')}}</td>
                                                <td>{{$student->courses->pluck('batch')->pluck('title')->join(',')}}</td>
                                                <td>{{$student->mobile}}</td>


                                                <td nowrap>

                                                    <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Options
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="preview_student.php?id=38"><i class="far fa-address-card"></i> Profile</a>
                                                            <a class="dropdown-item" href="id_card.php?id=38"><i class="fas fa-id-badge"></i> ID Card</a>
                                                            <a class="dropdown-item" href="list_attendance_indv_.php?id=38"><i class="fas fa-calendar-check"></i> Attendance Recorde</a>
                                                            <a class="dropdown-item" href="add_payment_indv.php?id=38"><i class="fas fa-money-check-alt"></i> Payment</a>
                                                            <a class="dropdown-item" href="course_completed.php?id=38"><i class="fa fa-certificate"> </i> Certification</a>
                                                            <a class="dropdown-item" href="update_application.php?id=38"><i class="fa fa-edit"> </i> Update Information</a>
                                                            <a data-appd="38" class="dropdown-item delete btn btn-danger btn-sm" href="#"><i class="fa fa-trash"> </i> Delete </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>

                                            @endforeach






                                        </tbody>
                                        <tfoot>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 10 of 122 entries</div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                            <li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                            <li class="paginate_button page-item disabled" id="dataTable_ellipsis"><a href="#" aria-controls="dataTable" data-dt-idx="6" tabindex="0" class="page-link">…</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">13</a></li>
                                            <li class="paginate_button page-item next" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="8" tabindex="0" class="page-link">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
            <script>
                $(document).on('click', '.delete', function() {
                    var element = $(this);
                    var del_id = element.attr("data-appd");
                    var info = 'deladmission=' + del_id;
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
    </main>>
</x-admin-layout>