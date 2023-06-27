<x-admin-layout>
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="text-center">
            <h1 class="display-1" style="font-weight: 900">   @yield('code')</h1>
            <p class="fs-3"> <span class="text-danger">Opps!</span> Page not found.</p>
            <p class="lead" style="font-size:30px; fort-weight:bold;color:red;">
                @yield('message')
              </p>
            <a href="javascript: history.go(-1)" class="btn btn-info">Go Back</a>
        </div>
    </div>
</x-admin-layout>