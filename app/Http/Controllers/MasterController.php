<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function index(){
        return view('home');
    }
    public function contact(){
        return view('contact');
    }
    public function about(){
        return view('about');
    }
    public function houses(){
        return view('houses');
    }
    public function liste(Request $request){
        //return $request; retourne l'object du formulaire
        return view('liste', ['data' => $request]);
    }

}