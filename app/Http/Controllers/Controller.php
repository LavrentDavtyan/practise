<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
// use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Session;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->checkLogin(app(Session::class));
    }

    protected function checkLogin(Session $session)
    {
        // Check if the user is logged in based on session data

        // dd($session->exists('admin_id'));
        $adminId = session('admin_id');

        // Check if the user is logged in based on session data
        if (!$adminId) {
            // Redirect to the login page if the user is not logged in
            return redirect()->route('loginForm');
        }
    }

    
}
