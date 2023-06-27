<x-admin-layout>
  @slot('style')
  <script>
    window.attendance_id  = {!!$attendance->id!!}
    window.students = {!!$students->toJson()!!};




   

 </script>
  @endslot
    <main>
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
                            <th class="table-col" scope="col">
                             <div> {{$d['value']}}</div>
                             <small>{{$d['text']}}</small>
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
    
    <script>
      
const tb = $('#tableBody');

         
const attendPost = async (attendance_student,obj)=>{

    
    const rawResponse = await fetch(`/api/attendance-update/${attendance_student}`, {
    method: 'POST',
    headers: {
      'Accept': 'application/json',
      'Content-Type': 'application/json'
    },
    body: JSON.stringify(obj)
  });
  const content = await rawResponse.json();
  console.log(content)
}

students.forEach((student,i) => {
    console.log(student)
let row =  document.createElement('tr');
let id = document.createElement('td');
let name = document.createElement('td');
name.style.whiteSpace = 'nowrap';
id.textContent  = student.id;
name.textContent = student.name;
row.appendChild(id);
row.appendChild(name);

student.attends.filter(item=>!item.isAfter).forEach(d=>{
    let dom = document.createElement('td'); 
    dom.style.padding ='10px 20px';
    dom.classList.add('table-col')
    row.appendChild(dom);
    let cBox  = document.createElement('input');
    cBox.setAttribute('type','checkbox');
    cBox.style.transform = 'scale(1.7)'
    if(d.attend){
        cBox.setAttribute('checked',true)
    }
   
    dom.appendChild(cBox);
    cBox.addEventListener('change',function(){
        let attend = this.checked?1:0;
      
        const remark = d.remark;
        const entry = d.entry;
        const leave = d.leave;

        attendPost(d.id,{attend,remark,entry,leave});


    })
})


tb.append(row)
});

    </script>
    
       
    @endslot
</x-admin-layout>
