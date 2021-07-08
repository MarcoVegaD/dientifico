<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function servicios(){
        return view('about');
    }

    public function faq(){
        return view('about');
    }

    public function login(){
        return view('login');
    }

    public function loginPost(Request $r){

        //Pide los datos y los valida antes de continuar
        $credentials = $r->validate([
            'email' => ['required', 'email', 'string'],
            'password' => ['required', 'string']
        ]);

        $medico = User::where('email', $r->email)->where('rol', 'Medico')->first();

        
        if(!$medico){
            return redirect('login')->withErrors(__('auth.failed'));
        }



        //Filled regresa un boolean segun si existe o no el valor del request
        $remember = request()->filled('remember');
        if(Auth::attempt($credentials, $remember)){
            //Regenerar la sesion luego de logear
            request()->session()->regenerate();
            return redirect('pacientes');
        }
        throw ValidationException::withMessages([
            'email' => __('auth.failed')
        ]);

    }

    public function logout(Request $r){
        Auth::logout();

        $r->session()->invalidate();
        $r->session()->regenerate();

        return redirect()->route('login')->with('status', 'Has cerrado sesión.');
    }
}
