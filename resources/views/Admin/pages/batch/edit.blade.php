<x-admin-layout>
    <main>
        <div class="container-fluid">

         <form name="frmUser" method="post" action="{{ route('batch.update',['batch'=>$batch->id]) }}" enctype="multipart/form-data">
            <div class="card mt-4">

                <div class="card-header">
                    <div class="row">
                        <div class="col-md-9 my-auto">
                            <svg class="svg-inline--fa fa-layer-group fa-w-16" aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="layer-group" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M12.41 148.02l232.94 105.67c6.8 3.09 14.49 3.09 21.29 0l232.94-105.67c16.55-7.51 16.55-32.52 0-40.03L266.65 2.31a25.607 25.607 0 0 0-21.29 0L12.41 107.98c-16.55 7.51-16.55 32.53 0 40.04zm487.18 88.28l-58.09-26.33-161.64 73.27c-7.56 3.43-15.59 5.17-23.86 5.17s-16.29-1.74-23.86-5.17L70.51 209.97l-58.1 26.33c-16.55 7.5-16.55 32.5 0 40l232.94 105.59c6.8 3.08 14.49 3.08 21.29 0L499.59 276.3c16.55-7.5 16.55-32.5 0-40zm0 127.8l-57.87-26.23-161.86 73.37c-7.56 3.43-15.59 5.17-23.86 5.17s-16.29-1.74-23.86-5.17L70.29 337.87 12.41 364.1c-16.55 7.5-16.55 32.5 0 40l232.94 105.59c6.8 3.08 14.49 3.08 21.29 0L499.59 404.1c16.55-7.5 16.55-32.5 0-40z">
                                </path>
                            </svg><!-- <i class="fas fa-layer-group"></i> --> Batch Information <svg
                                class="svg-inline--fa fa-angle-right fa-w-8" aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="angle-right" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                                </path>
                            </svg><!-- <i class="fas fa-angle-right"></i> --> Edit
                        </div>
                        <div class="col-md-3 text-right">

                            <a href="{{ route('batch.index') }}" class="btn btn-outline-primary float-right"> <svg
                                    class="svg-inline--fa fa-folder-open fa-w-18" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="folder-open" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M572.694 292.093L500.27 416.248A63.997 63.997 0 0 1 444.989 448H45.025c-18.523 0-30.064-20.093-20.731-36.093l72.424-124.155A64 64 0 0 1 152 256h399.964c18.523 0 30.064 20.093 20.73 36.093zM152 224h328v-48c0-26.51-21.49-48-48-48H272l-64-64H48C21.49 64 0 85.49 0 112v278.046l69.077-118.418C86.214 242.25 117.989 224 152 224z">
                                    </path>
                                </svg><!-- <i class="fas fa-folder-open"></i> -->Batch Information</a>
                        </div>
                    </div>
                </div>


                <div class="card-body">

               @method('PUT')
                    @csrf

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Batch Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                required="" name="title" placeholder="Ex: 2nd Batch (Microsoft Office)" value="{{$batch->title}}">
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="inputEmail4"> Saturday</label>
                            <input type="text" class="form-control @error('saturday') is-invalid @enderror"
                                name="saturday" placeholder="Ex: 10:30-11:30" value="{{$batch->saturday}}">
                            @error('saturday')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group col-md-2">
                            <label for="inputEmail4"> Sunday</label>
                            <input type="text" class="form-control @error('sunday') is-invalid @enderror"
                                name="sunday"  value="{{$batch->sunday}}">
                            @error('sunday')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group col-md-2">
                            <label for="inputEmail4"> Monday</label>
                            <input type="text" class="form-control @error('monday') is-invalid @enderror"
                                name="monday" value="{{$batch->monday}}">
                            @error('monday')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>



                        <div class="form-group col-md-2">
                            <label for="inputEmail4"> Tuesday</label>
                            <input type="text" class="form-control @error('tuesday') is-invalid @enderror"
                                name="tuesday" value="{{$batch->tuesday}}">
                        </div>


                        <div class="form-group col-md-2">
                            <label for="inputEmail4"> Wednesday</label>
                            <input type="text" class="form-control @error('wednesday') is-invalid @enderror"
                                name="wednesday"  value="{{$batch->wednesday}}">
                            @error('wednesday')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group col-md-2">
                            <label for="inputEmail4"> Thursday</label>
                            <input type="text" class="form-control @error('thursday') is-invalid @enderror"
                                name="thursday" value="{{$batch->thursday}}">
                            @error('thursday')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group col-md-2">
                            <label for="inputEmail4"> Friday</label>
                            <input type="text" class="form-control @error('friday') is-invalid @enderror"
                                name="friday"  value="{{$batch->friday}}">
                            @error('friday')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <input type="submit" name="submit" value="Save" class="btn btn-primary ">
                    <button type="reset" class="btn btn-secondary">Reset</button>

                </div>
            </div>
        </form>
                </div>
    </main>

</x-admin-layout>
