<x-admin-layout>
    <div class="container-fluid">
        <div class="mt-3 page-title">SMS Information</div>
        <div class="card mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                   
                    <thead>
                      <tr>
                        <th scope="col">Balance</th>
                        <th scope="col">Rate</th>
                        <th scope="col">Expire At</th>
                        <th scope="col">Total SMS</th>
                      
                      </tr>
                    </thead>
                    <tbody>
                    
                      <tr>
                        <th scope="row">{{$balance}}</th>
                        <td scope="row">{{$rate}}</td>
                        <td scope="row">{{$expiry}}</td>
                        <td scope="row">{{$totalsms}}</td>
                        
                      </tr>
                     
                    </tbody>
                  </table>
                  </div>
            </div>
        </div>
    </div>
</x-admin-layout>
