<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function register(Request $request) {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return Redirect::to('login');
    }

    public function login(Request $request) {

        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'min:6'
        ]);


        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ], true)) {
            return Redirect::to('/');
        } else {
            return back();
        }
    }

    public function logout() {
        Auth::logout();
        return Redirect::to('login');
    }
}
