@extends('layouts.auth')

@section('main')
<div class="row justify-content-center">
    <div class="col-12">
        <h1 class="text-center">@lang('login')</h1>
    </div>
    <div class="col-10 col-sm-7 col-md-6 col-lg-5 col-xl-4 p-1 text-center">
        <form class="form-signin" method="post" action="{{ route('login') }}">
            @csrf

            <div class="form-group row my-4">
                <div class="col-md-12">
                    <input id="email" type="email" placeholder="@lang('email')" class="form-control form-control-lg " name="email" value="" required autocomplete="email" autofocus>
                </div>
            </div>

            <div class="form-group row mb-3">
                <div class="col-md-12">
                    <input id="password" type="password" placeholder="@lang('password')" class="form-control form-control-lg " name="password" required autocomplete="current-password">
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-12 mb-3">
                    <button type="submit" class="btn btn-primary btn-lg w-100">
                        @lang('login')
                    </button>
                </div>

                <div class="col-md-12 text-center">
                    <a class="btn btn-link btn-lg" href="{{ route('password.request') }}">
                        @lang('forgot.password.?')
                    </a>
                </div>

            </div>
        </form>

    </div>
</div>
@endsection
