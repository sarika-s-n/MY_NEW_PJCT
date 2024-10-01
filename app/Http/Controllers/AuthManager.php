<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AuthManager extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function show() 
    {
        $show_data=User::all();
        return view('show_user')->with('show_details',$show_data);
    }
    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'name' => 'required'
        ]);

        $data['name'] = $request->name;
        $data['password'] = Hash::make($request->password);
        $data['email'] = $request->email;

        $user = User::create($data);

        if (!$user) {
            return redirect()->route('login')->with("error", "Details Not Valid"); // Corrected the syntax
        }
            return redirect()->route('login')->with("success", "Details Saved"); 
    }
}

