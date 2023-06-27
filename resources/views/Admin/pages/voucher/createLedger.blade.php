<x-admin-layout>
    <main>
        <div class="container-fluid">



<div class="card mt-4">

<div class="card-header">
<div class="row">
<div class="col-md-8 my-auto">
  Financial Activities  <i class="fas fa-angle-right"></i>     Add Transaction Category
</div>
<div class="col-md-4">
  <a href="{{route('ledger.index')}}"
     class="btn btn-outline-primary float-right"><i class="fas fa-folder-open"></i> Transaction Categories</a>
</div>
</div>
</div>
<div class="card mb-4">
<div class="card-body">

<form name="frmProduct" method="post" action="{{route('ledger.store')}}">
    @csrf
<div id="product">
<div class="row">

<div class="col-12 form-group">
<input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Transaction Category"  name="name" required />
</div>


</div>
</div>

<hr>
<input type="submit" name="save" class="btn btn-primary" value="Submit" />
<input type="reset" class="btn btn-secondary" value="Reset" />
</form>
</div>
</div>
</main>
    @slot('script')
        <script>

            const addBtn = document.getElementById('addBtn');
            addBtn.addEventListener('click',()=>{

            })

        </script>
    @endslot
</x-admin-layout>
