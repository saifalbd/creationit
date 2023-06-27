<x-report-layout title="DUES FEES REPORT">

    <table width="100%" border="1" cellpadding="0" cellspacing="0" class="RFtable">
        <thead>
            <tr>
                <th width="0%"> Admission# </th>
                <th align="left"> Student Name </th>
                <th align="left"> Batch</th>
                <th align="left"> Mobile </th>
                <th align="right"> Fee</th>
                <th align="right"> Discount</th>
                <th align="right"> Payable</th>
                <th align="right"> Paid</th>
                <th align="right"> Due</th>

            </tr>
        </thead>
        <tbody>
        @foreach($list as $item)
            <tr>
                <td width="0%">{{$item['id']}}</td>
                <td>{{$item['name']}}</td>
                <td>{{$item['batchNames']}}</td>
                <td>{{$item['mobile']}}</td>
                <td align="right">{{$item['fee']}}</td>
                <td align="right">{{$item['discount']}}</td>
                <td align="right">{{$item['payable']}}</td>
                <td align="right">{{$item['paid']}}</td>
                <td align="right"> <span class="total">{{$item['due']}}</span> </td>
            </tr>
        @endforeach


        </tbody>
        <tfoot>
        </tfoot>
    </table>
</x-report-layout>
