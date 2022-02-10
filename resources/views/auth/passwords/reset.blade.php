@extends('layouts.auth')

@section('main')
<div class="row justify-content-center">
    <div class="col-12">
        <h1 class="text-center">@lang('reset.password')</h1>
    </div>
    <div class="col-10 col-sm-7 col-md-6 col-lg-5 col-xl-4 p-1 text-center">

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group row my-4">
                <div class="col-md-12">
                    <input readonly id="email" type="email" placeholder="@lang('email')" class="form-control form-control-lg " name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                </div>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group row mb-3">
                <div class="col-md-12">
                    <input id="password" type="password" placeholder="@lang('password')" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                </div>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group row mb-3">
                <div class="col-md-12">
                    <input id="password-confirm" type="password" placeholder="@lang('confirm.password')" class="form-control form-control-lg @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">
                </div>
                @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-12 mb-3">
                    <button type="submit" class="btn btn-primary btn-lg w-100">
                        @lang('reset')
                    </button>
                </div>
            </div>
        </form>

    </div>
</div>
@endsection
