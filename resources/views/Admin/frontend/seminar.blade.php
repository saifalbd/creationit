<x-admin-layout>
    <main>
                    <div class="container-fluid"><div class="mt-4 mb-3 page-title">
                    <div class="row">
                    <div class="col-md-9 my-auto">
                        <i class="far fa-list-alt"></i> Seminar Apply Info <i class="fas fa-angle-right"></i>
                         <a target="_blank" href="{{route('seminar.create')}}" style="text-decoration:none">Vistio Application form</a>
                    </div>
                        <div class="col-md-3 my-auto">
                            <form action="{{route('change.status')}}" method="post">
                                @csrf
                                <select name="status">
                                    <option value="active" {{$status->status == 'active' ? 'selected': ''}}>Active</option>
                                    <option value="inactive" {{$status->status == 'inactive' ? 'selected': ''}}>Inactive</option>
                                </select>
                                <button class="status-btn">{{$status->status}}</button>
                            </form>
                       
                    </div>
                    </div>
                    @if ($message = Session()->get('success'))
                        <div class="alert alert-success mt-2">{{$message}}</div>
                    @endif
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                    <div class="table-responsive">
                        <br>
                        <table class="table table-hover " id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                <th width="0%"> #</th>
                                <th> name  </th>
                                
                                
                                <th> Mobile </th> 
                                <th> Email</th>
                                <th> Address </th>
                                <th> Education </th>
                                <th> Basic </th>
                                <th> Comment </th>
                                <th> Action </th>
                                
                                <th width="2%"> </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $item)
                            <tr>
                                <td width="0%" class="bn-font">{{$item->id}}</td>
                                <td >{{$item->name}}</td>
                                
                                
                                <td> {{$item->mobile}}</td>
                                <td  >{{$item->email}}</td>
                                <td >{{$item->present_address}}</td>
                                <td >{{$item->education}}</td>
                               
                                <td >{{$item->basic}}</td>

                                @if(!empty($item->comment))
                                <td >{{$item->comment}}</td>
                                @else
                                <td >No</td>
                                @endif
                                
                                <td width="2%">
                                            <a class="delete btn btn-danger btn-sm" href="{{route('seminar.student.destroy',$item->id)}}"><i class="fa fa-trash "> </i></a>
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
<style>
.status-btn {
	border: none;
	padding: 3px 7px;
	color: black;
	text-transform: capitalize;
	border-radius: 5px;
}
</style>

    </x-admin-layout>