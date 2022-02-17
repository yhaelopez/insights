@extends('layouts.app')

@section('main')
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">@lang('users')</h1>
            </div>
            <div class="col-12 pt-4 text-center">
                <a class="btn btn-success btn-lg" href="{{ route('users.create') }}">@lang('create') <i class="bi bi-people-fill"></i></a>
            </div>

            <div class="col-12 py-4">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                      <a class="nav-link @if(!request()->has('trashed')) bg-primary active @endif" @if(!request()->has('trashed')) aria-current="page" @endif href="{{ route( 'users.index') }}">Habilitados</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link @if(request()->has('trashed')) bg-danger active @endif" @if(request()->has('trashed')) aria-current="page" @endif href="{{ route( 'users.index', ['trashed'] ) }}">Deshabilitados</a>
                    </li>
                </ul>
            </div>

            <div class="col-12">

                <div class="table-responsive">
                    <table id="users" class="table table-hover">
                        <thead>
                            <tr>
                                <th class="align-middle text-center">#</th>
                                <th class="align-middle text-center">@lang('actions')</th>
                                <th class="align-middle text-center">@lang('name')</th>
                                <th class="align-middle text-center">@lang('email')</th>
                                <th class="align-middle text-center">@lang('created.at')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $key => $user)
                            <tr>
                                <td class="align-middle text-center fw-bold">{{ $key+1 }}</td>
                                <td class="align-middle text-center text-nowrap">
                                    @if(!$user->deleted_at)
                                        <a href="{{ route('users.permissions', ['user' => $user]) }}" type="button" class="btn btn-info"><i class="bi bi-lock-fill"></i></a>
                                        <a href="{{ route('users.edit', ['user' => $user]) }}" type="button" class="btn btn-warning"><i class="bi bi-pencil-fill"></i></a>
                                        <form id="deleteUserForm{{ $user->id }}" class="d-inline" action="{{ route('users.destroy', ['user' => $user]) }}" method="post" class="p-0 m-0">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                        <button onclick="populateConfirmationModal({{ $user }})" data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal" type="button" class="btn btn-danger"><i class="bi bi-trash-fill"></i></i></button>
                                    @else
                                        <form class="d-inline" action="{{ route('users.restore', ['user' => $user]) }}" method="post" class="p-0 m-0">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="btn btn-success"><i class="bi bi-arrow-clockwise"></i></i></button>
                                        </form>
                                    @endif
                                </td>
                                <td class="align-middle text-center">{{ $user->name }}</td>
                                <td class="align-middle text-center">{{ $user->email }}</td>
                                <td class="align-middle text-center">{{ $user->created_at->formatLocalized('%e / %b / %Y') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('includes.confirmation-modal', [
    'modalId' => 'deleteConfirmationModal',
    'question' => __('delete.confirmation')
])
@endsection

@section('js')

<script>
    function populateConfirmationModal(user) {
        document.getElementById('confirmationModalMessage').innerText = user.email;
        var confirmButton = document.getElementById('confirmButton');
        confirmButton.setAttribute('onclick', `submitForm(${user.id})`);
    }

    function submitForm(id) {
        document.getElementById(`deleteUserForm${id}`).submit();
    }

    function confirmarFormularioModal(id) {
        document.getElementById('forceDeleteForm'+id).submit();
    }

    // window.onload = () => {
    //     $('#users').DataTable({
    //         dom: 'lBfrtip',
    //         language: {
    //             url: '//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json'
    //         },
    //         'order': [
    //             [ 0, 'desc' ]
    //         ],
    //         'pageLength': 10,
    //     });
    // };
</script>
@endsection
