<x-frontend-layout>
    <section class="call-action">
    <div class="container">
        <div class="row">
           <div class="col-12">
               <div class="section-title  style2 text-center">
                 <div class="section-top">
                    <h1><span>Student</span><b> Verification</b></h1>
                    <h4></h4>
                 </div>
              </div>
           </div>
        </div>
        
        <div class="verify-heding">
         <h4 style="margin: 0;padding: 5px;padding-left:0px;">
            Admission ID:    {{$data->id}}  <br>
            Student Name:   {{$data->name}}  
         </h4>
        </div>
      
     <hr>
     
     <table width="100%" border="0" cellpadding="0" cellspacing="0" class="font-family">
        <tr>
           <td width="20%" nowrap>Date of Birth</td>
           <td width="5%" align="center">: </td>
           <td><strong>{{$data->date_of_birth}}</strong>
           </td>
           <td width="20%" rowspan="10" align="right" valign="top"><img src="/assets/img/{{$data->avatar->path}}" height="180px;" /></td>
        </tr>
        <tr>
           <td width="20%">Gender</td>
           <td width="5%" align="center">: </td>
           <td><strong>{{$data->gender}}</strong> </td>
        </tr>
        <tr>
           <td width="20%" scope="col" nowrap>Father Name</td>
           <td width="5%" align="center" scope="col">:</td>
           <td scope="col"><strong>{{$data->father_name}}</strong> </td>
        </tr>
        <tr>
           <td width="20%" nowrap>Mother Name</td>
           <td width="5%" align="center">: </td>
           <td><strong>{{$data->mother_name}}</strong> </td>
        </tr>
        <tr>
           <td width="20%" nowrap>{{$data->occupation}}</td>
           <td width="5%" align="center">: </td>
           <td><strong>Occupation</strong> </td>
        </tr>
      
        <tr>
           <td width="20%" nowrap>Email</td>
           <td width="5%" align="center">: </td>
           <td><strong>{{$data->email}}</strong> </td>
        </tr>
        <tr>
           <td width="20%" nowrap>Present Address</td>
           <td width="5%" align="center">: </td>
           <td><strong>   {{$data->present_address}}  </strong> </td>
        </tr>
        <tr>
           <td width="20%" nowrap>Permanent Addr.</td>
           <td width="5%" align="center">: </td>
           <td><strong> {{$data->permanent_address}}</strong> </td>
        </tr>
     </table>

     <div class="verify-heding">
        <h4>
           Course Information  
           <hr>
        </h4>
     </div>
     <div>
           <!-- Basic Plan -->
          <div class="crse-text">
            <ul>
               <li> <span > Course Title:  <strong> {{$course->course->name}}</strong> </span> </li>
               <li> <span > Type:   <strong> {{$course->type}}</strong></span> </li>
               <li> <span > Duration:    <strong> {{$course->duration}} Months</strong></span></li>
               <li> <span > Session:   <strong> {{$course->session}}</strong></span> </li>
               <li> <span > Roll:    <strong> {{$course->roll}}</strong></span> </li>
               <li> <span > Reg:   <strong> {{$course->registration_no}}</strong></span> </li>
               <li> <span > Academic Year:   <strong> {{$course->academic_year}}</strong></span> </li>
               <hr>
               <div style="display:none"> 
               <li> <span > Grade:   <strong> </strong></span> </li>
               <li> <span > Course Completed Date:   <strong> 0000-00-00</strong></span> </li>
              </ul>
          </div>
      </div>
      
      <div>
            <!-- Basic Plan -->
            <ul>
             
              <div> 
               @if($data->status == 2)
              <li> <span > Course Status:   <strong  style="color:green;border:1px solid;padding:0px 5px">Completed </strong></span> </li>
              <li> <span> Course Completed Date:   <strong> {{\Carbon\Carbon::parse($course->updated_at)->format('d/m/Y')}}</strong></span> </li>
               @else
               <li> <span > Course Status: <strong style="color:orange;border:1px solid;padding:0px 5px"> Running</strong></span> </li>
               @endif
            </ul>
         </div>
        </div>

     </section>


<style>
.font-family tr, td, strong {
	font-family: "Poppins",serif !important;
}


.verify-heding h4 {
	font-family: "Poppins",serif !important;
}

.crse-text ul li span {
	font-family: "Poppins",serif !important;
}





</style>

</x-frontend-layout>
    