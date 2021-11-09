<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    function login(Request $request)
    {

        $user = User::where([
            'email' => $request->email,
            // 'password' => $request->password,
        ])->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return "Username or password is not matched";
        } else {
            $request->session()->put('user', $user);
            return redirect('/');
        }
    }
}
