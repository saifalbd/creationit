<x-admin-layout>

    <main>
        <div class="container-fluid"><div class="mt-4 mb-3 page-title">
                <div class="row">
                    <div class="col-md-9 my-auto">
                        Financial Activities  <i class="fas fa-angle-right"></i> Transaction List   <i class="fas fa-angle-right"></i> {{$ledger->name}}      </div>
                    <div class="col-md-3">

                        <a  class="btn btn-outline-primary float-right"
                           href="{{route('voucher.create')}}"><i class="fas fa-plus-square text-info"></i>  Transaction Entry</a>
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
                                <th> Date </th>
                                <th> Category </th>
                                <th> Description </th>
                                <th> Voucher No. </th>
                                <th> Cash Received </th>
                                <th> Cash Payment</th>
                                <th width="10%"> </th>
                            </tr>

                            </thead>
                            <tbody>
                            @foreach($ledger->transactions as $tns)
                            <tr>
                                <td width="0%" class="bn-font">{{$tns->id}}</td>
                                <td  class="bn-font" >{{format($tns->voucher->date)}}</td>
                                <td>{{$ledger->name}}</td>
                                <td  class="bn-font" >{{$tns->voucher->voucher_no}}</td>
                                <td  class="bn-font" >{{$tns->voucher->remark}}</td>
                                <td class="bn-font" >{{$tns->type=='receipt'?$tns->amount:0}}</td>
                                <td class="bn-font" >{{$tns->type=='payment'?$tns->amount:0}}</td>
                                <td width="10%">
                                    <a href="{{route('voucher.edit',['voucher'=>$tns->voucher->id])}}" class="btn btn-success btn-sm"> <i class="fa fa-edit">  </i>  </a>
                                    <x-remove-btn :action="route('voucher.destroy',['voucher'=>$tns->voucher->id])" title="Are You Sure? Delete Voucher Date {{format($tns->voucher->date)}} And Voucher No {{$tns->voucher->voucher_no}}"></x-remove-btn>
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
