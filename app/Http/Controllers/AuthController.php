<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $userDb = new User;

        $user = $userDb ->where('email', $request->input('email'))->first();

        if ($user){
            if(Hash::check($request->input('password'), $user->password)){
                Auth::loginUsingId($user->id);

                return redirect()->route('users.index');

            }else {
                return redirect()->back()->with([
                    "messageError' => 'Email ou senha inválidos"
                ]);
            }
        } else {
            return redirect()->back()->with([
                "messageError" => "Não encontramos esse e-mail em nossa base de dados"
            ]);
        }
    }
    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
