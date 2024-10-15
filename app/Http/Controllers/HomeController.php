<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        //validate
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        //authenticate the user
       if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('admin.dashboard');
        }
        return back()->with('error', 'Invalid credentials');
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('admin.login');
    }
}
