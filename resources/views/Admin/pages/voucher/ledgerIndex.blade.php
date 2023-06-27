<x-admin-layout>
    <main>
        <div class="container-fluid"><div class="mt-4 mb-3 page-title">
                <div class="row">
                    <div class="col-md-8 my-auto">
                        Financial Activities  <i class="fas fa-angle-right"></i>Transaction Category
                    </div>
                    <div class="col-md-4">
                        <a href="{{route('ledger.create')}}" class="btn btn-outline-primary float-right">  <i class="fas fa-plus-square"></i>  Add Transaction Category</a>
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
                                <th>Name </th>
                                <th width="10%"> </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($ledgers as $ledger)
                            <tr>
                                <td width="20%" class="bn-font">
                                    {{$ledger->id}}            </td>
                                <td>
                                    {{$ledger->name}}                  </td>
                                <td width="10%">
                                    <a href="{{route('ledger.edit',['ledger'=>$ledger->id])}}" class="btn btn-success btn-sm" > <i class="fa fa-edit">  </i>  </a>
                                    <a  data-appd="1" class="delete btn-danger btn-sm" href="#"><i class="fa fa-trash"> </i>  </a>
                                </td>
                            </tr>
                            @endforeach

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>


    </main>
</x-admin-layout>
