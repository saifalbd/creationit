<x-admin-layout>
    <main>
        <div class="container-fluid">

<div class="card mt-4">

<div class="card-header">
<div class="row">
<div class="col-md-7 m-auto">
  Financial Activities <i class="fas fa-angle-right"></i> Transaction Entry
</div>
<div class="col-md-5 text-right">
  <a href="{{route('voucher.index')}}" class="btn btn-outline-primary"><i class="fas fa-folder-open"></i> Transaction List </a>
   <a href="{{route('ledger.index')}}" class="btn btn-outline-primary"><i class="fas fa-list"></i> Transaction Category</a>
</div>
</div>
</div>
    <form name="frmUser" method="post" action="{{route('voucher.store')}}" enctype="multipart/form-data" >
        @csrf
<div class="card">
<div class="card-body">
<br>

<div class="form-row">
     <div class="form-group col-md-3">
        <label for="inputEmail4">Date</label>
        <input type="date" class="form-control @error('date') is-invalid @enderror"   name="date" required>
     </div>
     <div class="form-group col-md-4">
        <label for="inputEmail4"> Category </label>
 <select type="text" class="form-control @error('ledger') is-invalid @enderror"  name="ledger" required>
        <option value="">----</option>
     @foreach($ledgers as $ledger)
                 <option value="{{$ledger->id}}" @selected(old('ledger')==$ledger->id)>{{$ledger->name}}</option>
     @endforeach

             </select>
         @error('ledger')<div class="invalid-feedback">{{ $message }}</div>@enderror
     </div>

     <div class="form-group col-md-5">
        <label for="inputEmail4">Description </label>
        <input type="text" class="form-control @error('description') is-invalid @enderror" value="{{old('description')}}" name="description" required>
         @error('description')<div class="invalid-feedback">{{ $message }}</div>@enderror
     </div>
          <div class="form-group col-md-3">
        <label for="inputEmail4">Voucher No.</label>
        <input type="text" class="form-control @error('voucherNo') is-invalid @enderror"
               name="voucherNo" placeholder="Optional" value="{{old('voucherNo')}}">
              @error('voucherNo')<div class="invalid-feedback">{{ $message }}</div>@enderror
     </div>

           <div class="form-group col-md-2">
        <label for="inputEmail4">Transaction Type</label>
         <select id="typeSelect" name="type" class="form-control @error('type') is-invalid @enderror" required>
           <option value=""> --- </option>
           
           <option value="receipt" @selected(old('type')=="receipt")>Cash Received</option>
           <option value="payment" @selected(old('type')=="payment")>Cash Payment</option>
         </select>
               @error('typeSelect')<div class="invalid-feedback">{{ $message }}</div>@enderror
     </div>

           <div  class="form-group col-md-2 report">
        <label for="inputEmail4" id="typeText">Received Amount </label>
        <input type="number" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{old('amount')}}">
               @error('amount')<div class="invalid-feedback">{{ $message }}</div>@enderror
     </div>








  </div>
</div>
<div class="card-footer">
<input type="submit" name="submit" value="Submit" class="btn btn-primary ">
  <button type="reset" class="btn btn-secondary">Reset</button>

</div>

</div>
    </form>
</div>

</main>

    @slot('script')
        <script>
            const typeSelect = document.getElementById('typeSelect');
            const typeText = document.getElementById('typeText');
            const setIs = (dom)=>{
                const val = dom.value;
                if(val =='payment'){
                    typeText.textContent = 'Cash Payment';
                }else{
                    typeText.textContent = 'Cash Received';
                }
            }
            setIs(typeSelect)
            typeSelect.addEventListener("click",function(){
                setIs(this)
            });
        </script>
    @endslot

</x-admin-layout>


