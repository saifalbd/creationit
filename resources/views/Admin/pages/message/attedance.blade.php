<x-admin-layout>
    <main>
        <div class="container-fluid"><div class="mt-3 page-title">SMS <i class="fas fa-angle-right"></i> Absent SMS</div>
<div class="card mb-4">
<div class="card-body">
<form method="get" action="{{route('message.attendanceForm')}}">
<div class="form-row">

<div class="form-group col-md-4">
      <label for="inputthird2">Batch</label>
     <select name="batch" class="form-control @error('batch') is-invalid @enderror"  required >
     
         <option value="">---</option>
         @foreach ($batches as $item)
         <option value="{{$item->id}}">{{$item->title}}</option> 
         @endforeach
              </select>
              @error('batch')<div class="invalid-feedback">{{ $message }}</div>@enderror
     </div>
     
                 <div class="form-group col-md-2">
        <label for="inputthird2">Date</label>
        <input type="date" class="form-control @error('date') is-invalid @enderror" name="date" required>
        @error('date')<div class="invalid-feedback">{{ $message }}</div>@enderror
   
     </div> 
      
  <div class="form-group col-md-2">
  <label for="inputthird2"> -</label>
   <input type="submit"   value="Next"  class="btn btn-primary btn-block ">
 </div>
 </div>
</form>
</div>

</div>

</main>
</x-admin-layout>
