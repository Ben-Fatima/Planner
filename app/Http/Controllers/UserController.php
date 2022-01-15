<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create(){
        return view('user.create');
    }
    public function store(){
        $attributs = request()->validate([
            'username'=>'required|max:255|min:3',
            'password'=>'required|min:8'
        ]);
        $attributs['password'] = bcrypt($attributs['password']);
        $user = User::create($attributs);
        auth()->login($user);
        return redirect('/recipes');
    }
    public function logout()
    {
        auth()->logout();
        return redirect("/register");
    }
    public function index()
    {
        return view("login.index");
    }
    public function login()
    {
        $user = User::where("username", "=", request("username"))->first();
        if ($user && Hash::check(request("password"), $user->password)) {
            Auth::login($user);
            return redirect("/recipes");
        }
        return redirect("/login")->withErrors([
            "incorrect_informations" =>
                "Le mot de passe ou le nom d'utilisateur est incorrect",
        ]);
    }
}
