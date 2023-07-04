<x-admin-layout>
  @slot('style')

  <style>
    .text-red{
      color: red;
    }
    .td-child{
      position: relative;
    }
    .td-child .re-btn{
     
      background-color:black;
      color: gold;
      font-size: 10px;
      position: absolute;
      right: 0;
      bottom: -5px;
      margin: 0;
      height: 15px;
      width: 15px;
      display: flex;
      justify-content: center;
      align-items: center;
      cursor: pointer;
    }
    .td-child .re-btn.active {
      background-color:red;
      color: black;
    }
    .remark-modal{
      position: fixed;
      background: rgba(0, 0, 0, 0.322);
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 10000;
      width: 100%;
      height: 100%;

    }
    .remark-modal .content{
      min-width: 400px;
      background-color: white;
      padding: 20px;
      position: relative;
      border-radius: 20px;
    }

    .remark-close-btn{
      position: absolute;
      right: 0;
      top: 0;
      border: 1px solid red;
      border-radius: 100%;
      width: 30px;
      height: 30px;

    }

    .remark-header{
      font-weight: bold;
      font-size: 20px;
      margin-bottom: 10px;
    }
    .remark-body{
      text-align: right;
    }

    .remark-add-btn{
      margin-top: 20px;
      padding: 5px 10px;
      border-color: #138496;
      background-color: #138496;
      color: antiquewhite;
    }
    
  </style>
  <script>
    window.attendance_id  = {!!$attendance->id!!}
    window.students = {!!$students->toJson()!!};




   

 </script>
  @endslot
    <main>
      {{-- <div class="remark-modal">
        <div class="content">
          <button class="remark-close-btn">X</button>
          <div class="remark-header">
            <div>Saiful islam Remark</div>
            <small>Date: 22-06-2023</small>
          </div>
          <div class="remark-body">
            <input type="text" class="form-control">
            <button class="remark-add-btn">Save</button>
          </div>
        </div>
      </div> --}}
        <div class="container-fluid">

            <div class="card mt-4">

                <div class="card-header">
                    <div class="row">
                        <div class="col-md-9 my-auto">
                            <i class="far fa-list-alt"></i> Attedance <i class="fas fa-angle-right"></i> Attedance Entry ({{$attendance->batch->title}})
                        </div>
                        <div class="col-md-3 text-right">

                            <a href="{{ route('attendance.index') }}" class="btn btn-outline-primary"> <i
                                    class="fas fa-folder-open text-warning"></i> Attedance Record</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">

                    <div class="mt-3 card-body">
                      <div class="row mb-2">
                        <div class="col-3"><button class="btn btn-info btn-block" onclick="showList(1,10)">Show 1 To 10</button></div>
                        @if($days->where('isAfter',false)->count()>10)
                        <div class="col-3"><button class="btn btn-info btn-block" onclick="showList(11,20)">Show 11 To 20</button></div>
                        @endif
                        @if($days->where('isAfter',false)->count()>20)
                        <div class="col-3"><button class="btn btn-info btn-block" onclick="showList(21,35)">Show 21 To {{$days->last()['value']}}</button></div>
                        @endif

                        <div class="col-3"><button class="btn btn-info btn-block" onclick="showList(1,35)">Show All Colunm</button></div>
                      </div>
                     <div style="width: 100%;overflow:auto;">
                      <table class="table table-striped table-bordered" id="table">
                        <thead>
                          <tr>
                            <th  scope="col">#</th>
                            <th  scope="col">Name</th>
                            @foreach ($days->where('isAfter',false) as $d)
                            <th class="table-col" scope="col" >
                             <div @class(['text-red' => $d['off_day']])> {{$d['value']}}</div>
                             <small @class(['text-red' => $d['off_day']])>{{$d['text']}}</small>
                            </th>
                            @endforeach
                          </tr>
                        </thead>
                        <tbody id="tableBody">
                          </tbody>
                      </table>
                     </div>
                       
                    </div>
                </div>
            </div>
    </main>
    @slot('script')
    
    <script src="/assets/js/attend-form.js"></script>
    
       
    @endslot
</x-admin-layout>
