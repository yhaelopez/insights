<?php

namespace App\Services;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\TemporaryFile;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public function store(UserStoreRequest $request) : User
    {
        $user = User::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'email_verified_at' => now()
        ]);

        return $user;
    }

    public function update(UserUpdateRequest $request, User $user) : User
    {
        $data = [
            'email' => $request->email,
            'name' => $request->name,
            'username' => $request->username,
            'email_verified_at' => now()
        ];

        if($request->password) {
            $data += ['password' => Hash::make($request->password)];
        }

        $user->update($data);

        return $user;
    }
}
