<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->authorizeResource(User::class);
        $this->userService = $userService;
    }

    public function index(Request $request)
    {
        $users = User::orderBy('id', 'desc');
        if($request->has('trashed')) {
            $users->onlyTrashed();
        }
        $users = $users->get();
        return view('app.users.index', compact('users'));
    }

    public function create()
    {
        return view('app.users.create');
    }

    public function store(UserStoreRequest $request)
    {

        $user = $this->userService->store($request);
        return redirect()->route('users.index')->withSuccess(__('user.store.success', ['user' => $user->email]));
    }

    public function show(User $user)
    {
        return view('app.users.show', compact('user'));
    }

    public function edit(User $user)
    {
        $roles = Role::get();
        return view('app.users.edit', compact('user'));
    }

    public function update(UserUpdateRequest $request, User $user)
    {
        $user = $this->userService->update($request, $user);
        return redirect()->route('users.index')->withSuccess(__('user.update.success', ['user' => $user->email]));
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->withSuccess(__('user.delete.success', ['user' => $user->email]));
    }

    public function restore(Request $request)
    {
        $user = User::withTrashed()->find($request->user);
        $user->restore();
        return redirect()->route('users.index')->withSuccess(__('user.restore.success', ['user' => $user->email]));
    }

}
