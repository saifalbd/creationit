<x-admin-layout>
<main>
               <div class="container-fluid"> <form name="frmUser" method="get" action="preview_student.php" enctype="multipart/form-data" >
<div class="mt-4 mb-3 page-title"> 
	
   <div class="row">
 
      <div class="col-md-7 m-auto">
        Welcome to explore E-TCMS 1.0.1
      </div>
      <div class="col-md-3 text-right">
        <input type="number" class="form-control" name="id" Placeholder="Enter Admission ID" autofocus >
      </div>
	       <div class="col-md-2 text-right">
		    <input type="submit" name="submit" Value="Search" class="btn btn-primary btn-block ">
		    </div>
			
   </div>
   </form>
</div>
  <div class="wedget-statistic mb-3">
<div class="row">
 <!--- Bill statisticS --->
   <div class="col-md-3 col-xl-3">
   <div class="bg-c-blue">
 
            <h1 class="text-right"><i class="fas fa-sync-alt f-left"></i>  <span style="font-size:15px;"> Unverified </span> </h1>
        
    
            <br><a class="text-dark"href="list_new_applicaion.php">Pending Admission <span class="f-right">
			2   </a></span>
			   
			   
			     <br><a class="text-dark" href="list_free_collection_unverified.php">  Unauthorised Payment <span class="f-right">
				 0   </a></span>
			   
			   
     
      </div>
   </div>
   <!--- Bill statisticS --->
   
   <!--- client statisticS --->
   <div class="col-md-3 col-xl-3">
      <div class="bg-c-blue">
 
            <h1 class="text-right"><i class="fas fa-user-graduate f-left"></i> <span style="font-size:15px;"> Student Info </span> </h1>
            <br>
           <a class="text-dark" href="list_admission.php"> Current Student</a>
		   <span class="f-right">
               105            </span>
            <br>
			<a class="text-dark" href="list_course_completed.php">Ex Students</a> 
			<span class="f-right"> 
			
			81 
			   </span>
         
   
      </div>
   </div>
   <!--- client statisticS --->
  
     <!--- Day statisticS --->
   <div class="col-md-3 col-xl-3">
      <div class="bg-c-blue">
 
            <h1 class="text-right"><i class="fas fa-file-invoice f-left"></i> <span style="font-size:15px;"> Payment Info </span> </h1>
            <br>
            Today Fees Received<span class="f-right">
                           </span>
            <br><a class="text-dark" href="report_fees_dues.php">  Total Dues Payment </a>  <span class="f-right"> 
			
			-325500 
			   </span>
         
   
      </div>
   </div>
    <!--- Day statisticS --->
	
   <!--- Day statisticS --->
   <div class="col-md-3 col-xl-3">
     <div class="bg-c-blue">
 
            <h1 class="text-right"><i class="fas fa-chart-line f-left"></i> <span style="font-size:15px;"> General Account</span> </h1>
            <br>
            Income Today<span class="f-right">  </span>
          
			  <br> Expense Today<span class="f-right">  </span>
        
      </div>
   </div>
   </div>
   </div>
   <!--- Day statisticS --->

<div class="row">
   <div class="col-xl-6">
      <div class="card mb-3">
         <div class="card-header">
            <i class="fas fa-chart-area mr-1"></i>
           Collection Flow
         </div>
         <div class="card-body">
            <canvas id="myAreaChart" width="100%" height="40"></canvas>
         </div>
      </div>
   </div>
   <div class="col-xl-6">
      <div class="card mb-3">
         <div class="card-header">
            <i class="fas fa-chart-pie mr-1"></i>
          Course Wise Admission
         </div>
         <div class="card-body">
            <canvas id="myPieChart" width="100%" height="40"></canvas>
         </div>
      </div>
   </div>
</div>


<div class="row">

 


   <div class="col-xl-6">
      <div class="card mb-4">
         <div class="card-header">
            <i class="fas fa-check mr-1"></i>
            Receiveable Fees Today
         </div>
         <div class="card-body">
            <div style="overflow-y: scroll; max-height: 175px; padding-right: 30px;">
            

               <ul>

                  There are no installments today
               </ul>
            </div>
         </div>
      </div>
   </div>



   <div class="col-xl-6">
      <div class="card mb-4">
         <div class="card-header">
            <i class="fas fa-check-circle mr-1"></i>
         Today's  Fees Collection
         </div>
         <div class="card-body">
            <div style="overflow-y: scroll; max-height: 175px; padding-right: 30px;">
                              <ul>
                  No Collection Yet
               </ul>
            </div>
         </div>
      </div>
   </div>

</div>
 </main>
</x-admin-layout>