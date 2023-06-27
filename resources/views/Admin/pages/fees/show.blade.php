<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>::: Invoice No: {{$v->id}} :::</title>
    <link href="/assets/css/print.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/assets/plugin/cross-browser-qrcode/dist/style.css">
    <style>
        .qrcode img {
            width: 100%;
        }


        .wraper {

            width: 650px;

        }
    </style>
</head>

<body>
    <!-- Print Button -->
    <div class="bt-div">
        <INPUT TYPE="button" class="button blue" title="Print" onClick="window.print()" value="Print">
        <button class="button blue" onClick="goBack()">Back</button>
    </div>
    <!-- Print Button End -->
    <div class="wraper">
        <!-- Header -->
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td width="10%" height="74" valign="top"><img
                        src="../uploads/logo2023-04-25-20-05-54_6447de42b19de.png" height="64" alt=""></td>
                <td width="75%" align="center" valign="top">
                    <div style="padding-left:15px;">
                        <h2 style="margin:0;color: #3F51B5">{{comInfo('institute')}}</h2>

                        <h3 style="margin:0;">
                            {{comInfo('address')}} </h3>
                        <h3 style="margin:0;">
                        {{comInfo('mobile')}} </h2>
                    </div>
                </td>
                <td width="10%" align="right" valign="top">
                </td>
            </tr>
        </table>
        <hr>
        <h2 style="margin:0; text-align:center; color: crimson;">MONEY RECEIPT </h2>
        <p style="margin:0; text-align:center;">&nbsp;</p>
        <div></div>
        <!-- Header End -->
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td nowrap="nowrap">Student ID </td>
                <td align="center">: </td>
                <td><strong>12</strong> </td>
                <td width="4%" nowrap="nowrap">Receipt No.</td>
                <td width="2%" align="center">: </td>
                <td width="38%"><strong>{{$v->id}} </strong></td>
            </tr>
            <tr>
                <td width="6%" nowrap="nowrap">Student Name</td>
                <td width="3%" align="center">: </td>
                <td width="47%"><strong>{{$v->student->name}} </strong> </td>
                <td nowrap="nowrap">Date</td>
                <td align="center">: </td>
                <td><strong>
                        {{format($v->date)}} </strong></td>
            </tr>
            <tr>
                <td nowrap="nowrap">Address</td>
                <td align="center">: </td>
                <td><strong> {{$v->student->present_address}} </strong></td>


            </tr>
            <tr>
                <td nowrap="nowrap">Mobile# </td>
                <td align="center">: </td>
                <td><strong>{{$v->student->mobile}}</strong></td>

            </tr>
        </table>
        <br>
        <table width="100%" border="1" cellpadding="0" cellspacing="0" class="RFtable">
            <thead>
                <tr>

                    <th> Course </th>
                    <th> Fee</th>
                    <th> Mode</th>
                    <th> Trx. No</th>
                    <th> Remark </th>
                </tr>
            </thead>
            <tbody>

                @foreach($v->details as $detail)


                <tr>

                    <td>{{$detail->course->name}}</td>
                    <td>{{$detail->amount}}</td>
                    <td>{{$detail->amount}}</td>
                    <td>{{$detail->trx_no}}</td>
                    <td>{{$detail->remark}}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
        </table>

        <table width="75%" border="0" align="center">
            <tr>
                <td width="33%" height="89" align="center" valign="bottom"></td>
                <td width="33%" align="center" valign="bottom">&nbsp;</td>
                <td width="33%" align="center" valign="bottom">
                    <hr>
                    <strong>Authorized signature</strong>
                </td>
            </tr>
        </table>
        <center>
            <br>
            <br>
            <hr>

            <samp> SOFTWARE: exploreit.com.bd | </samp> Printing Time: 2023-06-17 10:24:58pm<samp>

                    <script>
                        function goBack() {
                            window.history.back();
                        }
                    </script>

                    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
                    <script src='http://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js'></script>
                    <script src="./assets/plugin/cross-browser-qrcode/dist/script.js"></script>
