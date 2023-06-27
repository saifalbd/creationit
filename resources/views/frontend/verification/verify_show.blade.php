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
           <td width="20%" rowspan="10" align="right" valign="top"><img src="../uploads/photo2023-03-14-16-13-44_641048d8ef8ac.png" height="180px;" /></td>
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
     
     
     {{-- <h4>
        Course Information  
        <hr>
     </h4>
     <div>
           <!-- Basic Plan -->
      
        <ul>
             <li> <span > Course Title:  <strong> Office Application [Basic] </strong> </span> </li>
             <li> <span > Type:   <strong> Non-Certificate</strong></span> </li>
             <li> <span > Dureation:    <strong> 3/6 Months</strong></span></li>
             <li> <span > Session:   <strong> January</strong></span> </li>
             <li> <span > Roll:    <strong> 2</strong></span> </li>
             <li> <span > Reg:   <strong> 07</strong></span> </li>
             <hr>
             <div style="display:none"> 
             <li> <span > Grade:   <strong> </strong></span> </li>
             <li> <span > Course Completed Date:   <strong> 0000-00-00</strong></span> </li>
      </div>
        </ul>
        </div> --}}
     </section>


    </x-frontend-layout>
    