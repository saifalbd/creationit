<x-report-layout title="DATE WISE {{$ledger->name}} REPORT">
    @slot('date')
Date: <strong>{{$from}}-{{$to}}</strong>
@endslot

<table width="100%" border="1" cellpadding="0" cellspacing="0" class="RFtable">
    <thead>
                 <tr>
                    <th> #</th>
                    <th> Date </th>
                    <th> Category </th>
                    <th> Description </th>
                    <th> Vouhar No.</th>
                    <th> Cash Received</th>
                    <th> Cash Payment </th>
             
                 </tr>
              </thead>
              <tbody>
                @foreach ($vouchers as $voucher)
                <tr>
                    <td class="bn-font">1</td>
                    <td class="bn-font" align="center">{{format($voucher->date)}}</td>
                    <td>{{$voucher->details->ledger->name}}</td>
                    <td>{{$voucher->voucher_no}}</td>
                    <td>{{$voucher->remark}}</td>
                    <td style="text-align: right;">{{$voucher->receiptAmount}}</td>
                    <td style="text-align: right;">{{$voucher->paymentAmount}}</td>
                 </tr>
                @endforeach
                            
                 
                             </tbody>
              <tfoot>
                <tr>
                    <td colspan="5"  style="text-align: right;"><b>Total:</b></td>
                    <td  style="text-align: right;"><b>{{$vouchers->sum('receiptAmount')}}</b></td>
                    <td  style="text-align: right;"><b>{{$vouchers->sum('paymentAmount')}}</b></td>
                </tr>
  </tfoot>
</table>

</x-report-layout>