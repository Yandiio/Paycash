<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'id'             => ['required'],
            'nama'           => ['required', 'string'],
            'username'       => ['required', 'string'],
            'email'          => ['required', 'string', 'email'],
            'password'       => ['required', 'string', 'min:8', 'confirmed'],
            'jenkel'         => ['required'],
            'tempat_lahir'   => ['required', 'string'],
            'tgl_lahir'      => ['required', 'date'],
            'alamat'         => ['required', 'string'],
            'status_pegawai' => ['required'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'id'             => $data['id'],
            'nama'           => $data['nama'],
            'username'       => $data['username'],
            'email'          => $data['email'],
            'password'       => bcrypt($data['password']),
            'jenkel'         => $data['jenkel'],
            'tempat_lahir'   => $data['tempat_lahir'],
            'tgl_lahir'      => $data['tgl_lahir'],
            'alamat'         => $data['alamat'],
            'status_pegawai' => $data['status_pegawai'],
        ]);
    }
}
