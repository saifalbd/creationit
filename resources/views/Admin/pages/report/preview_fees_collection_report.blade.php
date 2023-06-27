<x-report-layout title="DATE WISE FEES COLLECTION REPORT">


@slot('date')
Date: <strong>{{$from}}-{{$to}}</strong>
@endslot


    <table width="100%" border="1" cellpadding="0" cellspacing="0" class="RFtable">
        <thead>
            <tr>
				<th> Admmission#</th>
				<th> Student Name </th>
				<th> Batch </th>
                <th> Course </th>
				<th> Fee</th>
				<th> Mode</th>
				<th> Trx. No</th>
				<th> Remark </th>
				<th> Date </th>

               </tr>
        </thead>
        <tbody>
            @foreach ($vouchers as $v)

            <tr>
                <td width="0%" >{{$v->student->id}}</td>
                <td>{{$v->student->name}}</td>
                <td></td>
                <td>{{$v->courseNames}}</td>
                <td>{{$v->amount}}</td>
                <td>{{$v->detailModes}}</td>
                <td>{{$v->detailTrxNos}}</td>
                <td>{{$v->remark}}</td>
                <td>{{format($v->date)}}</td>


            </tr>

            @endforeach

        </tbody>
        <tfoot>
    </table>
</x-report-layout>
