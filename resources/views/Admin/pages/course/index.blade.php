<x-admin-layout>
<main>
                <div class="container-fluid"><div class="mt-4 mb-3 page-title">
                <div class="row">
                <div class="col-md-9 my-auto">
                    <i class="far fa-list-alt"></i> Course Information <i class="fas fa-angle-right"></i> Course List
                </div>
                    <div class="col-md-3 my-auto">
                    <a href="{{route('course.create')}}" class="btn btn-outline-primary  float-right"> <i class="fas fa-plus-square"></i> Add Course</a>
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
                            
                            
                            <th> Duration </th> 
                            <th> Fee</th>
                            <th> Instructor </th>
                            
                            <th width="15%"> </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $item)
                        <tr>
                            <td width="0%" class="bn-font">{{$item->id}}</td>
                            <td >{{$item->name}}</td>
                            
                            
                            <td> {{$item->duration}} Months</td>
                            <td  >{{$item->fee}}</td>
                            <td >{{$item->instructor->name}}</td>
                            
                            <td width="15%">
                                <div class="d-flex" style="justify-content: center;
                                align-items: center;">
                                    <a href="{{route('course.edit',['course'=>$item->id])}}" class="btn btn-success btn-sm" > <i class="fa fa-edit ">  </i></a>  
                                    <x-remove-btn :action="route('course.destroy',['course'=>$item->id])" title="Are You Sure Delete Course {{$item->name}}"></x-remove-btn>
                                </div>
                               
                            
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



 @slot('script')

 <x-table-script></x-table-script>
     
 @endslot



  </main>
</x-admin-layout>