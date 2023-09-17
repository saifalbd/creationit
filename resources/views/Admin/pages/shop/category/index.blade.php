<x-admin-layout>

    <main>
        <div class="container-fluid">
            <div class="mt-4 mb-3 page-title">
                <div class="row">
                    <div class="col-md-9 my-auto">
                        <i class="far fa-list-alt"></i> Category Information <i class="fas fa-angle-right"></i> Categories List
                    </div>
                    <div class="col-md-3 my-auto">
                        <a href="{{ route('category.create') }}" class="btn btn-outline-primary  float-right"> <i
                                class="fas fa-plus-square"></i> Add Category</a>
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
                                    <th> Title </th>
                                    <th> Parent </th>
                                    <th width="10%"> </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $item)
                                    <tr>
                                        <td width="0%" class="bn-font">{{ $item->id }}</td>
                                        <td>{{ $item->title }}</td>


                                        <td> {{ $item->parent?$item->parent->title:'none' }}</td>d>

                                        <td width="10%">
                                            <div class="d-flex">
                                                <a href="{{ route('category.edit', ['category' => $item->id]) }}"
                                                    class="btn btn-success btn-sm"> <i class="fa fa-edit "> </i></a>
                                                <x-remove-btn :action="route('category.destroy', ['category' => $item->id])"
                                                    title="Are You Sure Delete Category {{ $item->title }}">
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