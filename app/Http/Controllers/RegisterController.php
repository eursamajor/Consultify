<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('login.register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:5', 'max:15', 'unique:users'],
            'email' => ['required', 'min:5', 'max:255', 'unique:users'],
            'password' => ['required', 'min:8', 'max:15']
        ]);

        dd('registrasi berhasil!');

    }
}
