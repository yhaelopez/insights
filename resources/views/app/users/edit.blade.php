@extends('layouts.app')

@section('main')
<div class="container-fluid">
    <div class="container py-4">

        <div class="row">
            <div class="col-12">
                <p class="h3 text-center">@lang('edit.user')</p>
            </div>
        </div>

        <div class="row justify-content-center">

            <div class="col-12 col-md-6">

                @include('app.users.utils.user-form', [
                    'ruta' => route('users.update', [
                        'user' => $user,
                    ]),
                    'method' => 'PATCH'
                ])

            </div>

        </div>

    </div>

</div>
@endsection
