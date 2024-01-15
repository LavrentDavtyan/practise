<?php

namespace App\Http\Controllers;

use App\Models\Admins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class AdminController extends Controller
{
    public function index()
    {

        return view('admin.index');
    }

    public function showLoginForm()
    {

        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        $email = $request->input('email');
        $password = md5($request->input('password'));

        $admin = Admins::where('email', $email)
            ->where('password', $password)
            ->first();

        if ($admin) {
            $request->session()->put('admin_id', $admin->id); 

            // dd($value = session('admin_id'));
            return redirect()->route('admin.index');
        } else {
            return redirect()->route('admin.login')->withErrors(['email' => 'Invalid credentials']);
        }

    }
    public function logout(Request $request)
    {
        Session::flush(); 

        return redirect()->route('admin.login');
    }
}
