<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class LoginController extends Controller
{
    public function form_login(){
        return view('modules.auth.form_login');
    }

    public function auth(Request $request){

        $user=User::where('email','=',$request->input('email'))->first();

        if($user){

            if($user->password == $request->input('password')){
                session(['USER'=>$user]);

                return redirect()->route('dashboard.index');


            }else{
                return redirect()->route('login.form_login')->with([
                    'message'=> 'error en la autenticacion de tus datos correo y/o contraseña errada',
                    'type'=> 'danger'
                ]);
            }
        }else{
            return redirect()->route('login.form_login')->with([
                'message'=> 'error en la autenticacion de tus datos correo y/o contraseña errada',
                'type'=> 'danger'
            ]);
        }
    }
}
