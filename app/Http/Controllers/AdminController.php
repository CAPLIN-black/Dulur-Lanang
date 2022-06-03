<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Genre;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function admin(){
        return view('Dashboard.dashboard');
    }
    public function create(){
        return view('Dashboard.create', [
            'genres' => Genre::all()
        ]);
    }
    public function mypost(){
        return view('Dashboard.mypost');
    }
    public function feedback(){
        $feedback = Feedback::all();
        return view('Dashboard.feedback', compact('feedback'));
    }









    public function login(){
        return view('auth.login', [
            "title" => "Login"
        ]);
    }
    public function register(){
        return view('auth.register', [
            'title' => 'register'
        ]);
    }

    public function registerInput(Request $request){
        $register = $request->validate([
            'name' => 'required|max:225',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        $register['password'] = bcrypt($register['password']);

        User::create($register);

        return view('auth.login', [
            'title' => 'register',
        ]);
    }
    public function loginInput(Request $request){
        $register = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($register)){
            $request->session()->regenerate();

            return redirect('/admin');
        }
        return back()->with('error', 'salah boy lu mau apa!!');
    }
    public function logout(Request $request){
        Auth::logout();

        return redirect('/');
    }

    public function dataAdmin(){
        $user = User::all();
        return view('dashboard.dataAdmin', compact('user'));
    }
}
