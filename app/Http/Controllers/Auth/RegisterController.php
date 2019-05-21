<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Mail;
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
    protected $redirectTo = '/inicio';

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
            'name' => ['required', 'string', 'max:255'],
            'calle' => ['required','string','max:255'],
            'numero' =>['required','string','max:255'],
            'colonia' =>['required','string','max:255'],
            'ciudad' =>['required','string','max:255'],
            'estado' =>['required','string','max:255'],
            'codigo_postal' =>['required','string','max:255'],
            'telefono' =>['required','string','max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
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
      $data['confirmation_code'] = str_random(25);

        $user = User::create([
            'name' => $data['name'],
            'calle' => $data['calle'],
            'numero' => $data['numero'],
            'colonia' => $data['colonia'],
            'ciudad' => $data['ciudad'],
            'estado' => $data['estado'],
            'codigo_postal' => $data['codigo_postal'],
            'telefono' => $data['telefono'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'confirmation_code' => $data['confirmation_code']
        ]);

        //mandar mensaje de confirmacion
        Mail::send('emails.confirmation_code', $data, function($message) use ($data) {
        $message->to($data['email'], $data['name'])->subject('Por favor confirma tu correo');
        });

        return $user;
        return redirect('/inicio')->with('notification','Has creado un usuario nuevo');
    }

    public function verify($code)
    {
    $user = User::where('confirmation_code', $code)->first();

    if (! $user)
        return redirect('/');

    $user->confirmed = true;
    $user->confirmation_code = null;
    $user->save();

    return redirect('inicio')->with('notification', 'Has confirmado correctamente tu correo!');
  }
}
