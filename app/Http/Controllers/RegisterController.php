<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;

class RegisterController extends Controller
{
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
        $memberRole = Role::where('name', 'member')->first();
        $user->attachRole($memberRole);
        return $user;
    }

    
}
