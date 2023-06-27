
<x-report-layout title="Date Wise Admission Report">
    @slot('date')
    Date: <strong>{{$from}}-{{$to}}</strong>
    @endslot


    <table width="100%" border="1" cellpadding="0" cellspacing="0" class="RFtable">
        <thead>
        <tr>
            <th width="0%"> ID </th>
            <th vertical="Left"> Student Name </th>
            <th> Father Name </th>
            <th> Mobile </th>
           
            <th> Fee</th>
            <th> Reference</th>
            <th> Date</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)

            <tr>
                <td width="0%" >{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->father_name}}</td>
                <td>{{$student->mobile}}</td>
                
                <td>{{$student->courses->pluck('fee')->sum()}}</td>
                <td>{{$student->reference->ref}}</td>
                <td>{{$student->created_at->toDateString()}}</td>
            </tr>
                
            @endforeach
       
        </tbody>
        <tfoot>
    </table>
</x-report-layout>

