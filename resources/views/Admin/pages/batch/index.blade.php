<x-admin-layout>
   <main>
      <div class="container-fluid">
         <div class="mt-4 mb-3 page-title">
            <div class="row">
               <div class="col-md-9 my-auto">
                  <i class="fas fa-layer-group"></i> Batch Information <i class="fas fa-angle-right"></i> Batch List
               </div>
               <div class="col-md-3 my-auto">
                  <a href="{{route('batch.create')}}" class="btn btn-outline-primary float-right"> <i class="fas fa-plus-square"></i> Add Batch</a>
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
                           <th>Batch Title</th>
                           <th>Student Count</th>
                           @can('view', auth()->user())
                           <th>Status </th>
                           @endcan
                           <th width="15%"> </th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($batches as $batch)
                        <tr>
                           <td width="0%">{{$batch->id}}</td>
                           <td> <a href="{{route('batch.show',['batch'=>$batch->id])}}">{{$batch->title}}</a></td>
                           <td>{{$batch->students_count}}</td>
                           @can('view', auth()->user())
                           <td>
                            
                               <a href="{{route('batch.toggleActive',['batch'=>$batch->id])}}"
                                   @class(['status_checks btn','btn-sm','btn-danger'=>!$batch->active, 'btn-success' =>$batch->active])>
                                   @if ($batch->active)
                                   Active
                                   @else 
                                   InActive
                                   @endif
                                 </a> 
                              </td>
                           @endcan
                           <td  width="15%">
                           <div class="d-flex" style="justify-content: center;
                           align-items: center;" >

                         
                              <a href="{{route('batch.show',['batch'=>$batch->id])}}" class="btn btn-info btn-sm"> <i class="fa fa-eye"></i></a>
                              @can('view', auth()->user())
                              <a href="{{route('batch.edit',['batch'=>$batch->id])}}" class="btn btn-success btn-sm"> <i class="fa fa-edit"></i> </a>
                              <x-remove-btn :action="route('batch.destroy',['batch'=>$batch->id])" title="Are You Sure? Delete Batch {{$batch->title}}"></x-remove-btn>
                           </div>
                           </td>
                           @endcan
                        </tr>
                        @endforeach

                     </tbody>
                     <tfoot>
                  </table>
                  <x-page-info :items="$batches"></x-page-info>
               </div>
            </div>
         </div>


        

         
       


   </main>

   @slot('script')

   <x-table-script></x-table-script>
       
   @endslot
</x-admin-layout>