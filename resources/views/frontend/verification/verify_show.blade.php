<x-frontend-layout>
    <section class="call-action">
    <div class="container">
        <div class="row">
           <div class="col-12">
               <div class="section-title  style2 text-center">
                 <div class="section-top">
                    <h1><span>Student</span><b> Verfication</b></h1>
                    <h4></h4>
                 </div>
              </div>
           </div>
        </div>
        
        <h4 style="margin: 0;padding: 5px;padding-left:0px;">
        Admission ID:    {{$data[0]->id}}  <br>
        Student Name:   {{$data[0]->name}}  
     </h4>
      
     <hr>
     
     <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
           <td width="20%" nowrap>Date of Birth</td>
           <td width="5%" align="center">: </td>
           <td><strong>{{$data[0]->date_of_birth}}</strong>
           </td>
           <td width="20%" rowspan="10" align="right" valign="top"><img src="/assets/img/{{$avatarInfo[0]->avatar->path}}" height="180px;" /></td>
        </tr>
        <tr>
           <td width="20%">Gender</td>
           <td width="5%" align="center">: </td>
           <td><strong>{{$data[0]->gender}}</strong> </td>
        </tr>
        <tr>
           <td width="20%" scope="col" nowrap>Father Name</td>
           <td width="5%" align="center" scope="col">:</td>
           <td scope="col"><strong>{{$data[0]->father_name}}</strong> </td>
        </tr>
        <tr>
           <td width="20%" nowrap>Mother Name</td>
           <td width="5%" align="center">: </td>
           <td><strong>{{$data[0]->mother_name}}</strong> </td>
        </tr>
        <tr>
           <td width="20%" nowrap>{{$data[0]->occupation}}</td>
           <td width="5%" align="center">: </td>
           <td><strong>Student</strong> </td>
        </tr>
      
        <tr>
           <td width="20%" nowrap>Email</td>
           <td width="5%" align="center">: </td>
           <td><strong>{{$data[0]->email}}</strong> </td>
        </tr>
        <tr>
           <td width="20%" nowrap>Present Address</td>
           <td width="5%" align="center">: </td>
           <td><strong>   {{$data[0]->present_address}}  </strong> </td>
        </tr>
        <tr>
           <td width="20%" nowrap>Permanent Addr.</td>
           <td width="5%" align="center">: </td>
           <td><strong> {{$data[0]->permanent_address}}</strong> </td>
        </tr>
     </table>

     
     <h4>
        Course Information  
        <hr>
     </h4>
     <div>
           <!-- Basic Plan -->
           <ul>
             <li> <span > Course Title:  <strong> {{$courseInfo[0]->course->name}}</strong> </span> </li>
             <li> <span > Type:   <strong> {{$data[0]->courses[0]->type}}</strong></span> </li>
             <li> <span > Dureation:    <strong> {{$courseInfo[0]->course->duration}} Month</strong></span></li>
             <li> <span > Session:   <strong> {{$data[0]->courses[0]->session}}</strong></span> </li>
             <li> <span > Roll:    <strong> {{$data[0]->courses[0]->roll}}</strong></span> </li>
             <li> <span > Reg:   <strong> {{$data[0]->courses[0]->registration_no}}</strong></span> </li>
             <li> <span > Academic Year:   <strong> {{$data[0]->courses[0]->academic_year}}</strong></span> </li>
             <hr>
             <div style="display:none"> 
             <li> <span > Grade:   <strong> </strong></span> </li>
             <li> <span > Course Completed Date:   <strong> 0000-00-00</strong></span> </li>
            </ul>
      </div>
      
      <div>
            <!-- Basic Plan -->
            <ul>
             
              <div> 
               @if($data[0]->status == 2)
              <li> <span > Course Status:   <strong  style="color:green;border:1px solid;padding:0px 5px">Completed </strong></span> </li>
              <li> <span> Course Completed Date:   <strong> {{\Carbon\Carbon::parse($data[0]->updated_at)->format('d/m/Y')}}</strong></span> </li>
               @else
               <li> <span > Course Status: <strong style="color:orange;border:1px solid;padding:0px 5px"> Running</strong></span> </li>
               @endif
            </ul>
         </div>
        </div>

     </section>


    </x-frontend-layout>
    