<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin/pages/index');
    }
    //login and register
    public function login()
    {
        return view('admin/auth/login');
    }
    public function enquiry()
    {
        return view('admin/pages/enquiry');
    }
    public function userManagement()
    {
        return view('admin/pages/userManagement');
    }
    public function vendorManagement()
    {
        return view('admin/pages/vendorManagement');
    }
    public function viewProduct()
    {
        return view('admin/pages/viewProduct');
    }
    public function viewUser()
    {
        return view('admin/pages/viewUser');
    }
    public function viewVendor()
    {
        return view('admin/pages/viewVendor');
    }
    
    
}
