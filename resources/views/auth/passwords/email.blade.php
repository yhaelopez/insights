@extends('layouts.auth')

@section('main')
<div class="row justify-content-center">
    <div class="col-12">
        <div class="h1 text-center">@lang('reset.password')</div>
    </div>

    <div class="col-10 col-sm-7 col-md-6 col-lg-5 col-xl-4 p-1 text-center">
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="form-group row my-4">
                <div class="col-md-12">
                    <input id="email" type="email" placeholder="@lang('email')" class="form-control form-control-lg " name="email" value="" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary w-100">
                        @lang('send.password.reset.link')
                    </button>
                </div>
            </div>

            <div class="col-md-12 text-center">
                <a class="btn btn-link btn-lg" href="{{ route('login') }}">
                    @lang('remembered.your.password.?')
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
