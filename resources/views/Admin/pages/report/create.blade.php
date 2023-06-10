<x-admin-layout>
    <main>
        <div class="container-fluid"><div class="mt-3 page-title">Reports </div>
<div class="card mb-4">
<div class="card-body">
   <div class="row">  
     <div class="col-sm-6">
       <div class="form-group">
         <select id="reportelector" class="form-control" requaid>
           <option value=""> Select Report </option>
         <optgroup label="Admission Report">
           <option value="10">Date Wise Admission Report</option>
           <option value="11">Date & Course Wise Admission Report</option>
         </optgroup>
         <optgroup label="Attendance Report">
           <option value="8">Batch Wise Attendance Report</option>
           <option value="9">Attendance Absent Summary</option>
         </optgroup>
         
         <optgroup label="Fees Report">
           <option value="6">Fess Collection Report</option>
           <option value="7">Fess Dues Report</option>
         </optgroup>
         
         <optgroup label="Accounts Report">
           <option value="1">Date Wise Transaction Report</option>
           <option value="2">Category Wise Transaction Report</option>
           <option value="3">Category Wise Report Summary</option>
           <option value="4">Income and Expense Report</option>
         </optgroup>
 
         
         </select>
       </div>
     </div>
   </div>
   <div id="1" class="report" style="display:none">
     <form method="get" action="preview_transaction_report.php">
       <div class="row">
         <div class="col-sm-3">
           <div class="form-group">
             <label class="control-label"> From</label>
             <input type="date" name="d1" required class="form-control" />
           </div>
         </div>
         <div class="col-sm-3">
           <div class="form-group">
             <label class="control-label">To</label>
             <input type="date" name="d2" required class="form-control" />
           </div>
         </div>
      
       </div>
       <hr>
       <button type="submit"  class="btn btn-success" ><i class="fa fa-print"></i>Print Report</button>
     </form>
   </div>
   
   <div id="2" class="report" style="display:none">
     <form method="get" action="preview_transaction_category_report.php">
       <div class="row">
         <div class="col-sm-3">
           <div class="form-group">
             <label class="control-label"> From</label>
             <input type="date" name="d1" required class="form-control" />
           </div>
         </div>
         <div class="col-sm-3">
           <div class="form-group">
             <label class="control-label">To</label>
             <input type="date" name="d2" required class="form-control" />
           </div>
         </div>
         <div class="col-sm-4">
           <div class="form-group">
             <label>Category: </label>
       <select type="text" class="form-control" name="category" requaid>
        <option>----</option>
       <option value="1">বিদ্যুৎ বিল</option>
      <option value="2">পানি বিল</option>
      <option value="3">নাস্তা বিল</option>
      <option value="4">যাতায়াত ভাড়া</option>
      <option value="5">সরঞ্জামাদি</option>
      <option value="6">অন্যান্য</option>
      <option value="7">ফটোকপি</option>
      <option value="8">Exam Fee</option>
      <option value="9">Sheet Fee</option>
      <option value="10">ID Card Fee</option>
                 </select>
           </div>
         </div>
       </div>
       <hr>
       <button type="submit"  class="btn btn-success" ><i class="fa fa-print"></i> Print </button>
     </form>
   </div>
   
   <div id="3" class="report" style="display:none">
     <form method="get" action="preview_transaction_summary_report.php">
       <div class="row">
         <div class="col-sm-3">
           <div class="form-group">
             <label class="control-label"> From</label>
             <input type="date" name="d1" required class="form-control" />
           </div>
         </div>
         <div class="col-sm-3">
           <div class="form-group">
             <label class="control-label">To</label>
             <input type="date" name="d2" required class="form-control" />
           </div>
         </div>
        
       </div>
       <hr>
       <button type="submit"  class="btn btn-success" ><i class="fa fa-print"></i> Print </button>
     </form>
   </div>
  
   <div id="4" class="report" style="display:none">
     <form method="get" action="preview_earn_expense_report.php">
       <div class="row">
         <div class="col-sm-3">
           <div class="form-group">
             <label class="control-label"> From</label>
             <input type="date" name="d1" required class="form-control" />
           </div>
         </div>
         <div class="col-sm-3">
           <div class="form-group">
             <label class="control-label">To </label>
             <input type="date" name="d2" required class="form-control" />
           </div>
         </div>
        
       </div>
       <hr>
       <button type="submit"  class="btn btn-success" ><i class="fa fa-print"></i> Print </button>
     </form>
   </div>
   
   <div id="5" class="report" style="display:none">
   <form method="get" action="preview_cash_ledger.php">
       <div class="row">
         <div class="col-sm-3">
           <div class="form-group">
             <label class="control-label"> From Date  </label>
             <input type="date" name="d1" required class="form-control" />
           </div>
         </div>
         <div class="col-sm-3">
           <div class="form-group">
             <label class="control-label"> To Date </label>
             <input type="date" name="d2" required class="form-control" />
           </div>
         </div>
       </div>
       <hr>
       <button type="submit"  class="btn btn-success" ><i class="fa fa-print"></i> Print Report </button>
     </form>
   </div>
   
   <div id="6" class="report" style="display:none">
   <form method="get" action="preview_fees_collection_report.php">
       <div class="row">
         <div class="col-sm-3">
           <div class="form-group">
             <label class="control-label"> From Date  </label>
             <input type="date" name="d1" required class="form-control" />
           </div>
         </div>
         <div class="col-sm-3">
           <div class="form-group">
             <label class="control-label"> To Date </label>
             <input type="date" name="d2" required class="form-control" />
           </div>
         </div>
       </div>
       <hr>
       <button type="submit"  class="btn btn-success" ><i class="fa fa-print"></i> Print Report </button>
     </form>
   </div>
   
   <div id="7" class="report" style="display:none">
   <form method="get" action="report_fees_dues.php">
      
       <hr>
       <button type="submit"  class="btn btn-success" ><i class="fa fa-print"></i> Print Report </button>
     </form>
   </div>
   
   <div id="8" class="report" style="display:none">
     <form method="get" action="preview_attendance_by_course_wise.php">
       <div class="row">
         <div class="col-sm-3">
           <div class="form-group">
             <label class="control-label"> Date  </label>
             <input type="date" name="d1" required class="form-control" />
           </div>
         </div>

         
           <div class="col-sm-4">
           <div class="form-group">
             <label>Batch: </label>
       <select type="text" class="form-control" name="batch" requaid>
        <option>----</option>
                       <option value="6">BC-2201</option>
                     <option value="10">BC-2202</option>
                     <option value="17">BC-2204</option>
                     <option value="18">BC-2205</option>
                     <option value="20">BC-2206</option>
                     <option value="19">BC-2207</option>
                     <option value="21">BC-2208</option>
                     <option value="22">BC-2209</option>
                     <option value="30">BC-2210</option>
                     <option value="5">BC-Special</option>
                     <option value="32">dada</option>
                     <option value="13">GD-2201</option>
                     <option value="14">GD-2202</option>
                     <option value="15">GD-2203</option>
                     <option value="28">GD-2204</option>
                     <option value="31">GD-2205</option>
                     <option value="23">Motion Graphic-2201</option>
                     <option value="33">SP-2201</option>
                     <option value="16">WD-2201</option>
                        </select>
           </div>
         </div>
         </div>
       <hr>
       <button type="submit"  class="btn btn-success" ><i class="fa fa-print"></i> Print Report</button>
     </form>
   </div>
         
   <div id="9" class="report" style="display:none">
     <form method="get" action="preview_attendance_summary.php">
       <div class="row">
         <div class="col-sm-3">
           <div class="form-group">
             <label class="control-label">  Date  </label>
             <input type="date" name="d1" required class="form-control" />
           </div>
         </div>
       
       </div>
       <hr>
       <button type="submit"  class="btn btn-success" ><i class="fa fa-print"></i> Print Report </button>
     </form>
   </div>	
         
   <div id="10" class="report" style="display:none">
     <form method="get" action="preview_admission_date_wise.php">
       <div class="row">
         <div class="col-sm-3">
           <div class="form-group">
             <label class="control-label"> From Date  </label>
             <input type="date" name="d1" required class="form-control" />
           </div>
         </div>
         <div class="col-sm-3">
           <div class="form-group">
             <label class="control-label"> To Date </label>
             <input type="date" name="d2" required class="form-control" />
           </div>
         </div>
      
       </div>
       <hr>
       <button type="submit"  class="btn btn-success" ><i class="fa fa-print"></i> Print Report</button>
     </form>
   </div>	
         
   <div id="11" class="report" style="display:none">
     <form method="get" action="preview_admission_course_date_wise.php">
       <div class="row">
         <div class="col-sm-3">
           <div class="form-group">
             <label class="control-label"> From Date  </label>
             <input type="date" name="d1" required class="form-control" />
           </div>
         </div>
         <div class="col-sm-3">
           <div class="form-group">
             <label class="control-label"> To Date </label>
             <input type="date" name="d2" required class="form-control" />
           </div>
         </div>
         <div class="col-sm-4">
           <div class="form-group">
             <label>Course: </label>
       <select type="text" class="form-control" name="course" requaid>
        <option>----</option>
       <option value="1">Diploma In Graphic Design</option>
      <option value="4">Professional Web Design </option>
      <option value="5">Motion Graphics & VFX</option>
      <option value="7">Office Application [Basic]</option>
      <option value="8">Computer Hardware</option>
      <option value="9">Digital Marketing</option>
      <option value="11">Spoken English</option>
                 </select>
           </div>
         </div>
       </div>
       <hr>
       <button type="submit"  class="btn btn-success" ><i class="fa fa-print"></i> Print Report </button>
     </form>
   </div>	
         
         
         
         
         
   
   
 </div> 
 </div> 
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
$(function() {
 $('#reportelector').change(function(){
     $('.report').hide();
     $('#' + $(this).val()).show();
 });
});
</script>
</main>
</x-admin-layout>
