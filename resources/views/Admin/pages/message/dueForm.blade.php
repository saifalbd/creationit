<x-admin-layout>
    <main>
        <div class="container-fluid">
            <div class="mt-3 page-title">{{ $batch->title }} SMS <i class="fas fa-angle-right"></i> Absent SMS</div>
            <div class="card mb-4">
                <div class="card-body">

                    <div class="row">
                        <div class="col-12 py-4">
                            <div class="row">
                                <div class="col-2">
                                    <div class="form-group">
                                        <label>Before Student Name</label>
                                        <input class="form-control" id="before" value="Dear">
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="form-group">
                                        <label>After Student Name</label>
                                        <input class="form-control"
                                            value="Your fee payment is due. This is friendly reminder to submit it and ignore it if you already process it. Total pending amount is"
                                            id="after">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>After Due Amount</label>
                                        <input class="form-control"
                                            value="and due Installment amount is"
                                            id="afterDue">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Footer</label>
                                        <textarea type="text" class="form-control" rows="3" aria-describedby="button-addon2"
                                            style="border-top-right-radius:0;border-bottom-right-radius:0;" id="footer">
Regards,
{{ comInfo('institute') }}
    </textarea>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn btn-info" type="button" id="apply">Apply</button>
                                </div>
                            </div>
                        </div>
                        <form class="col-12" method="POST" action="{{ route('message.dueFormSend') }}">
                            @csrf
                            <table class="table table-striped table-bordered" id="table">
                                <thead>
                                    <tr>
                                        <th> Admission ID</th>
                                        <th>Name</th>
                                        <th>Fee</th>
                                        <th>Paid</th>
                                        <th>Due</th>
                                        <th>Message</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $index => $student)
                                        <tr>
                                            <td>{{ $student['id'] }}</td>
                                            <td>{{ $student['name'] }}</td>
                                            <td style="text-align: right">{{ $student['fee'] }}</td>
                                            <td style="text-align: right">{{ $student['paid'] }}</td>
                                           
                                            <td style="text-align: right">{{ $student['due'] }}</td>
                                            <td class="textbox">
                                                <input type="hidden" name="items[{{ $index }}][to]"
                                                value="{{ $student['mobile'] }}">
                                            
                                                <textarea 
                                                data-name="{{ $student['name'] }}"
                                                data-due="{{$student['due']}}"
                                                data-paid="{{$student['paid']}}"
                                                 class="form-control" name="items[{{ $index }}][message]" rows="5" cols="30" required></textarea>
                                                 <small  class="form-text text-muted">Text Count:0</small>
                                            </td>

                                        </tr>
                                    @endforeach

                                </tbody>

                            </table>
                            <div class="row mt-4">
                                <div class="col-12 text-right">
                                    <button class="btn btn-info btn-lg">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

    </main>
    @slot('script')
        {{-- <script src="/assets/js/table-script.js"></script> --}}
        <script type="application/javascript">
const before = document.getElementById('before');
const after = document.getElementById('after');
const afterDue = document.getElementById('afterDue');
const footer = document.getElementById('footer');
const apply = document.getElementById('apply');

const valis = (name,due,paid)=>{
   return `${before.value} ${name} ${after.value} ${due} ${afterDue.value} ${paid} \n ${footer.value}`;
}



apply.addEventListener('click',function(){
    const table = document.getElementById('table');
   const list =  table.getElementsByClassName('textbox');
   Array.prototype.forEach.call(list,(item)=>{
    const textArea = item.querySelector('textarea');
    const small = item.querySelector('small');
    let name = textArea.getAttribute('data-name');
    let due = textArea.getAttribute('data-due');
    let paid = textArea.getAttribute('data-paid');
    let val = valis(name,due,paid);
    small.textContent = 'Count Text : '+ val.length;
    
    textArea.value = val;

   });
    
})
    </script>
    @endslot
</x-admin-layout>
