<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // For authentication

class LoginController extends Controller
{
    // Show login form
    public function showLoginForm()
    {
        return view('login');
    }

    // Handle login POST request
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Login success, redirect to dashboard
            return redirect()->intended('dashboard');
        }

        // Login failed, back with error
        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }

    // Show dashboard (only for authenticated users)
    public function dashboard()
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        return view('dashboard');
    }

    // Logout user
    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}