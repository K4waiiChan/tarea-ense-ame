<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
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
        $messages = [
            'password.regex' => 'EL campo :attribute debe contener al menos una letra mayuscula, un caracter especial y debe ser mayor a 8 caracteres.',
        ];

        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'lastname' => 'nullable|string|max:100',
            //'maternal_lastname' => 'required|string|max:100',
            'ci' => 'required|digits_between:6,9|unique:users,ci',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|confirmed|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',
            //"^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$"
            //"^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$"
            //'password' => 'required|digits_between:6,9|unique:users,ci',
            'phone' => 'nullable|string',
            'type_subscription' => 'required|numeric|digits:1',
            'username'=>'required|string|unique:users,username',
        ], $messages);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'username'=> $data['username'],
            'name' => $data['name'],
            'lastname' => $data['lastname'],
            //'maternal_lastname' => $data['maternal_lastname'],
            'ci' => $data['ci'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'phone' => $data['phone'],
        ]);

        $user->assignRole($data['type_subscription']);
//        if ( $data['type_subscription']==3) {
//            $user->assignRole(User::STUDENT_ROL);
//        }
//        else if{
//
//        }
//        $user->assignRole(User::STUDENT_ROL);

        return $user;
    }


    public function redirectPath()
    {
        return '/';
    }
}
