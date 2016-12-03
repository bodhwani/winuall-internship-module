<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
<<<<<<< HEAD
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
=======
>>>>>>> 84a717c2a33d7f1175660ec174c315e1c580603c
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
<<<<<<< HEAD
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
=======
        $this->middleware('guest', ['except' => 'getLogout']);
>>>>>>> 84a717c2a33d7f1175660ec174c315e1c580603c
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
<<<<<<< HEAD
            'password' => 'required|min:6|confirmed',
=======
            'password' => 'required|confirmed|min:6',
>>>>>>> 84a717c2a33d7f1175660ec174c315e1c580603c
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
