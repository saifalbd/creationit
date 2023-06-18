
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>::: explore Report Builder :::</title>
      <link rel="stylesheet " href="/assets/css/print.css">
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
  			<img src="../uploads/logo2023-04-25-20-05-54_6447de42b19de.png" width="50" alt="" style="float: left; position: absolute;"> 
			<div style="text-align: center; "> 
			<h2 style="margin:0">{{comInfo('institute')}}</h2>
			<div class="address">{{comInfo('address')}}</div>
			</div>
   <!-- Header End -->
         <br>
         <hr>
<br>
<div style="float: right; margin: 0;">
  <svg id="barcode" :value="sku"  ></svg>
</div>
<h3 style="margin: 0;padding: 5px;padding-left:0px;"> Admission ID: {{$student->id}} <br>
  Student Name: {{$student->name}} </h3>
<br>
<hr>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="20%" nowrap>Date of Birth</td>
    <td width="5%" align="center">: </td>
    <td><strong>
      {{$student->date_of_birth}}      </strong> </td>
    <td width="20%" rowspan="10" align="right" valign="top"><img src="{{$student->avatar->url}}" height="180px;" /></td>
  </tr>
  <tr>
    <td width="20%">Gender</td>
    <td width="5%" align="center">: </td>
    <td><strong>{{$student->gender}}</strong> </td>
  </tr>
  <tr>
    <td width="20%" scope="col" nowrap>Father Name</td>
    <td width="5%" align="center" scope="col">:</td>
    <td scope="col"><strong>{{$student->father_name}}</strong> </td>
  </tr>
  <tr>
    <td width="20%" nowrap>Mother Name</td>
    <td width="5%" align="center">: </td>
    <td><strong>{{$student->mother_name}}</strong> </td>
  </tr>
  <tr>
    <td width="20%" nowrap>Occupation</td>
    <td width="5%" align="center">: </td>
    <td><strong>Student</strong> </td>
  </tr>
  <tr>
    <td width="20%" nowrap>Mobile</td>
    <td width="5%" align="center">: </td>
    <td><strong>{{$student->mobile}}</strong> </td>
  </tr>
  <tr>
    <td width="20%" nowrap>Mobile Guardian</td>
    <td width="5%" align="center">: </td>
    <td><strong>{{$student->guardian_mobile}}</strong> </td>
  </tr>
  <tr>
    <td width="20%" nowrap>Email</td>
    <td width="5%" align="center">: </td>
    <td><strong>{{$student->email}}</strong> </td>
  </tr>
  <tr>
    <td width="20%" nowrap>Present Address</td>
    <td width="5%" align="center">: </td>
    <td><strong>{{$student->present_address}}</strong> </td>
  </tr>
  <tr>
    <td width="20%" nowrap>Permanent Addr.</td>
    <td width="5%" align="center">: </td>
    <td><strong>{{$student->permanent_address}}</strong> </td>
  </tr>
</table>
<br>
<h3> Course Information
  <hr>
</h3>

@foreach($student->courses as $c)
<div>

    <!-- Basic Plan -->
  <h4 style="margin:0">{{$c->course->name}}</h4>
  <ul>
    <li> <span > Type: {{$c->type}}</span> </li>
    <li> <span > Duration: {{$c->course->duration}} Months</span></li>
    <li> <span > Session:{{$c->session}}</span> </li>
    <li> <span > Roll: {{$c->roll}}</span> </li>
    <li> <span > Reg: {{$c->registration_no}}</span> </li>
    <li> <span > Course Fee:{{$c->fee}}</span> </li>
    <li> <span > Discount:{{$c->discount}}</span> </li>
    <li> <span > Payable:{{$c->fee-$c->discount}}</span> </li>
    <li> <span > Paid:
      5000      </span> </li>
    <li> <span > Dues: <strong> 0 </strong> </span> </li>
    <li> <span > Ref: </span> </li>
  </ul>
  </div>
  @endforeach
<br>
<h3> Fees Information
  <hr>
</h3>
<div style="float: left;    margin-right: 5px;    border: 1px solid;    padding: 5px;    text-align: center;"> <samp style="font-weight: bold;" > 
5000/-</samp> 
<samp>  14.03.2023  </samp> 
</div>
 
<br><br><br>
<h3>Attendance Information
  <hr>
</h3>
<strong>
15.06.2023</strong> [In: 00:00:00][Out: 00:00:00] [Absent] ***
<strong>
04.06.2023</strong> [In: 00:00:00][Out: 00:00:00] [Present] ***
<strong>
05.04.2023</strong> [In: 00:00:00][Out: 00:00:00] [Absent] ***
<strong>
01.04.2023</strong> [In: 00:00:00][Out: 00:00:00] [Absent] ***
<strong>
15.03.2023</strong> [In: 00:00:00][Out: 00:00:00] [Present] ***
<strong>
18.03.2023</strong> [In: 00:00:00][Out: 00:00:00] [Present] ***
<br>
<table width="75%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="33%" height="120" align="center" valign="bottom"><hr />
      Student Signature</td>
    <td width="33%" align="center" valign="bottom">&nbsp;</td>
    <td width="33%" align="center" valign="bottom"><hr>
      Authorized Signature</td>
  </tr>
</table>
<br>
<br>
<script>
   function goBack() {
   	window.history.back();
   }
</script>
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.2/vue.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jsbarcode/3.8.0/JsBarcode.all.js'></script>
<!--- Barcode -->
<script >
   new Vue({
     el: '#app',
     data: {
       sku: 'asdf' 
     },
     methods: {},
     mounted () {
       JsBarcode("#barcode", "38", {
         lineColor: '#5c4084',
         height: 15,
         displayValue: true
       });
     }
   });
</script>
