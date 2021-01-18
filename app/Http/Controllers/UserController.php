<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Scalar\String_;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('name', 'asc')->get();
        return view('users', ['users' => $users]);
    }

    public function create()
    {
        return view('createuser');
    }

    public function store(Request $request)
    {
        User::create(request()->validate([
            'name' => 'required',
            'password' => 'required',
            'email' => 'required',
            'ign' => 'required',
            'birthday' => 'required',
            'avatar' => 'required',
            'bio' => 'required'
        ]));
    }

    public function show($name)
    {
        $user = User::where('name', $name)->first();

        if ($user==null){
            $user = Auth::user();
        }

        return view('user', ['user' => $user]);
    }

    public function edit(User $user)
    {
        return view('edituser', ['user' => $user]);
    }

    public function update(User $user)
    {
        User::update(request()->validate([
            'password' => 'required',
            'email' => 'required',
            'ign' => 'required',
            'birthday' => 'required',
            'avatar' => 'required',
            'bio' => 'required'
        ]));
    }

    public function makeAdmin(User $user)
    {
        User::update(request()->validate([
            'isAdmin' => true,
        ]));
    }

    public function destroy(User $user)
    {
        //
    }
}
