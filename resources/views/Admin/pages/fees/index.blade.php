<x-admin-layout>
   <main>
      <div class="container-fluid">
         <div class="mt-4 mb-3 page-title">
            <div class="row">
               <div class="col-md-9 my-auto">
                  <i class="far fa-list-alt"></i> Fees Collection Information
               </div>
               <div class="col-md-3 my-auto">
                  <a href="{{route('fee.create')}}" class="btn btn-outline-primary float-right"> <i class="fas fa-plus-square"></i> Fees Receive</a>
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
                           <th> Admmission #</th>
                           <th> Student Name </th>
                           <th> Batch </th>
                           <th> Course </th>
                           <th> Fee</th>
                           <th> Mode</th>
                           <th> Trx. No</th>
                           <th> Remark </th>
                           <th> Date </th>
                           <th> </th>
                        </tr>
                     </thead>
                     <tbody>

                        @foreach($items as $item)
                        <tr>
                           <td>{{$item->student->id}}</td>
                           <td> <a href="{{route('student.show',['student'=>$item->student->id])}}"> {{$item->student->name}} </a></td>
                           <td>{{$item->details->pluck('batches')->collapse()->pluck('title')->join(',')}}</td>
                           <td>{{$item->details->pluck('course')->pluck('name')->join(',')}}</td>
                           <td>{{$item->amount}}</td>
                           <td>{{$item->details->pluck('trx_mode')->join(',')}}</td>
                           <td>{{$item->details->pluck('trx_no')->join(',')}}</td>
                         
                           <td>{{$item->remark}}</td>
                           <td>{{format($item->date)}}</td>
                           <td nowrap>
                              <a href="{{route('fee.show',['fee'=>$item->id])}}" class="btn btn-info btn-sm"> <i class="fa fa-print"> </i></a>
                              <a href="{{route('fee.edit',['fee'=>$item->id])}}" class="btn btn-success btn-sm"> <i class="fa fa-edit"> </i></a>
                              <x-remove-btn :action="route('fee.destroy',['fee'=>$item->id])" title="Are You Sure? Delete Batch {{$item->student->name}}"></x-remove-btn>
                           </td>
                        </tr>
                        @endforeach

                     </tbody>
                     <tfoot>
                  </table>
                  <x-page-info :items="$items"></x-page-info>
               </div>
            </div>
         </div>
      
   </main>
   @slot('script')
   <x-table-script></x-table-script> 
   @endslot
</x-admin-layout>