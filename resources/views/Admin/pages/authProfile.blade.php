<x-admin-layout>
    <main>
        <div class="container-fluid">
            <div class="mt-3 page-title">
                User <svg class="svg-inline--fa fa-angle-right fa-w-8" aria-hidden="true" focusable="false" data-prefix="fas"
                          data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                          data-fa-i2svg="">
                    <path fill="currentColor"
                          d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                    </path>
                </svg> Update User Information
            </div>
            <div class="card mb-4">
                <div class="mt-3 card-body">
                    <x-error-alert></x-error-alert>
                    <form name="frmUser" method="post" action="{{route('authInfo.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Name</label>
                                <input type="text" class="form-control @error('fullName') is-invalid @enderror" required="" value="{{$user->name}}" name="fullName" >
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" required="" value="{{$user->email}}"
                                       name="email">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Mobile</label>
                                <input type="number" class="form-control @error('mobile') is-invalid @enderror" required="" value="{{$user->mobile}}" name="mobile">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputEmail4"> Photo</label>
                                <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo">
                            </div>
                        </div>
                        <hr>
                        <input type="submit" name="submit" value="Update" class="btn btn-primary ">
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

</x-admin-layout>
