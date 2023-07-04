<x-admin-layout>
    <main>
        <div class="container-fluid">
            <div class="mt-4 mb-3 page-title">
                <div class="row">
                    <div class="col-md-9 my-auto">
                        <i class="far fa-list-alt"></i> User Information <i class="fas fa-angle-right"></i> User List
                    </div>
                    <div class="col-md-3 my-auto">
                        <a href="{{ route('user.create') }}" class="btn btn-outline-primary  float-right"> <i
                                class="fas fa-plus-square"></i> Add User</a>
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
                                    <th> Name </th>


                                    <th> Email </th>
                                    <th>Mobile</th>
                                    <th>Role</th>

                                    <th width="10%"> </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $item)
                                    <tr>
                                        <td width="0%" class="bn-font">{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>


                                        <td> {{ $item->email }}</td>
                                        <td>{{ $item->mobile }}</td>
                                        <td>{{ $item->role }}</td>

                                        <td width="10%">
                                            <div class="d-flex">
                                                <a href="{{ route('user.edit', ['user' => $item->id]) }}"
                                                    class="btn btn-success btn-sm"> <i class="fa fa-edit "> </i></a>
                                                <x-remove-btn :action="route('user.destroy', ['user' => $item->id])"
                                                    title="Are You Sure Delete User {{ $item->name }}">
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
