

<x-admin-layout>
    <main>
        <div class="container-fluid"><div class="mt-4 mb-3 page-title">
        <div class="row">
        <div class="col-md-9 my-auto">
            <i class="far fa-list-alt"></i> Sales <i class="fas fa-angle-right"></i> Sales List
        </div>
            <div class="col-md-3 my-auto">
            <a href="{{route('order.create')}}" class="btn btn-outline-primary  float-right"> <i class="fas fa-plus-square"></i>Order Create</a>
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
                    <th> Name  </th> 
                    <th>Date</th>
                    <th> Mobile </th> 
                    <th>By</th>
                    <th>Instructor</th>
                    <th>Student</th>
                    <th>Total</th>
                    <th>Discount</th>
                    <th>Paid</th>
                    <th>Due</th>
                    <th> </th>
                    </tr>
                </thead>
                <tbody>
                
                    @foreach ($orders as $o)
                    <tr>
                        <td>{{$o->id}}</td>
                        <td>{{$o->name}}</td>
                        <td>{{format($o->date)}}</td>
                     
                        <td>{{$o->mobile}}</td>
                        <td>{{$o->is}}</td>
                        <td>{{$o->teacher?$o->teacher->name:''}}</td>
                        <td>{{$o->student?$o->student->name:''}}</td>
                        <td>{{$o->total}}</td>
                        <td>{{$o->discount}}</td>
                        <td>{{$o->paid}}</td>
                        <td>{{$o->due}}</td>
                        <td>
                            <div class="d-flex" style="justify-content: center;
                            align-items: center;">
                             <a href="{{route('order.show',['order'=>$o->id])}}" class="btn btn-info btn-sm mr-2" > <i class="fa fa-eye ">  </i></a>  
                                <a href="{{route('order.edit',['order'=>$o->id])}}" class="btn btn-success btn-sm mr-2" > <i class="fa fa-edit ">  </i></a>  
                                <x-remove-btn :action="route('order.destroy',['order'=>$o->id])" title="Are You Sure Delete Course {{$o->name}}"></x-remove-btn>
                            </div>
                           
                        </td>
                    </tr>  
                    <tr>
                        <td colspan="12">
                            <table class="w-100">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th class="text-right">Quantity</th>
                                        <th class="text-right">Rate</th>
                                        <th class="text-right">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($o->items as $item)
                                    <tr  style="background-color: #dde4e8">
                                        <td>{{$item->product->title}}</td>
                                        <td class="text-right">{{$item->quantity}}</td>
                                        <td class="text-right">{{$item->rate}}</td>
                                        <td class="text-right">{{$item->total}}</td>
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    @endforeach
                              
                           
                    </tbody>
     <tfoot>
    </table>
    
    </div>
    </div>
    </div>
        </div>
    </main>
    @slot('script')
    <x-table-script></x-table-script> 
    @endslot
</x-admin-layout>



