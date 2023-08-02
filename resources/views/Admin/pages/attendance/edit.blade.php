<x-admin-layout>
    <main>
        <div class="container-fluid">
            <div class="mt-4 mb-3 page-title">
                <div class="row">
                    <div class="col-sm-8 my-auto">
                        <i class="far fa-list-alt"></i> Student Attendance Record <i class="fas fa-angle-right"></i>
                        {{ $attendance->batch->title }} <i class="fas fa-angle-right"></i> {{ $attendance->date }}
                    </div>
                    <div class="col-md-3 my-auto">

                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th> Admission ID</th>
                                    <th> Student Name</ th>
                                    <th> Mobile Number</ th>

                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($students as $item)
                                    <tr>
                                        <td >{{ $item->id }}</td>
                                        <td > <a
                                                >{{ $item->name }}</a></td>
                                        <td >{{ $item->mobile }}</td>
                                        <td><button class="btn btn-info" data-toggle="modal"
                                                data-target="#attModal-{{ $item->id }}">Show Details</button></td>
                                    </tr>
                                @endforeach


                            </tbody>
                            <tfoot>
                        </table>

                        @foreach ($students as $item)
                            <div class="modal fade" id="attModal-{{ $item->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">{{ $item->name }} Attendance Modal</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                      <th>Date</th>
                                                        <th> Status</th>
                                                        <th> In</th>
                                                        <th> Out</th>
                                                        <th> Remark </th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   @foreach ($item->list as $a)
                                                   <tr>
                                                      <td>
                                                         {{format($a['date'])}}
                                                      </td>
                                                   <td >

                                                      @if($a->attend)
                                                      <button type="button" class="btn btn-outline-primary btn-sm">Present</button>
                                                      @else
                                                      <button type="button" class="btn btn-outline-danger btn-sm">Absent</button>
                                                      @endif
                                                     
                                             <td >{{$a->entry}}</td>
                                             <td >{{$a->leave}}</td>
                                             <td >{{$a->remark}}</td>
                                          </tr>
                                                   @endforeach
                                                </tbody>
                                            </table>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
    </main>
</x-admin-layout>
