<!DOCTYPE php>
<html lang="en">

   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="/assets/img/logo.jpeg" type="image/x-icon">
      <title>Creation IT</title>
      <link href="/assets/css/style.css" rel="stylesheet" />
      <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
	       <!-- Edtor -->
      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/summernote/0.6.6/summernote.min.css'>
      <link rel="stylesheet" href="../assets/plugin/editor/style.css">
      <!-- Edtor -->
      <link rel='stylesheet' href='/assets/plugin/select2.min.css'>
      <link href="/assets/plugin/style.css" rel="stylesheet" />
      <link href="/assets/css/theme.css" rel="stylesheet" />
      <link href="/assets/css/typography.css" rel="stylesheet" />

   </head>
 
   <body class="sb-nav-fixed">


      <nav class="sb-topnav navbar navbar-expand navbar-light bg-light">
	  
         <a class="navbar-brand" href="index.php"> <img src="/assets/img/logo.jpeg" alt="" class="thumb-sm"> </a>
         <button class="btn btn-link btn-md order-1 order-lg-0 sidebar-btn" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
		 
         <div class="form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0 d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
		  
         </div>

         <!-- Navbar Search-->

         <!-- Navbar-->

         <ul class="navbar-nav ">
 
			<li class="nav-item dropdown nav-item d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-1 my-2 my-md-0">
			<a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> ‍<div class=" d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-q my-2 my-md-0"> </div> <i class="fas fa-info-circle"></i>  <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"> Info</div> </a>
			<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">

			<a class="nav-link" href="#"> Change Logo </a>
			<a class="nav-link" href="#"> SMS Balance </a>
			<a class="nav-link" href="#"> Expiretion </a>
			<a class="nav-link" href="#"> Tutorials </a>

			</div>
			</li>
			
          
        <li class="nav-item dropdown nav-item d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-1 my-2 my-md-0">
               <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> ‍<div class=" d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-q my-2 my-md-0"> </div> <i class="fas fa-sliders-h"></i>  <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"> Settings </div> </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">

			 
					<a class="nav-link" href="site_information.php"> System Info</a>
					<a class="nav-link" href="#option.php"> Option</a>
			
               </div>
            </li>

            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img src="assets/img/logo.jpeg" alt="" class="thumb-profile mr-2"> ‍<div class=" d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"> CIT </div> </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="user_profile.php"> User Profile</a>
                  <a class="dropdown-item" href="user_reset-password.php">Change Password</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="logout.php">Logout</a>
               </div>
            </li>
         </ul>


      </nav>
      <div id="layoutSidenav">
         <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
               <div class="sb-sidenav-menu">
                  <div class="nav">
                     <div class="sb-sidenav-menu-heading"> </div>
                     <a class="nav-link dahboard-btn" style="padding: 9px;color: #fff!important;" href="{{url('home')}}">
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
                           <a class="nav-link text-white" href="{{route('course.create')}}">Course Entry</a>
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
                           <a class="nav-link text-white" href="{{route('batch.create')}}">Batch Entry</a>
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
                           <a class="nav-link text-white" href="{{route('student.index')}}"> Pending Admission   </a>
                           <a class="nav-link text-white" href="list_admission.php"> Current Student</a>
                           <a class="nav-link text-white" href="list_course_completed.php"> Course Completed</a>
                           
                        </nav>
                     </div>
					 

 

				
					 
					      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#fees" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-file-invoice"></i></div>
                        Fees Collection
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                     </a>
                     <div class="collapse" id="fees" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
						<a class="nav-link" href="{{route('fees.create')}}"> Fees Receive</a>
						<a class="nav-link" href="{{route('fees.index')}}"> Received List</a>
						
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
							<a class="nav-link text-white" href="sms_attedance.php">Attednace SMS</a>
							<a class="nav-link text-white" href="sms_due.php">Dues Alert</a>
							<a class="nav-link text-white" href="sms_bulk.php">Bulk SMS</a>
                    
                        </nav>
                     </div>
					 
							<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#stock" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fas fa-user-tie"></i></div>
                        Instructor
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                     </a>
                     <div class="collapse" id="stock" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
					 <a class="nav-link" href="{{route('instructor.create')}}"> Create Instructor </a>
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

                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#sales" aria-expanded="false" aria-controls="collapsePages">
						<div class="sb-nav-link-icon"><i class="fas fa-file-invoice"></i></div>
					Sales
						<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
					 </a>
					 <div class="collapse" id="sales" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
						<nav class="sb-sidenav-menu-nested nav">
						   <a class="nav-link" href="add_invoice.php">Add Sale </a>
						   <a class="nav-link" href="list_invoice.php"> List Sale</a>
						</nav>
					 </div>

                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#user" aria-expanded="false" aria-controls="collapsePages">
						<div class="sb-nav-link-icon"><i class="fas fa-file-invoice"></i></div>
					Users
						<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
					 </a>
					 <div class="collapse" id="user" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
						<nav class="sb-sidenav-menu-nested nav">
						   <a class="nav-link" href="add_invoice.php"> Create User </a>
						   <a class="nav-link" href="list_invoice.php"> List User</a>
						</nav>
					 </div>
					 
					 <a class="nav-link collapsed" href="{{url('report/create')}}" >
						<div class="sb-nav-link-icon"><i class="fas fa-print"></i></div>
					Reports
					 </a>

					       <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-globe"></i></div> Front End
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                     </a>
                     <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                           <a class="nav-link" href="page_create.php">Add Page</a>
                           <a class="nav-link" href="page_archive.php">Page Archive</a>
                           <a class="nav-link" href="slider.php">Slider</a>
                           <a class="nav-link" target="_blank" href="../web"> Preview</a>
                        </nav>
                     </div>
					 
					 
 
                  </div>
               </div>
               <div class="sb-sidenav-footer">
                  <div class="small">V 1.0.1 Last Update: 15-05-2021</div>
               </div>
            </nav>
         </div>
         <div id="layoutSidenav_content">
         {{ $slot }}
 
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="/assets/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>

<script src="/assets/js/chart-bar-demo.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="/assets/js/datatables-demo.js"></script>


<script src='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.full.js'></script>
<script src="/assets/js/select2.js"></script>
<script src="/assets/js/sweetalert.js"></script>
    
  <!-- partial -->
 <script src='https://cdnjs.cloudflare.com/ajax/libs/summernote/0.6.6/summernote.min.js'></script>
 <script src="/assets/js/editor.js"></script>
	
 

	  <!-- Edtor -->
 <script type="text/javascript">
     $(document).ready(function() {
         $('#code_preview0').summernote({
             height: 300
         });
     });


 </script>
 
   </body>
<script>
   // Set new default font family and font color to mimic Bootstrap's default styling
   Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
   Chart.defaults.global.defaultFontColor = '#292b2c';
   // Pie Chart Example
   var ctx = document.getElementById("myPieChart");
   var myPieChart = new Chart(ctx, {
      type: 'pie',
      data: {
         labels: [
             "Computer Hardware",
             "Diploma In Graphic Design",
             "Motion Graphics & VFX",
             "Office Application [Basic]",
             "Professional Web Design ",
             "Spoken English",
                     ],
         datasets: [{
            data: [
                                    1,
                                    41,
                                    1,
                                    137,
                                    6,
                                    1,
                           ],
            backgroundColor: ['#007bff', '#dc3545', '#242424', '#28a745'],
         }],
      },
   });
</script>

<script>
   // Set new default font family and font color to mimic Bootstrap's default styling
   Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
   Chart.defaults.global.defaultFontColor = '#292b2c';
   // Area Chart Example
   var ctx = document.getElementById("myAreaChart");
   var myLineChart = new Chart(ctx, {
      type: 'line',
      data: {
         labels: [
             "2023-03-11",
             "2023-03-13",
             "2023-03-14",
             "2023-03-15",
             "2023-03-16",
             "2023-03-17",
             "2023-03-23",
             "2023-03-26",
             "2023-04-01",
             "2023-04-02",
             "2023-04-04",
             "2023-04-10",
             "2023-04-27",
             "2023-05-01",
             "2023-05-02",
                     ],
         datasets: [{
            label: "Amount",
            lineTension: 0.3,
            backgroundColor: "rgba(2,117,216,0.2)",
            borderColor: "rgba(2,117,216,1)",
            pointRadius: 5,
            pointBackgroundColor: "rgba(2,117,216,1)",
            pointBorderColor: "rgba(255,255,255,0.8)",
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(2,117,216,1)",
            pointHitRadius: 50,
            pointBorderWidth: 2,
            data: [
                                    3000,
                                    7000,
                                    152500,
                                    3000,
                                    7500,
                                    500,
                                    5000,
                                    6000,
                                    2500,
                                    3500,
                                    2000,
                                    500,
                                    6500,
                                    500,
                                    6500,
                           ],
         }],
      },
      options: {
         scales: {
            xAxes: [{
               time: {
                  unit: 'date'
               },
               gridLines: {
                  display: false
               },
               ticks: {
                  maxTicksLimit: 7
               }
            }],
            yAxes: [{
               ticks: {
                  min: 0,
                  
                  maxTicksLimit: 8
               },
               gridLines: {
                  color: "rgba(0, 0, 0, .125)",
               }
            }],
         },
         legend: {
            display: false
         }
      }
   });
</script>





<script>
    $(function(){
      // bind change event to select
      $('#dynamic_select').on('change', function () {
          var url = $(this).val(); // get selected value
          if (url) { // require a URL
              window.location = url; // redirect
          }
          return false;
      });
    });
 

</script>

</html>