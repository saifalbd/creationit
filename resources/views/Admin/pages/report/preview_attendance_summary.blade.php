<x-report-layout title=" ATTENDANCE SUMMARRY REPORT">
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
            @foreach ($list as $a)
                <tr>
                    
                    <td>{{ $a->student->name }}</td>
                    
                    <td>{{ $a->student->mobile }}</td>
                    <td>
                        @if($a->attend)
                        <button class="btn btn-sm" style="color: #fff;
                        background-color: #28a745;
                        border-color: #28a745;">Attend</button>
                        @else
                        <button class="btn btn-sm" style="color: #fff;
                        background-color: #c82333;
                        border-color: #bd2130;">Absence</button>
                        @endif
                    </td>
                    <td>{{ $a->entry }}</td>
                    <td>{{ $a->leave }}</td>
                    <td>{{ format($a->date) }}</td>
                </tr>
            @endforeach

        </tbody>
        <tfoot>
    </table>
</x-report-layout>
