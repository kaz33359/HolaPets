<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

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
    public function checkadmin(Request $request)
    {

        // //validate
        // $request->validate([

        //     'email' => 'required',
        //     'password' => 'required|max:12',
        // ]);
        //validate
        $result = DB::table('admins')->where(['email' => $request->email])->first();
        $db_pw = $request->password;
        
        $d = $result->password;
        // $db_pw = Crypt::decrypt($db_pwd);
        // $db_pwd = Crypt::decrypt($result[0]->password);
        $db_pwd = Crypt::decrypt($d);

        // return dd($db_pw,$db_pwd);
        // return dd($db_pwd);
        if (isset($result->id)) {

            if ($db_pwd == $db_pw) {
                $request->session()->put('ADMIN_LOGIN', true);
                $request->session()->put('ADMIN_ID', $result->id);
                $request->session()->put('LoggedAdmin', $result->id);
                return redirect('admin/index');
            } else {
                return redirect()->back()->with('fail', 'Invalid password');
            }
        } else {
            return redirect()->back()->with('fail', 'We do not recognise your email address');
        }
    
    
}
    public function hashp()
    {
        $paw = Crypt::encrypt('123456');
        $pa = Crypt::decrypt($paw);
        DB::table('admins')
            ->where(['email' => "admin@gmail.com"])
            ->update([
                'password' => $paw
            ]);

        dd($paw, $pa);
    }
}