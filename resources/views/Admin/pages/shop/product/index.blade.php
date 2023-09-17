<x-admin-layout>

    <main>
        <div class="container-fluid">
            <div class="mt-4 mb-3 page-title">
                <div class="row">
                    <div class="col-md-9 my-auto">
                        <i class="far fa-list-alt"></i> Product Information <i class="fas fa-angle-right"></i> Product List
                    </div>
                    <div class="col-md-3 my-auto">
                        <a href="{{ route('product.create') }}" class="btn btn-outline-primary  float-right"> <i
                                class="fas fa-plus-square"></i> Add Product</a>
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
                                    <th  class="px-6 py-3"> #</th>
                                    <th  class="px-6 py-3"> Title </th>
                                    <th class="px-6 py-3"> Category </th>
                                    <th class="px-6 py-3">Rate</th>
                                    <th class="px-6 py-3">Qty</th>
                                    <th class="px-6 py-3">OpQty</th>
                                    <th class="px-6 py-3">PurRate</th>
                                    <th class="px-6 py-3">OpPurRate</th>
                                    <th class="px-6 py-3"> </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $item)
                                <tr class="border-b border-gray-200 dark:border-gray-700">
                                    <td  class="bn-font">{{ $item->id }}</td>
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">{{ $item->title }}</td>
                                    <td> {{ $item->category->title }}</td>
                                    <td> {{ $item->rate }}</td>
                                    <td> {{ $item->quantity}}</td>
                                    <td> {{ $item->op_qty}}</td>
                                    <td> {{ $item->avg_pur_rate}}</td>
                                    <td> {{ $item->op_pur_rate}}</td>
                                    <td>
                                        <div class=" d-flex justify-center items-center">
                                            
                                                <a href="{{ route('product.edit', ['product' => $item->id]) }}"
                                                    class="btn btn-success btn-sm"> <i class="fa fa-edit "> </i></a>
                                                <x-remove-btn :action="route('product.destroy', ['product' => $item->id])"
                                                    title="Are You Sure Delete Product {{ $item->name }}">
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
    </main>

   @slot('script')
   <x-table-script></x-table-script> 
   @endslot

     
        </x-admin-layout>