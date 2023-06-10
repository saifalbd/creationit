<x-admin-layout>
<main>
               <div class="container-fluid"> 

<div class="card mt-4">
	
	<div class="card-header">
   <div class="row">
      <div class="col-md-9 my-auto">
		<i class="fas fa-file-invoice"></i>  Fees Collection <i class="fas fa-angle-right"></i> Payment Receive
      </div>
      <div class="col-md-3 text-right">
  
         <a href="{{url('fees')}}" class="btn btn-outline-primary"> <i class="fas fa-folder-open"></i> Received Record</a>
      </div>
   </div>
</div>
<div class="card mb-4">
   <div class="mt-3 card-body">
 <form name="frmUser" method="post" action="" enctype="multipart/form-data" >
         <div class="form-row">
		 
		     <div class="form-group col-md-8" style="display: ;">
               <label for="inputAddress2">Admission ID</label>
               
			   <select name="admission_id" class="form-control js-select2">
                <option >---</option>
								<option value="38"> 38/ Tahira Tasnim Chowdhury/ 01717958469</option>
								<option value="42"> 42/ Naimul Haque Naim/ 01307551523</option>
								<option value="43"> 43/ Bappy Rani Deb/ 01319644784</option>
								<option value="45"> 45/ Dipa Akther / 01308530418</option>
								<option value="46"> 46/ Riditha Debnath/ 0177837005</option>
								<option value="51"> 51/ Emran Hossain / 01779533649</option>
								<option value="52"> 52/ Mily Chowdhury/ 01701730016</option>
								<option value="63"> 63/ Farjana Jahan Munni/ 01768343551</option>
								<option value="64"> 64/ Akil Hosen/ 01311321069</option>
								<option value="66"> 66/ Shah Neil Khan/ 01705633700</option>
								<option value="68"> 68/ Nishat Ahmed Sany/ 01610648693</option>
								<option value="70"> 70/ Md. Abdur Razzak Shopon/ 01718441540</option>
								<option value="71"> 71/ Sourav Kanti Deb/ 01845767565</option>
								<option value="72"> 72/ Mukarim Ahmed/ 01727555077</option>
								<option value="73"> 73/ MD. Tahrim Hossen Tayef/ 01706885334</option>
								<option value="74"> 74/ Arifuzzaman/ 01317868885</option>
								<option value="75"> 75/ Oliur Rahman Yakub / 01761054170</option>
								<option value="76"> 76/ Musaddik Hussain / 01764240932</option>
								<option value="78"> 78/ Sarman Ahmed/ 01306986014</option>
								<option value="79"> 79/ Shahriar Ahmed Shan/ 01629750905</option>
								<option value="80"> 80/ Rafi Hussein Fahim / 01619907975</option>
								<option value="81"> 81/ MD. Sabbir Hussain / 01537469188</option>
								<option value="82"> 82/ Rimon Ahmed/ </option>
								<option value="83"> 83/ Bristy Chowdhury/ 01320518773</option>
								<option value="84"> 84/ MD. Faiyan Ahmed/ 01776262593</option>
								<option value="85"> 85/ Aleya Khatun/ 01750483964</option>
								<option value="86"> 86/ Tasfiq Ahmed Mojumder / 01326527692</option>
								<option value="109"> 109/ Tania Begum/ 01308531056</option>
								<option value="112"> 112/ Nilufa Yesmin/ 01747149982</option>
								<option value="113"> 113/ MD Nahidul Islam/ 01767920882</option>
								<option value="114"> 114/ Saleh Ahmed Soyeb/ 01313611282</option>
								<option value="115"> 115/ Shahena Akther/ 01319862364</option>
								<option value="116"> 116/ Himel Datta/ 01793946498</option>
								<option value="117"> 117/ Johura Akther Chowdhury/ 01707613866</option>
								<option value="118"> 118/ Kawcher Miah/ 01313729714</option>
								<option value="119"> 119/ Alim Uddin/ 01755257622</option>
								<option value="122"> 122/ Sami Chowdhury/ 01718106613</option>
								<option value="123"> 123/ Naeem Ahmed/ 01797046168</option>
								<option value="125"> 125/ Mujibur Rahman Shemul/ 01986767845</option>
								<option value="126"> 126/ Sadia Sultana Rubi / 01714941588</option>
								<option value="127"> 127/ Sudip Biswas/ 01614550319</option>
								<option value="128"> 128/ Tawfiqua Islam/ 01739835517</option>
								<option value="129"> 129/ Shawon Datta / 01767691921</option>
								<option value="130"> 130/ Shapla Akther Fatema/ 01721609334</option>
								<option value="131"> 131/ Mitu Akther / 01720972562</option>
								<option value="132"> 132/ Shah Neil Khan / 01705633700</option>
								<option value="140"> 140/ Iftekhar Islam/ 01772211497</option>
								<option value="141"> 141/ Ifteqar Ahmed Chowdhury/ 01770734449</option>
								<option value="142"> 142/ Lutfa Akther/ 01721305846</option>
								<option value="143"> 143/ Emon Miah / 01601154620</option>
								<option value="144"> 144/ Naim ahmed/ 01789753359</option>
								<option value="147"> 147/ Mukarim Ahmed/ 01727555077</option>
								<option value="148"> 148/ Bristy Chowdhury/ 01320518773</option>
								<option value="149"> 149/ Al-Mubdi Uzayer/ 01728365438</option>
								<option value="150"> 150/ Suhad Ahmod Khan/ 01646556476</option>
								<option value="151"> 151/ Takhlima Akther/ 01327657913</option>
								<option value="152"> 152/ AMINA AKTHER HALIMA/ 01714941588</option>
								<option value="154"> 154/ Pinke Begum/ 01645603674</option>
								<option value="155"> 155/ Lisa Begum/ 01786618812</option>
								<option value="156"> 156/ Tofayel Ahmed/ 01818388074</option>
								<option value="157"> 157/ Shumit Chakraborty/ 01794737655</option>
								<option value="158"> 158/ MD.Burhan Uddin/ 01627137697</option>
								<option value="159"> 159/ Jubeda Chowdhury / 01944960060</option>
								<option value="160"> 160/ Sahela Khatun/ 01712244839</option>
								<option value="161"> 161/ Shorifa Begum / 01714689672</option>
								<option value="162"> 162/ Jahirul Islam/ 01732455044</option>
								<option value="163"> 163/ Sadia Ahmed Tinni/ 01327756938</option>
								<option value="166"> 166/ Farjana Jahan Munni/ 01768343551</option>
								<option value="167"> 167/ MD.Shajed/ 018255590671</option>
								<option value="168"> 168/ Redwan Hasan Rahi/ 01754415701</option>
								<option value="169"> 169/ Mahid Miah/ 01619975175</option>
								<option value="170"> 170/ Abida Islam/ 01716573845</option>
								<option value="172"> 172/ Shah Sadia Tasnim/ 01842843886</option>
								<option value="173"> 173/ MD. TAHRIM HOSSEN TAYEF/ 01706885334</option>
								<option value="174"> 174/ Anas Uddin Sahel / 01748515484</option>
								<option value="175"> 175/ A.N.M. Abdul Mazid Hasan/ 01758143016</option>
								<option value="176"> 176/ Mahbubul Alam/ 01777077502</option>
								<option value="177"> 177/ Emon Miah / 01601154620</option>
								<option value="178"> 178/ SALEH AHMED SOYEB/ 01313611282</option>
								<option value="179"> 179/ Ruhul Amin/ 01320987442</option>
								<option value="180"> 180/ Kibria Miah/ 01646468316</option>
								<option value="181"> 181/ Sadia Chowdhury/ 01714497511</option>
								<option value="182"> 182/ Aysha Akther/ 01313943484</option>
								<option value="183"> 183/ Jone Rani Das/ 01775860603</option>
								<option value="184"> 184/ MD.Mahfuj Islam/ 01309335499</option>
								<option value="185"> 185/ Rifadul Islam/ 01718378316</option>
								<option value="186"> 186/ Ubaydul Haq Saif/ 01752399350</option>
								<option value="187"> 187/ Mst.Sultana Begum/ 01309816091</option>
								<option value="188"> 188/ MD.Ruhul Amin/ 01790639994</option>
								<option value="189"> 189/ MD.Tasnim Hossen Tanim/ 01728634455</option>
								<option value="190"> 190/ MD.Asif Iqbal/ 01902337497</option>
								<option value="191"> 191/ Arif Khan/ 01741746397</option>
								<option value="192"> 192/ Md.Julhas Ahmed/ 01753633968</option>
								<option value="193"> 193/ Showrav Deb/ 01785703221</option>
								<option value="194"> 194/ Mahfuj Khan/ 01764933591</option>
								<option value="195"> 195/ Jawad Azad Chowdhury/ 01944044242</option>
								<option value="196"> 196/ Aysha Akther/ 01726886141</option>
								<option value="197"> 197/ Sadmanur Rahman/ </option>
								<option value="198"> 198/ Abul Hasnat Chowdhury Shiam/ 01748823560</option>
								<option value="199"> 199/ Md.Redwan Khan/ 01929846591</option>
								<option value="200"> 200/ Shauaib Ahmed/ 01753069375</option>
								<option value="201"> 201/ Nahida Tabassum Jannath/ 01932303413</option>
								<option value="202"> 202/ Sayla Akther/ 01301018972</option>
								<option value="203"> 203/ Noor Alom/ 01791577619</option>
								<option value="204"> 204/ Bakshi Shahil/ </option>
				              </select>
            </div>
            </div>
			   <div class="form-row">
			
            <div class="form-group col-md-2">
               <label for="inputEmail4">Amount</label>
               <input type="number" class="form-control" required  name="amount" >
            </div> 
			<div class="form-group col-md-2">
               <label for="inputEmail4"> Date</label>
                <input type="date" class="form-control" required  name="d_ate" value="2023-06-09" >
			  
            </div>
			   <div class="form-group col-md-2">
               <label for="inputAddress2"> Payment Mode </label>
               <select type="text" class="form-control" required  name="trx_mode" />
			   <option value="Cash"> Cash </option>
			   <option value="Bkash"> Bkash </option>
			   <option value="Nagad"> Nagad </option>
			   <option value="Roket"> Roket </option>
			   <option value="Bank"> Bank </option>
			   
			   </select>
            </div>
			
			
				   <div class="form-group col-md-2">
               <label for="inputAddress2">Trx No</label>
               <input type="text" class="form-control"    name="trxno" >
            </div>
            </div>
			 <div class="form-row">
				   <div class="form-group col-md-4">
               <label for="inputAddress2">Remark</label>
               <input type="text" class="form-control"    name="remark" >
            </div>
 
 
 
         </div>
         <hr>
         <input type="submit" name="submit" value="Save" id="register" class="btn btn-primary ">
         <button type="reset" class="btn btn-secondary">Reset</button>
      </form>
   </div>
</div>
 </main>
</x-admin-layout>