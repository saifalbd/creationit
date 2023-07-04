<x-admin-layout>
    @slot('style')
        <style>
            .input-group>.form-control:not(:last-child),
            .input-group>.custom-select:not(:last-child) {
                border-top-right-radius: 0px;
                border-bottom-right-radius: 0px;
            }
        </style>
    @endslot
    <main>
        <div class="container-fluid">

            <div class="card mt-4">

                <div class="card-header">
                    Settings <i class="fas fa-angle-right"></i> System Information
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-6">
                            <form class="card" action="{{route('option.dateFormat')}}" method="POST">
                                @csrf
                                <div class="card-header">
                                    Date Format Settings
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control @error('format') is-invalid @enderror" name="format"
                                    value="{{ config('app.dateFormat') }}" >
                                    @error('format')<div class="invalid-feedback">{{ $message }}</div>@enderror

                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-info" type="submit">Save</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-6">
                            <form class="card" action="{{route('option.smsConfig')}}" method="POST">
                                @csrf
                                <div class="card-header">
                                    SMS Settings
                                </div>
                                <div class="card-body">
                                     {{-- start Group --}}
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label"> SMS TOKEN </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control @error('token') is-invalid @enderror"  name="token"
                                    value="{{ config('sms.token') }}">
                                    @error('token')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label"> SMS URL </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control @error('url') is-invalid @enderror"  name="url"
                                    value="{{ config('sms.url') }}">
                                    @error('url')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label"> SMS Information URL </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control @error('info_url') is-invalid @enderror"  name="info_url"
                                    value="{{ config('sms.info_url') }}">
                                    @error('info_url')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>
                            </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-info" type="submit">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-admin-layout>
