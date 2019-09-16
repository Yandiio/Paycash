<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
Use app\User;

class AuthController extends Controller
{
    public function index(Request $request){
        die('duarr'); 

        $this->validate([
            'username' => 'required|string',
            'password' => 'required|unique:user',
            'email' => 'required',
        ]);

        return User::create([
            'username' => $request->json('username'),
            'email' => $request->json('email'),
            'password' => bcrypt($request->json('password')),
        ]);
    }


}
