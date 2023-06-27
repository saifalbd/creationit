<x-admin-layout>
    <main>
        <div class="container-fluid"><div class="mt-3 page-title">Reports </div>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <select id="reportelector" class="form-control" requaid="">
                                    <option value=""> Select Report </option>
                                    <optgroup label="Admission Report">
                                        <option value="10">Date Wise Admission Report</option>
                                        <option value="11">Date &amp; Course Wise Admission Report</option>
                                    </optgroup>
                                    <optgroup label="Attendance Report">
                                        <option value="8">Batch Wise Attendance Report</option>
                                        <option value="9">Attendance Absent Summary</option>
                                    </optgroup>

                                    <optgroup label="Fees Report">
                                        <option value="6">Fess Collection Report</option>
                                        <option value="7">Fess Dues Report</option>
                                    </optgroup>

                                    <optgroup label="Accounts Report">
                                        <option value="1">Date Wise Transaction Report</option>
                                        <option value="2">Category Wise Transaction Report</option>
                                        <option value="3">Category Wise Report Summary</option>
                                        {{-- <option value="4">Income and Expense Report</option> --}}
                                    </optgroup>


                                </select>
                            </div>
                        </div>
                    </div>
                    <div id="1" class="report" style="display:none">
                        <form method="get" action="{{route('report.transactionReport')}}">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label"> From</label>
                                        <input type="date" name="from" required="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label">To</label>
                                        <input type="date" name="to" required="" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <hr>
                            <button type="submit" class="btn btn-success"><svg class="svg-inline--fa fa-print fa-w-16" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="print" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M448 192V77.25c0-8.49-3.37-16.62-9.37-22.63L393.37 9.37c-6-6-14.14-9.37-22.63-9.37H96C78.33 0 64 14.33 64 32v160c-35.35 0-64 28.65-64 64v112c0 8.84 7.16 16 16 16h48v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h48c8.84 0 16-7.16 16-16V256c0-35.35-28.65-64-64-64zm-64 256H128v-96h256v96zm0-224H128V64h192v48c0 8.84 7.16 16 16 16h48v96zm48 72c-13.25 0-24-10.75-24-24 0-13.26 10.75-24 24-24s24 10.74 24 24c0 13.25-10.75 24-24 24z"></path></svg><!-- <i class="fa fa-print"></i> -->Print Report</button>
                        </form>
                    </div>

                    <div id="2" class="report" style="display:none">
                        <form method="get" action="{{route('report.transactionCategoryReport')}}">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label"> From</label>
                                        <input type="date" name="from" required="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label">To</label>
                                        <input type="date" name="to" required="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Category: </label>
                                        <select type="text" class="form-control" name="ledger" required>
                                            <option value="">----</option>
                                            @foreach ($ledgers as $ledger)
                                            <option value="{{$ledger->id}}">{{$ledger->name}}</option>
                                            @endforeach
                                           
                                           
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-success"><svg class="svg-inline--fa fa-print fa-w-16" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="print" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M448 192V77.25c0-8.49-3.37-16.62-9.37-22.63L393.37 9.37c-6-6-14.14-9.37-22.63-9.37H96C78.33 0 64 14.33 64 32v160c-35.35 0-64 28.65-64 64v112c0 8.84 7.16 16 16 16h48v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h48c8.84 0 16-7.16 16-16V256c0-35.35-28.65-64-64-64zm-64 256H128v-96h256v96zm0-224H128V64h192v48c0 8.84 7.16 16 16 16h48v96zm48 72c-13.25 0-24-10.75-24-24 0-13.26 10.75-24 24-24s24 10.74 24 24c0 13.25-10.75 24-24 24z"></path></svg><!-- <i class="fa fa-print"></i> --> Print </button>
                        </form>
                    </div>

                    <div id="3" class="report" style="display:none">
                        <form method="get" action="{{route('report.transactionSummaryReport')}}">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label"> From</label>
                                        <input type="date" name="from" required="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label">To</label>
                                        <input type="date" name="to" required="" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <hr>
                            <button type="submit" class="btn btn-success"><svg class="svg-inline--fa fa-print fa-w-16" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="print" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M448 192V77.25c0-8.49-3.37-16.62-9.37-22.63L393.37 9.37c-6-6-14.14-9.37-22.63-9.37H96C78.33 0 64 14.33 64 32v160c-35.35 0-64 28.65-64 64v112c0 8.84 7.16 16 16 16h48v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h48c8.84 0 16-7.16 16-16V256c0-35.35-28.65-64-64-64zm-64 256H128v-96h256v96zm0-224H128V64h192v48c0 8.84 7.16 16 16 16h48v96zm48 72c-13.25 0-24-10.75-24-24 0-13.26 10.75-24 24-24s24 10.74 24 24c0 13.25-10.75 24-24 24z"></path></svg><!-- <i class="fa fa-print"></i> --> Print </button>
                        </form>
                    </div>

                    <div id="4" class="report" style="display:none">
                        <form method="get" action="{{route('report.earnExpenseReport')}}">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label"> From</label>
                                        <input type="date" name="from" required="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label">To </label>
                                        <input type="date" name="to" required="" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <hr>
                            <button type="submit" class="btn btn-success"><svg class="svg-inline--fa fa-print fa-w-16" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="print" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M448 192V77.25c0-8.49-3.37-16.62-9.37-22.63L393.37 9.37c-6-6-14.14-9.37-22.63-9.37H96C78.33 0 64 14.33 64 32v160c-35.35 0-64 28.65-64 64v112c0 8.84 7.16 16 16 16h48v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h48c8.84 0 16-7.16 16-16V256c0-35.35-28.65-64-64-64zm-64 256H128v-96h256v96zm0-224H128V64h192v48c0 8.84 7.16 16 16 16h48v96zm48 72c-13.25 0-24-10.75-24-24 0-13.26 10.75-24 24-24s24 10.74 24 24c0 13.25-10.75 24-24 24z"></path></svg><!-- <i class="fa fa-print"></i> --> Print </button>
                        </form>
                    </div>

                    <div id="5" class="report" style="display:none">
                        <form method="get" action="preview_cash_ledger.php">
                            preview_cash_ledger.php
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label"> From Date  </label>
                                        <input type="date" name="from" required="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label"> To Date </label>
                                        <input type="date" name="to" required="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-success"><svg class="svg-inline--fa fa-print fa-w-16" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="print" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M448 192V77.25c0-8.49-3.37-16.62-9.37-22.63L393.37 9.37c-6-6-14.14-9.37-22.63-9.37H96C78.33 0 64 14.33 64 32v160c-35.35 0-64 28.65-64 64v112c0 8.84 7.16 16 16 16h48v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h48c8.84 0 16-7.16 16-16V256c0-35.35-28.65-64-64-64zm-64 256H128v-96h256v96zm0-224H128V64h192v48c0 8.84 7.16 16 16 16h48v96zm48 72c-13.25 0-24-10.75-24-24 0-13.26 10.75-24 24-24s24 10.74 24 24c0 13.25-10.75 24-24 24z"></path></svg><!-- <i class="fa fa-print"></i> --> Print Report </button>
                        </form>
                    </div>

                    <div id="6" class="report" style="display:none">
                        <form method="get" action="{{route('report.dateWiseFeeCollection')}}">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label"> From Date  </label>
                                        <input type="date" name="from" required="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label"> To Date </label>
                                        <input type="date" name="to" required="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-success"><svg class="svg-inline--fa fa-print fa-w-16" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="print" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M448 192V77.25c0-8.49-3.37-16.62-9.37-22.63L393.37 9.37c-6-6-14.14-9.37-22.63-9.37H96C78.33 0 64 14.33 64 32v160c-35.35 0-64 28.65-64 64v112c0 8.84 7.16 16 16 16h48v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h48c8.84 0 16-7.16 16-16V256c0-35.35-28.65-64-64-64zm-64 256H128v-96h256v96zm0-224H128V64h192v48c0 8.84 7.16 16 16 16h48v96zm48 72c-13.25 0-24-10.75-24-24 0-13.26 10.75-24 24-24s24 10.74 24 24c0 13.25-10.75 24-24 24z"></path></svg><!-- <i class="fa fa-print"></i> --> Print Report </button>
                        </form>
                    </div>

                    <div id="7" class="report" style="display:none">
                        <form method="get" action="{{route('report.feeDueReport')}}">

                            <hr>
                            <button type="submit" class="btn btn-success"><svg class="svg-inline--fa fa-print fa-w-16" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="print" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M448 192V77.25c0-8.49-3.37-16.62-9.37-22.63L393.37 9.37c-6-6-14.14-9.37-22.63-9.37H96C78.33 0 64 14.33 64 32v160c-35.35 0-64 28.65-64 64v112c0 8.84 7.16 16 16 16h48v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h48c8.84 0 16-7.16 16-16V256c0-35.35-28.65-64-64-64zm-64 256H128v-96h256v96zm0-224H128V64h192v48c0 8.84 7.16 16 16 16h48v96zm48 72c-13.25 0-24-10.75-24-24 0-13.26 10.75-24 24-24s24 10.74 24 24c0 13.25-10.75 24-24 24z"></path></svg><!-- <i class="fa fa-print"></i> --> Print Report </button>
                        </form>
                    </div>

                    <div id="8" class="report" style="display:none">
                        <form method="get" action="preview_attendance_by_course_wise.php">
                            preview_attendance_by_course_wise.php
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label"> Date  </label>
                                        <input type="date" name="from" required="" class="form-control">
                                    </div>
                                </div>


                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Batch: </label>
                                        <select type="text" class="form-control" name="batch" required>
                                            <option value="">----</option>
                                            @foreach ($batches as $batch)
                                            <option value="{{$batch->id}}">{{$batch->title}}</option>
                                            @endforeach


                                        </select>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-success"><svg class="svg-inline--fa fa-print fa-w-16" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="print" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M448 192V77.25c0-8.49-3.37-16.62-9.37-22.63L393.37 9.37c-6-6-14.14-9.37-22.63-9.37H96C78.33 0 64 14.33 64 32v160c-35.35 0-64 28.65-64 64v112c0 8.84 7.16 16 16 16h48v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h48c8.84 0 16-7.16 16-16V256c0-35.35-28.65-64-64-64zm-64 256H128v-96h256v96zm0-224H128V64h192v48c0 8.84 7.16 16 16 16h48v96zm48 72c-13.25 0-24-10.75-24-24 0-13.26 10.75-24 24-24s24 10.74 24 24c0 13.25-10.75 24-24 24z"></path></svg><!-- <i class="fa fa-print"></i> --> Print Report</button>
                        </form>
                    </div>

                    <div id="9" class="report" style="display:none">
                        <form method="get" action="preview_attendance_summary.php">
                            preview_attendance_summary.php
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label">  Date  </label>
                                        <input type="date" name="date" required="" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <hr>
                            <button type="submit" class="btn btn-success"><svg class="svg-inline--fa fa-print fa-w-16" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="print" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M448 192V77.25c0-8.49-3.37-16.62-9.37-22.63L393.37 9.37c-6-6-14.14-9.37-22.63-9.37H96C78.33 0 64 14.33 64 32v160c-35.35 0-64 28.65-64 64v112c0 8.84 7.16 16 16 16h48v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h48c8.84 0 16-7.16 16-16V256c0-35.35-28.65-64-64-64zm-64 256H128v-96h256v96zm0-224H128V64h192v48c0 8.84 7.16 16 16 16h48v96zm48 72c-13.25 0-24-10.75-24-24 0-13.26 10.75-24 24-24s24 10.74 24 24c0 13.25-10.75 24-24 24z"></path></svg><!-- <i class="fa fa-print"></i> --> Print Report </button>
                        </form>
                    </div>

                    <div id="10" class="report" style="display:none">
                        <form method="get" action="{{route('report.admissionDateWise')}}">

                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label"> From Date  </label>
                                        <input type="date" name="from" required="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label"> To Date </label>
                                        <input type="date" name="to" required="" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <hr>
                            <button type="submit" class="btn btn-success"><svg class="svg-inline--fa fa-print fa-w-16" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="print" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M448 192V77.25c0-8.49-3.37-16.62-9.37-22.63L393.37 9.37c-6-6-14.14-9.37-22.63-9.37H96C78.33 0 64 14.33 64 32v160c-35.35 0-64 28.65-64 64v112c0 8.84 7.16 16 16 16h48v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h48c8.84 0 16-7.16 16-16V256c0-35.35-28.65-64-64-64zm-64 256H128v-96h256v96zm0-224H128V64h192v48c0 8.84 7.16 16 16 16h48v96zm48 72c-13.25 0-24-10.75-24-24 0-13.26 10.75-24 24-24s24 10.74 24 24c0 13.25-10.75 24-24 24z"></path></svg><!-- <i class="fa fa-print"></i> --> Print Report</button>
                        </form>
                    </div>

                    <div id="11" class="report" style="display:none">
                        <form method="get" action="{{route('report.admissionDateCourseWise')}}">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label"> From Date  </label>
                                        <input type="date" name="from" required="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label"> To Date </label>
                                        <input type="date" name="to" required="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Course: </label>
                                        <select type="text" class="form-control" name="course" required="">
                                            <option value="">----</option>
                                            @foreach ($courses as $course)
                                            <option value="{{$course->id}}">{{$course->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-success"><svg class="svg-inline--fa fa-print fa-w-16" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="print" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M448 192V77.25c0-8.49-3.37-16.62-9.37-22.63L393.37 9.37c-6-6-14.14-9.37-22.63-9.37H96C78.33 0 64 14.33 64 32v160c-35.35 0-64 28.65-64 64v112c0 8.84 7.16 16 16 16h48v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h48c8.84 0 16-7.16 16-16V256c0-35.35-28.65-64-64-64zm-64 256H128v-96h256v96zm0-224H128V64h192v48c0 8.84 7.16 16 16 16h48v96zm48 72c-13.25 0-24-10.75-24-24 0-13.26 10.75-24 24-24s24 10.74 24 24c0 13.25-10.75 24-24 24z"></path></svg><!-- <i class="fa fa-print"></i> --> Print Report </button>
                        </form>
                    </div>







                </div>
            </div>


        </div>
    </main>

    @slot('script')

        <script>
            $(function() {
                $('#reportelector').change(function(){
                    $('.report').hide();
                    $('#' + $(this).val()).show();
                });
            });
        </script>
    @endslot
</x-admin-layout>
