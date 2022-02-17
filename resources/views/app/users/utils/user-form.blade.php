<form method="post" action="{{ isset($ruta) ? $ruta : '' }}">
    @csrf
    @if(isset($method)) @method($method) @endif

        <div class="form-group row my-4">
            <div class="col-md-12">
                <label for="name" class="form-label fw-bold">@lang('name')</label>
                <input  @if(isset($disabled)) disabled @endif value="@if(isset($user)){{ $user->name }}@endif" name="name" id="name" autocomplete="name"  class="form-control form-control-lg" placeholder="@lang('name')" required autofocus>
            </div>
        </div>

        <div class="form-group row my-4">
            <div class="col-md-12">
                <label for="email" class="form-label fw-bold">@lang('email')</label>
                <input @if(isset($disabled)) disabled @endif value="@if(isset($user)){{ $user->email }}@endif" id="email" type="email" class="form-control form-control-lg" name="email" value="{{ old('email') }}" placeholder="@lang('email')" required autocomplete="email">
            </div>
        </div>
        @if(!isset($disabled))
            <div class="form-group row my-4">
                <div class="col-md-12">
                    <label for="password" class="form-label fw-bold">@if(isset($user)) @lang('new.password') @else @lang('password') @endif</label>
                    <input value="" id="password" type="password" class="form-control form-control-lg" placeholder="@if(!isset($user)) @lang('password') @endif" name="password" @if(!isset($user)) required @endif autocomplete="new-password">
                    @if(isset($user))<small class="text-muted d-block">@lang('if.blank.password')</small>@endif
                    <small class="text-muted d-block">@lang('min.8.char')</small>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-12 mb-3">
                    <button type="submit" class="btn btn-primary btn-lg w-100">
                        @lang('save')
                    </button>
                </div>
            </div>
        @endif
    </form>
