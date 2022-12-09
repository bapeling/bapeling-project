<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register', [
            'title' => 'register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        //$validatedData = $request->all();
        $validatedData = $request->validate([
            'username' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'level'    =>  ['required', Rule::in(['user'])],
            'password' => 'required',

        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        return redirect('login');
    }
}
