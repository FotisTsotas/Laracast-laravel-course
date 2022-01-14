<?php

namespace App\Http\Controllers;


use Illuminate\Validation\Rule;

use App\Models\User;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }
    public function store()
    {
     
      $attributes = request()->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', Rule::unique('users','username')],
            'email' => ['required', 'min:3', 'max:255', Rule::unique('users','email')],
            'password' => 'required|min:7'

        ]);
        
      $user = User::create( $attributes);

        auth()->login($user);

        session()->flash('success' , 'You account has been created.');

       return redirect('/')->with('success' , 'You account has been created.');
    }
}
