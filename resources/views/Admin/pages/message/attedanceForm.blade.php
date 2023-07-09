<x-admin-layout>
    <main>
        <div class="container-fluid">
            <div class="mt-3 page-title">{{ $batch->title }} SMS <i class="fas fa-angle-right"></i> Absent SMS</div>
            <div class="card mb-4">
                <div class="card-body">

                    <div class="row">
                        <div class="col-12 py-4">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Before Student Name</label>
                                        <input class="form-control" id="before" value="Dear">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>After Student Name</label>
                                        <input class="form-control"
                                            value="We missed you in class today. Hope that you are well."
                                            id="after">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Footer</label>
                                        <textarea type="text" class="form-control" rows="4" aria-describedby="button-addon2"
                                            style="border-top-right-radius:0;border-bottom-right-radius:0;" id="footer">
        Regards,
        Your Instructor,
        {{ comInfo('institute') }}
                    </textarea>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn btn-info" type="button" id="apply">Apply</button>
                                </div>
                            </div>
                        </div>
                        <form class="col-12" method="POST" action="{{ route('message.attendanceFormStore') }}">
                            @csrf
                            <table class="table table-striped table-bordered" id="table">
                                <thead>
                                    <tr>
                                        <th> Admission ID</th>
                                        <th>Name</th>
                                        <th>Message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($attendance->list as $index => $item)
                                        <tr>
                                            <td>{{ $item->student->id }}</td>
                                            <td>{{ $item->student->name }}</td>
                                            <td class="textbox">
                                                <input type="hidden" name="items[{{ $index }}][to]"
                                                    value="{{ $item->student->mobile }}">
                                                <textarea rows="5" data-name="{{ $item->student->name }}" name="items[{{ $index }}][message]"
                                                    cols="30" class="form-control" required></textarea>
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
        <script type="application/javascript">
const before = document.getElementById('before');
const after = document.getElementById('after');
const footer = document.getElementById('footer');
const apply = document.getElementById('apply');

const valis = (name)=>{
   return `${before.value} ${name} ${after.value}
    ${footer.value}`;
}


apply.addEventListener('click',function(){
    const table = document.getElementById('table');
   const list =  table.getElementsByClassName('textbox');
   Array.prototype.forEach.call(list,(item)=>{
    const textArea = item.querySelector('textarea');
    const small = item.querySelector('small');
    let name = textArea.getAttribute('data-name');
    let val = valis(name);
    small.textContent = 'Count Text : '+ val.length;
    
    textArea.value = val;

   });
    
})
    </script>
    @endslot
</x-admin-layout>
