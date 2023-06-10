<x-admin-layout>
<main>
               <div class="container-fluid">

<div class="card mt-4">
	
	<div class="card-header">
   <div class="row">
      <div class="col-md-9 my-auto">
         <i class="far fa-list-alt"></i>  Fees Collection <i class="fas fa-angle-right"></i> Edit  Fees Collection
      </div>
      <div class="col-md-3 text-right">
         <a href="list_fee_collection.php" class="btn btn-outline-primary float-right"> <i class="fas fa-folder-open"></i> Received Record</a>
      </div>
   </div>
</div>
<div class="card mb-4">
   <!---div class="card-header">
      <i class="fas fa-user-plus mr-1"></i>
      গ্রাহক এন্ট্রি
      </div---> 
     <div class="mt-3 card-body">
 <form name="frmUser" method="post" action="" enctype="multipart/form-data" >
         <div class="form-row">
           
			<div class="form-group col-md-8" style="display: ;">
               <label for="inputAddress2">Admission ID</label>
               
			   <select name="admission_id" class="form-control js-select2">
                <option value="12">12</option>
								<option value="4"> 4/ MD Shamim Ahmed / 01917915601</option>
								<option value="5"> 5/ Md Jahid Ahmed/ 01780241845</option>
								<option value="6"> 6/ Sheikh Raghib Anjum / 01706491122</option>
								<option value="7"> 7/ Oli Ahmed Mahin/ 01778510929</option>
								<option value="8"> 8/ Abdullah Khan/ 01637746662</option>
								<option value="9"> 9/ Jahidul Islam Jahed/ 01616472290</option>
								<option value="10"> 10/ Arafat Hussain/ 01760344520</option>
								<option value="11"> 11/ Anika Akther/ 01608610491</option>
								<option value="12"> 12/ Tahira Tasnim Chowdhury / 01717958469</option>
								<option value="13"> 13/ MD Bellal Hussain / 01855019428</option>
								<option value="14"> 14/ Monjur Hossain Sohag/ 01701816279</option>
								<option value="15"> 15/ Yasir Arafat Raju/ 01660031445</option>
								<option value="16"> 16/ Johirul Islam/ 01404950209</option>
								<option value="17"> 17/ Shakera Akther Riya/ 01741107871</option>
								<option value="18"> 18/ Shorifa Begum / 01714689672</option>
								<option value="19"> 19/ Taslima Khatun / 01790056883</option>
								<option value="20"> 20/ Sahela Khatun/ 01712244839</option>
								<option value="21"> 21/ Mujibur Rahman/ 01712811037</option>
								<option value="22"> 22/ Ferdous Ahmed/ 01768119130</option>
								<option value="23"> 23/ MD Jasim / 01839865189</option>
								<option value="24"> 24/ Mahima Begum/ 01771145090</option>
								<option value="25"> 25/ Bayazid Hossain / 01322536307</option>
								<option value="26"> 26/ Rafi Hussein Fahim/ 01721531199</option>
								<option value="27"> 27/ Maktuma Akter Tonni/ </option>
								<option value="28"> 28/ Rayhan Miah/ 01709682678</option>
								<option value="29"> 29/ Jahirul Islam/ 01640560116</option>
								<option value="30"> 30/ Monni Akter/ 01963792904</option>
								<option value="31"> 31/ Mim Akther/ 01626631650</option>
								<option value="32"> 32/ Sanne Begum/ 01403140130</option>
								<option value="33"> 33/ Abdallah Noor/ </option>
								<option value="34"> 34/ MD Suyeb Khan/ 01703656157</option>
								<option value="35"> 35/ Samiya Akther Tamanna/ 01986451415</option>
								<option value="36"> 36/ Murad Ahmed/ 01308886891</option>
								<option value="37"> 37/ Nahida  Sultana Zakia / 01718977775</option>
								<option value="39"> 39/ MD Saidur Rahman/ 01726802502</option>
								<option value="40"> 40/ Liba Akther/ 01320802622</option>
								<option value="41"> 41/ Sumi Begum / 01304025946</option>
								<option value="44"> 44/ Mahim Ahmed/ 01733800515</option>
								<option value="47"> 47/ Jone Rani Das/ 01775860603</option>
								<option value="48"> 48/ Mubin Ahmed/ 01609375296</option>
								<option value="49"> 49/ Mim Akther Pinky/ 01714705464</option>
								<option value="50"> 50/ Rimon Ahmed/ 01316606917</option>
								<option value="53"> 53/ Anas Uddin Sahel / 01748515484</option>
								<option value="54"> 54/ Jagadish Das/ 01731555270</option>
								<option value="55"> 55/ Rani Begum / 01322536298</option>
								<option value="56"> 56/ Shakil MIah/ 01302908810</option>
								<option value="57"> 57/ MD Harun Miah / 01718113229</option>
								<option value="58"> 58/ Shahed Ahmed/ </option>
								<option value="59"> 59/ MD Ashraful Alam/ 01709138429</option>
								<option value="60"> 60/ Shepi Begum / 01751930516</option>
								<option value="61"> 61/ Sharna Akther Chowdhury Shiely/ 01304701574</option>
								<option value="62"> 62/ Jubeda Chowdhury / 01944960060</option>
								<option value="65"> 65/ Muss. Sadia Ahmed Tinni/ 01306866840</option>
								<option value="67"> 67/ Oly Ahmed/ 01748515484</option>
								<option value="69"> 69/ Saif Yeafi Onin/ 01831805054</option>
								<option value="77"> 77/ Tithi Rani / 01705822232</option>
								<option value="87"> 87/ Farhana Akther Jui/ </option>
								<option value="88"> 88/ Tushar Acharjee/ 01768771801</option>
								<option value="89"> 89/ Sadiya Yeasmin Rahma/ 01740792317</option>
								<option value="90"> 90/ MD . Arafat Rahman Rabby / 01774893620</option>
								<option value="91"> 91/ MD . Nadim Ul Hasan Rahim/ 01721773224</option>
								<option value="92"> 92/ Amit Das Dipto / </option>
								<option value="93"> 93/ Tanni Akther / </option>
								<option value="95"> 95/ Tamanna Jafrin Mow/ </option>
								<option value="96"> 96/ Nahid Ahmed / 01888408513</option>
								<option value="97"> 97/ Sayma Akther Sunny / 01300299677</option>
								<option value="99"> 99/ MD. Jubel Islam / 0161551936</option>
								<option value="100"> 100/ Mariyam Islam Mim / 01756864485</option>
								<option value="101"> 101/ Fateya Akther Tuha / </option>
								<option value="102"> 102/ Selina Akther Tinny / 01797609921</option>
								<option value="105"> 105/ Syeda Fatema Rahman Sanny / </option>
								<option value="106"> 106/ Mst. Maria Akther/ 01722293684</option>
								<option value="107"> 107/ Nabila Akther / 01770306448</option>
								<option value="111"> 111/ Sadia Akther Mim / 01752512456</option>
								<option value="121"> 121/ Anonna Ahmed Pinky/ 01842880576</option>
								<option value="124"> 124/ Daige Akther / 01925891877</option>
								<option value="133"> 133/ Lima Akther Foraji/ 01730901374</option>
								<option value="134"> 134/ Fateha Akther Chadni/ 01797609921</option>
								<option value="135"> 135/ Tania Islam Tanni/ 01757671453</option>
								<option value="138"> 138/ Mirza Fardin Hossain / </option>
								<option value="153"> 153/ Sumi Rani Deb / 01933912179</option>
								<option value="164"> 164/ Md. Anis Ahmed/ 01738489983</option>
								<option value="165"> 165/ SYED ABDUL KARIM SHAHRIA/ 01798578316</option>
				              </select>
            </div>
            </div>
			   <div class="form-row">
			
            <div class="form-group col-md-2">
               <label for="inputEmail4">Amount</label>
               <input type="number" class="form-control" required  name="amount" value="500">
            </div> 
			<div class="form-group col-md-2">
               <label for="inputEmail4"> Date</label>
                <input type="date" class="form-control" required  name="d_ate" value="2023-06-09" value="2023-03-14">
			  
            </div>
			   <div class="form-group col-md-2">
               <label for="inputAddress2"> Payment Mode </label>
               <select type="text" class="form-control" required  name="trx_mode" />
			   <option value="Cash"> Cash </option>
			   <option value="Cash"> Cash </option>
			   <option value="Bkash"> Bkash </option>
			   <option value="Nagad"> Nagad </option>
			   <option value="Roket"> Roket </option>
			   <option value="Bank"> Bank </option>
			   
			   </select>
            </div>
			
			
				   <div class="form-group col-md-2">
               <label for="inputAddress2">Trx No</label>
               <input type="text" class="form-control"    name="trxno" value="">
            </div>
            </div>
			 <div class="form-row">
				   <div class="form-group col-md-4">
               <label for="inputAddress2">Remark</label>
               <input type="text" class="form-control"    name="remark" value="Course Fee">
            </div>
 
         </div>
         <hr>
         <input type="submit" name="submit" value="Submit" id="register" class="btn btn-primary ">
         <button type="reset" class="btn btn-secondary">Reset</button>
      </form>
   </div>
</div>
 </main>
</x-admin-layout>