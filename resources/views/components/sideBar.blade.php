<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
       <div class="sb-sidenav-menu">
          <div class="nav">
             <div class="sb-sidenav-menu-heading"> </div>
             <a class="nav-link dahboard-btn" style="padding: 9px;color: #fff!important;" href="{{route('home')}}">
                <div class="sb-nav-link-icon "><i class="fas fa-tachometer-alt"  ></i></div>
                Dashboard
             </a>

             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#productinfo" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="far fa-list-alt"></i></div>
                Course  Info
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
             </a>
             <div class="collapse" id="productinfo" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    @can('view', auth()->user())
                   <a class="nav-link text-white" href="{{route('course.create')}}">Course Entry</a>
                   @endcan
                   <a class="nav-link text-white" href="{{route('course.index')}}">List of Course</a>
                </nav>
             </div>


        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#batch" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-layer-group"></i></div>
                Batch  Info
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
             </a>
             <div class="collapse" id="batch" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    @can('view', auth()->user())
                   <a class="nav-link text-white" href="{{route('batch.create')}}">Batch Entry</a>
                   @endcan
                   <a class="nav-link text-white" href=" {{route('batch.index')}}">List of Batch</a>
                </nav>
             </div>


                 <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#admission" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-edit"></i></div>
                Admission
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
             </a>
             <div class="collapse" id="admission" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                   <a class="nav-link text-white" href="{{route('student.create')}}"> Admission  </a>
                   <a class="nav-link text-white" href="{{route('pendingStudent.index')}}"> Pending Admission   </a>
                   <a class="nav-link text-white" href="{{route('student.index')}}"> Current Student</a>
                   <a class="nav-link text-white" href="{{route('student.courseCompleted')}}"> Course Completed</a>

                </nav>
             </div>






                  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#fees" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-file-invoice"></i></div>
                Fees Collection
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
             </a>
             <div class="collapse" id="fees" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="{{route('fee.create')}}"> Fees Receive</a>
                <a class="nav-link" href="{{route('fee.index')}}"> Received List</a>

                </nav>
             </div>


                             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#attednace" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"> <i class="far fa-check-circle"></i> </div>
                Attednace
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
             </a>
             <div class="collapse" id="attednace" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                   <a class="nav-link text-white" href="{{route('attendance.create')}}"> Attednace Entry  </a>
                   <a class="nav-link text-white" href="{{route('attendance.index')}}"> Attednace Record </a>

                </nav>
             </div>


            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#settings" aria-expanded="false" aria-controls="collapsePages">
                <div class="sb-nav-link-icon"><i class="fas fa-sms"></i></div>
            Send SMS
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
             </a>
             <div class="collapse" id="settings" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link text-white" href="{{route('message.attendance')}}">Attednace SMS</a>
                    <a class="nav-link text-white" href="{{route('message.due')}}">Dues Alert</a>
                    <a class="nav-link text-white" href="{{route('message.bulk')}}">Bulk SMS</a>

                </nav>
             </div>

                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#stock" aria-expanded="false" aria-controls="collapsePages">
                <div class="sb-nav-link-icon"><i class="fas fa-user-tie"></i></div>
                Instructor
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
             </a>
             <div class="collapse" id="stock" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    @can('view', auth()->user())
             <a class="nav-link" href="{{route('instructor.create')}}"> Create Instructor </a>
             @endcan
             <a class="nav-link" href="{{route('instructor.index')}}"> Instructor List</a>
                </nav>
             </div>



        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#invoice" aria-expanded="false" aria-controls="collapsePages">
                <div class="sb-nav-link-icon"><i class="fas fa-file-invoice"></i></div>
            Invoice
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
             </a>
             <div class="collapse" id="invoice" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                   <a class="nav-link" href="{{route('invoice.create')}}"> New Invoice </a>
                   <a class="nav-link" href="{{route('invoice.index')}}"> List Invoice</a>
                </nav>
             </div>

        {{-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#sales" aria-expanded="false" aria-controls="collapsePages">
                <div class="sb-nav-link-icon"><i class="fas fa-file-invoice"></i></div>
            Sales
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
             </a>
             <div class="collapse" id="sales" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                   <a class="nav-link" href="add_invoice.php">Add Sale </a>
                   <a class="nav-link" href="list_invoice.php"> List Sale</a>
                </nav>
             </div> --}}

        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#vouchers" aria-expanded="false" aria-controls="collapsePages">
                <div class="sb-nav-link-icon"><i class="fas fa-file-invoice"></i></div>
          General Account
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
             </a>
             <div class="collapse" id="vouchers" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                   <a class="nav-link" href="{{route('voucher.create')}}"> Transaction Entry</a>
                   <a class="nav-link" href="{{route('voucher.index')}}"> Transaction List</a>
                </nav>
             </div>


            @can('view', auth()->user())
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#user" aria-expanded="false" aria-controls="collapsePages">
                <div class="sb-nav-link-icon"><i class="fas fa-file-invoice"></i></div>
            Users
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
             </a>
             <div class="collapse" id="user" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                   <a class="nav-link" href="{{route('user.create')}}"> Create User </a>
                   <a class="nav-link" href="{{route('user.index')}}"> List User</a>
                </nav>
             </div>
                
            @endcan
        


             <a class="nav-link collapsed" href="{{route('report.index')}}" >
                <div class="sb-nav-link-icon"><i class="fas fa-print"></i></div>
            Reports
             </a>

             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#holiday" aria-expanded="false" aria-controls="collapsePages">
               <div class="sb-nav-link-icon"><i class="fas fa-file-invoice"></i></div>
           Holidays
               <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="holiday" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
               <nav class="sb-sidenav-menu-nested nav">
                  <a class="nav-link" href="{{route('holiday.create')}}"> New Holiday </a>
                  <a class="nav-link" href="{{route('holiday.index')}}"> List Holiday</a>
               </nav>
            </div>

                   <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-globe"></i></div> Front End
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
             </a>
             <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
               <nav class="sb-sidenav-menu-nested nav">
                   <a class="nav-link" href="{{route('seminar.index')}}">Seminar</a>
                           <a class="nav-link" href="{{route('page.create')}}">Add Page</a>
                           <a class="nav-link" href="{{route('page.index')}}">Page Archive</a>
                           <a class="nav-link" href="{{route('slider.create')}}">Slider</a>
                           <a class="nav-link" href="{{route('successfull.index')}}">Successfull Student</a>
                           <a class="nav-link" href="{{route('achivement.index')}}">Achivement</a>
                           <a class="nav-link" href="{{route('contact.show')}}">Contact</a>
                           <a class="nav-link" href="{{route('video.create')}}">Video</a>
                           <a class="nav-link" href="{{route('hero.create')}}">Hero Section</a>
                           <a class="nav-link" target="_blank" href="{{route('frontend')}}">Visit Website</a>
                        </nav>
             </div>



          </div>
       </div>
       <div class="sb-sidenav-footer">
          {{-- <div class="small">V 1.0.1 Last Update: 15-05-2021</div> --}}
       </div>
    </nav>
 </div>