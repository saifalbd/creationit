<x-admin-layout>
    <main>
        <div class="container-fluid">
            <div class="mt-4 mb-3 page-title">
                <div class="row">
                    <div class="col-md-9 my-auto">
                        <i class="far fa-list-alt"></i> Holiday Information <i class="fas fa-angle-right"></i> Holiday List
                    </div>
                    <div class="col-md-3 my-auto">
                        <a href="{{ route('holiday.create') }}" class="btn btn-outline-primary  float-right"> <i
                                class="fas fa-plus-square"></i> Add Holyday</a>
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
                                   
                                    <th> Title </th>


                                    <th> From  </th>
                                    <th>To</th>
                                   

                                    <th width="10%"> </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($holidays as $item)
                                    <tr>
                                      
                                        <td>{{ $item->title }}</td>


                                        <td> {{ format($item->from) }}</td>
                                        <td>{{ format($item->to) }}</td>
                                        

                                        <td width="10%">
                                            <div class="d-flex">
                                                <a href="{{ route('holiday.edit', ['holiday' => $item->id]) }}"
                                                    class="btn btn-success btn-sm"> <i class="fa fa-edit "> </i></a>
                                                <x-remove-btn :action="route('holiday.destroy', ['holiday' => $item->id])"
                                                    title="Are You Sure Delete Holiday {{ $item->title }}">
                                                </x-remove-btn>
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



            @slot('script')
                <x-table-script></x-table-script>
            @endslot



    </main>
</x-admin-layout>
