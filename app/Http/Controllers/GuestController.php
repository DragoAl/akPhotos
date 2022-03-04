<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class GuestController extends Controller
{
    public function home() {
        return view('pages.home');
    }
    // public function login() {
    //     return view('pages.login');
    // }
    // public function loginweb(Request $request){
        
        
    //     $this->validate($request, [

    //         'email' => 'required|email',
    //         'password' => 'required',
    
    //     ]);
    
    //     $remember_me = $request->has('remember_me') ? true : false; 
    
    //     if (auth()->attempt(['email' => $request->input('email'), 'password' => $request->input('password')], $remember_me))
    //     {
    //         $user = auth()->user();
    //         //dd($user);
    //         return redirect('/');
    
    //     }else{
    //         return back()->with('error','your username and password are wrong.');
    //     };
        
    
    // }
    
}
