<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class UserAuthController extends Controller
{
    public function registerUser() {
        return view("registrer.register");
    }

    public function register() {
        request()->validate([
            "name" => ["required", "string"],
            "email" => ["required", "email"],
            "password" => ["required"]
        ]);

        User::create([
            "name"  => request()->input("name"),
            "email"  => request()->input("email"),
            "password"  => bcrypt(request()->input("password")),
        ]);

        return redirect()->route("user.loginForm");
    }
    public function loginForm() {
        return view("registrer.login");
    }

    public function login() {
        $attributes = request()->validate([
            "email" => ["required", "email"],
            "password" => ["required"]
        ]);

        if (! auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                "email" => "Your email is wrong",
                "password" => "Your password is wrong",
            ]);
        }

        session()->regenerate();

        return redirect()->route("welcome");
    }
}
