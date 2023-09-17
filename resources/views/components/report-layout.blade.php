
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>::: explore Report Builder :::</title>
    <link rel="stylesheet " href="{{asset('assets/css/print.css')}}">
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
    <img src="{{comInfo('avatar')->url}}" width="150" alt="" style="float: left; position: absolute;">
    <div style="text-align: center;padding-bottom:10px; ">
        <h2 style="margin:0">{{comInfo('institute')}}</h2>
        <div class="address">{{comInfo('address')}}</div>
    </div>
    <!-- Header End -->
    <br>
    <hr><div class="report-title">{{$title}}<br>
       @isset($date)
           {{$date}}
       @endisset
    </div>

    {{$slot}}

   
    <br>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
