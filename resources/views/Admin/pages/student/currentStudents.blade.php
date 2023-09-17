<x-admin-layout>
    <main>
        <div class="container-fluid">
            <div class="mt-4 mb-3 page-title">
                <div class="row">
                    <div class="col-sm-8 my-auto">
                        Admission <i class="fas fa-angle-right"></i> Admission List
                    </div>
                    <div class="col-sm-4 text-right">
                        <a href="{{route('student.create')}}" class="btn btn-outline-primary"> <i
                                class="fas fa-plus-square"></i> New Admission </a>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="table-responsive" style="padding-bottom:300px">
                        <br>
                        <table class="table table-hover " id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="0%"> Admission#</th>
                                    <th> Date</th>
                                    <th> Student Name </th>
                                    <th> Gender </th>
                                    <th> Course</th>
                                    <th> Batch </th>
                                    <th> Mobile</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $student)
                                <tr>
                                    <td width="0%"><samp>{{$student->id}}</samp></td>

                                    <td>{{format($student->created_at->toDateString())}}</td>
                                    <td> <a href="{{route('student.show',['student'=>$student->id])}}">{{$student->name}}</a></td>
                                    <td>{{$student->gender}}</td>
                                    <td>{{$student->courses->pluck('course')->pluck('name')->join(',')}}</td>
                                    <td>{{$student->courses->pluck('batch')->pluck('title')->join(',')}}</td>
                                    <td>{{$student->mobile}}</td>


                                   


                                    <td nowrap>

                                        <div class="dropdown">
                                            <button class="btn btn-primary dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                Options
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="{{route('student.show',['student'=>$student->id])}}"><i
                                                        class="far fa-address-card"></i> Profile</a>
                                                <a class="dropdown-item" href="{{route('student.idCard',['student'=>$student->id])}}"><i
                                                        class="fas fa-id-badge"></i> ID Card</a>
                                                <a class="dropdown-item" href="{{route('student.attendance',['student'=>$student->id])}}"><i
                                                        class="fas fa-calendar-check"></i> Attendance Recorde</a>
                                                <a class="dropdown-item" href="{{route('fee.create',['student'=>$student->id])}}"><i
                                                        class="fas fa-money-check-alt"></i> Payment</a>
                                                <a class="dropdown-item" href="{{route('student.certification',['student'=>$student->id])}}"><i
                                                        class="fa fa-certificate"> </i> Certification</a>
                                                <a class="dropdown-item" href="{{route('student.edit',['student'=>$student->id])}}"><i
                                                        class="fa fa-edit"> </i> Update Information</a>

                                                

                                                        <form action="{{route('student.destroy',['student'=>$student->id])}}" method="post" style="padding: 0; margin:0">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="dropdown-item"><i class="fa fa-trash "> </i>
                                                                Remove Student
                                                            </button>
                                                        </form>
                                             
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach


                            </tbody>
                            <tfoot>
                        </table>
                    </div>
                </div>
            </div>


    </main>
    @slot('script')
        <x-table-script></x-table-script>
    @endslot
</x-admin-layout>
