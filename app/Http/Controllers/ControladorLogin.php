<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControladorLogin extends Controller
{
    public function login(){
        return view('login');
    }

    public function log(Request $request){

        if(Auth::attempt(['name'=>$request->txtuser, 'password'=>$request->txtcontra])){

                
             if((Auth::user()->Tipo)=='Administrador'){
               return redirect('inicio')->with('Entrar', 'Bienvenido');}

                          if((Auth::user()->Tipo)=='Tienda'){
                            return redirect('InicioT')->with('Entrar', 'Bienvenido');}
                                        

        }else{
            return redirect('/')->with('Error', 'Error de Usuario');
        }
    }
           

public function logout(){
    Auth::logout();
    return redirect('/');
}
}
