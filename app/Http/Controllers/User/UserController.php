<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('user/pages/index');
    }
    public function about()
    {
        return view('user/pages/about');
    }
}