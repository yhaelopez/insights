@extends('livewire.auth.layout')

@section('styles')
@endsection

@section('main')
<div class="container h-100">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-8 col-md-4 col-lg-3 col-xl-3 text-center">
            <div class="form-signin">
                <form>
                    <img class="mb-4" src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
                    <h1 class="h3 mb-3 fw-normal">{{ __('login') }}</h1>

                    <div class="form-floating mb-3">
                        <input wire:model="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">{{ __('email') }}</label>
                        @error('email') <div>{{ $error }}</div> @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input wire:model="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">{{ __('password') }}</label>
                        @error('password') <div>{{ $error }}</div> @enderror
                    </div>

                    <button wire:click="attemptLogin" class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                    <p class="mt-5 mb-3 text-muted">&copy; {{ config('app.name') }} {{ now()->today()->format('Y') }}</p>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
