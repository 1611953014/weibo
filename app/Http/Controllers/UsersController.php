<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    //TODO NPM yarn未安装
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'require|unique:users|max:50',
            'email' => 'require|email|unique:users|max:255',
            'password'=>'require|confirmed|min:6'
        ]);
        return;
    }
}
