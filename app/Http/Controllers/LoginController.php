<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function data(){

        if(auth()->attempt(request(['email', 'password'])) == false) { //validacion de los datos
            return back()->withErrors([
                'message' => 'El email o la contraseña son incorrectos', 
            ]);
        }else { //pero si inica sesión nos valida el rol del usuario y si es rol nos lleva a table si no a home
            if(auth()->user()->role == 'admin' ){
                return redirect()->route('table');
            }else{
                return redirect()->to('/');
            }
        }
        
    }



    public function destroy(){

        auth()->logout();

        return redirect()->to('/login');
    }
}
