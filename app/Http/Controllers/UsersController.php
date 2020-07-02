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

<<<<<<< HEAD
=======
    //TODO NPM yarn未安装
>>>>>>> 4b44ffeb59ad025da1df00391b155f0489395821
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
<<<<<<< HEAD
=======

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'require|unique:users|max:50',
            'email' => 'require|email|unique:users|max:255',
            'password'=>'require|confirmed|min:6'
        ]);
        return;
    }
>>>>>>> 4b44ffeb59ad025da1df00391b155f0489395821
}
