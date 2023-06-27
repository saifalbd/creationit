<x-report-layout title="{{ $batch->title }} ATTENDANCE REPORT">
    @slot('date')
        Date: <strong>{{ $date }}</strong>
    @endslot


    <table width="100%" border="1" cellpadding="0" cellspacing="0" class="RFtable">
        <thead>

            <tr>

                <th> Student Name
                </th>
                <th> Mobile Number
                </th>
                <th> Status</th>
                <th> In</th>
                <th> Out</th>
                <th> Remark </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td width="0%">{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->father_name }}</td>
                    <td>{{ $student->mobile }}</td>
                    <td>{{ $student->courseNames }}</td>
                    <td>{{ $student->courses->pluck('fee')->sum() }}</td>
                    <td>{{ $student->reference->ref }}</td>
                    <td>{{ $student->created_at->toDateString() }}</td>
                </tr>
            @endforeach

        </tbody>
        <tfoot>
    </table>
</x-report-layout>
