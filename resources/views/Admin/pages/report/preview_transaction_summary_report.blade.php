<x-report-layout title="CATEGORY WISE REPORT SUMMARY">
    @slot('date')
    Date: <strong>{{$from}}-{{$to}}</strong>
    @endslot

    <table width="100%" border="1" cellpadding="0" cellspacing="0" class="RFtable">
        <thead>
                     <tr>
                        <th>#</th>
                        <th> Category </th>
                        <th> Cash Received</th>
                        <th> Cash Payment</th>
                        <th> Balance </th>
                 
                     </tr>
                  </thead>
                  <tbody>
                                @foreach ($ledgers as $ledger)
                                <tr>
                                    <td class="bn-font">{{$ledger->id}}</td>
                                    <td>{{$ledger->name}}</td>
                                    <td class="bn-font" align="right">{{$ledger->totalReceipt}}</td>
                                    <td class="bn-font" align="right">{{$ledger->totalPayment}}</td>
                                    <td class="bn-font" align="right">{{$ledger->totalBalance}}</td>
                                    
                                 </tr>
                                @endforeach
                     
                    
                     
                                 </tbody>
                  <tfoot>
                    <tr>
                        <td colspan="2" style="text-align: right;"><b>Total:</b></td>
                        <td  style="text-align: right;"><b>{{$ledgers->sum('totalReceipt')}}</b></td>
                        <td  style="text-align: right;"><b>{{$ledgers->sum('totalPayment')}}</b></td>
                        <td  style="text-align: right;"><b>{{$ledgers->sum('totalBalance')}}</b></td>
                    </tr>
      </tfoot>
    </table>
</x-report-layout>