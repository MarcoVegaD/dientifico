<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        $credentials = $r->validate([
            'email' => ['required', 'email', 'string'],
            'password' => ['required', 'string']
        ]);

    }
}
