<x-admin-layout>
    <main>
        <div class="container-fluid">
            <div class="mt-4 mb-3 page-title">
                <div class="row">
                    <div class="col-md-9 m-auto">
                        Financial Activities <i class="fas fa-angle-right"></i> Transactions List
                    </div>
                    <div class="col-md-3 text-right">


                        <a href="{{route('voucher.create')}}" class="btn btn-outline-primary float-right"> <i
                                class="fas fa-plus-square"></i> Transaction Entry </a>
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
                                    <th width="20%"> #</th>
                                    <th> Category </th>
                                    <th> Number of Transaction </th>
                                    <th> Total Receipt </th>
                                    <th> Total Payment </th>
                                    <th width="10%"> </th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($ledgers as $ledger)
                                <tr>
                                    <td  class="bn-font">
                                        {{$ledger->id}} </td>
                                    <td>
                                        {{$ledger->name}}
                                    </td>
                                    <td> {{$ledger->countTransaction}} </td>
                                    <td> {{$ledger->totalReceipt}} </td>
                                    <td> {{$ledger->totalPayment}} </td>
                                    <td >
                                        <a href="{{route('ledger.show',['ledger'=>$ledger->id])}}"> <i
                                                class="fa fa-folder-open text-success"> </i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach



                            </tbody>
                            <tfoot>
                        </table>
                        <x-page-info :items="$ledgers"></x-page-info>
                    </div>
                </div>
            </div>
    </main>
    @slot('script')
    <x-table-script></x-table-script> 
    @endslot
           
</x-admin-layout>
