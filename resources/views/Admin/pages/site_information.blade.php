<x-admin-layout>
    <main>
        <div class="container-fluid">

            <div class="card mt-4">

                <div class=" card-header">
                    Settings <i class="fas fa-angle-right"></i> System Information
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-sm-5">


                            <form name="frmUser" method="post" action="{{route('storeSetting')}}" enctype="multipart/form-data">

                                @csrf

                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label"> Organization </label>
                                    <div class="col-sm-8">
                                        <input type="text" name="institute" class="form-control @error('institute') is-invalid @enderror" value="{{$s->institute}}">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">Proprietor/Slogan </label>
                                    <div class="col-sm-8">
                                        <input type="text" name="tagline" class="form-control @error('tagline') is-invalid @enderror" value="{{$s->tagline}}">
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">Address</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="address"  class="form-control @error('address') is-invalid @enderror" value="{{$s->address}}">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">Mobile</label>
                                    <div class="col-sm-8">
                                        <input class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{$s->mobile}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">Email</label>
                                    <div class="col-sm-8">
                                        <input class="form-control  @error('email') is-invalid @enderror" name="email" value="{{$s->email}}" autocomplete="off">
                                    </div>



                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">Logo </label>
                                    <div class="col-sm-8">
                                        <input type="file" class="form-control" name="logo" @error('logo') is-invalid @enderror>
                                    </div>
                                </div>





                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" name="submit" value="Update" class="btn btn-primary ">
                    <button type="reset" class="btn btn-secondary">Reset</button>


                    </form>
                </div>



            </div>
        </div>
        </div>

    </main>
</x-admin-layout>
