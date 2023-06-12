<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'vCode' => ['required', 'string', 'max:30'],
            'uStat' => ['required', 'integer', 'max:11'],
            'uFirst' => ['required', 'string', 'max:30'],
            'uLast' => ['required', 'string', 'max:30'],
            'uContact' => ['required', 'string', 'max:30'],
            'uAddress' => ['required', 'string', 'max:50'],
            'uStreet' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:30', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'vCode' => $data['vCode'],
            'uStat' => $data['uStat'],
            'uFirst' => $data['uFirst'],
            'uLast' => $data['uLast'],
            'uContact' => $data['uContact'],
            'uAddress' => $data['uAddress'],
            'uStreet' => $data['uStreet'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
