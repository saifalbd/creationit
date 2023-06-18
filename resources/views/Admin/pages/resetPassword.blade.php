<x-admin-layout>
    <main>
        <div class="container-fluid"><div class="mt-4 page-title">

                User  <i class="fas fa-angle-right"></i>  Change Password

            </div>
            <div class="card mb-4">
                <div class="card-body">

                    <form action="{{route('resetPassword.store')}}" method="post">
                        <div class="form-group ">
                            <label> New Password</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
                            @error('password') <div class="invalid-feedback">{{$message}}}</div> @enderror
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control  @error('password_confirmation') is-invalid @enderror">
                            @error('password_confirmation') <div class="invalid-feedback">{{$message}}}</div> @enderror
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Update">

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>
</x-admin-layout>
