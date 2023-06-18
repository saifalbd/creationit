<x-admin-layout>
    <main>
        <div class="container-fluid"><div class="mt-4 mb-3 page-title">SMS <i class="fas fa-angle-right"></i>   Batch </div>
            <div class="card mb-4">
                <div class="card-body">
                    <x-error-alert></x-error-alert>
                                        <form  method="post" action="{{route('message.bulkStore')}}" >
                        @csrf

                        <div class="form-row">
                            <div class="col-sm-7">
                                <div class="form-row">
                                    <div class="col-sm-12">
                                        <label> Batch </label>
                                        <select name="batch" class="form-control js-select2 @error('batch') is-invalid @enderror"  required >

                                            <option value="">---</option>

                                            @foreach($batches as $batch)
                                            <option value="{{$batch->id}}">{{$batch->title}}</option>
                                            @endforeach

                                        </select>
                                        @error('batch')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </div>



                                    <div class="col-md-12">
                                        <label> Massage </label>
                                        <textarea name="message" rows="3" id="field" onkeyup="countChar(this)" required class="form-control @error('message') is-invalid @enderror" maxlength="160"></textarea>
                                        @error('message')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                        <div id="charNum"> </div>
                                    </div>

                                </div>
                                <hr>
                                <button type="submit" name="submit" class="btn btn-warning"><i class="fas fa-paper-plane "> </i>  Send SMS </button>
                            </div>

                            <div class="col-sm-5">
                                <br>
                                <div class="box alert alert-danger">

                                    1 SMS for 160 characters in English and 1 SMS for 60 characters in Bengali.
                                </div>
                            </div>


                    </form>


                </div>
            </div>
        </div>

    </main>
</x-admin-layout>
