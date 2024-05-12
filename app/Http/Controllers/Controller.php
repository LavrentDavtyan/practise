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

        $adminId = session('admin_id');

        if (!$adminId) {
            return redirect()->route('loginForm');
        }
    }

    
}
