@extends('layouts.app')

@section('main')
<div class="card" style="width: 18rem;">
    <div class="card-header">
        @lang('users')
    </div>
    <ul class="list-group list-group-flush">
        @foreach ($permissions as $permission)
        <li class="list-group-item">
            <input class="form-check-input me-1" type="checkbox" value="{{ $permission->id }}" aria-label="{{ $permission->name }}" @if($user->hasPermissionTo($permission)) checked @endif>
            {{ $permission->name }}
        </li>
        @endforeach
    </ul>
</div>
@endsection
