@extends('layouts.app')

@section('main')
<div class="container-fluid">
    <div class="container py-4">

        <div class="row">
            <div class="col-12">
                <p class="h3 text-center">@lang('show.user')</p>
            </div>
        </div>

        <div class="row justify-content-center">

            <div class="col-12 col-md-6">

                @include('app.users.utils.user-form', [
                    'disabled' => true
                ])

            </div>

        </div>

    </div>

</div>
@endsection
