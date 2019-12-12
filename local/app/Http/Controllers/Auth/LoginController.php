<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Staff;
use Illuminate\Support\Facades\DB;
use Session;
use Hash;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    // public function login_member()
    // {
    //     if (Session::get('Mem_name') == "") {
    //         return redirect('login');
    //     }else{
    //         return redirect('pages');
    //     }
    // }
    public function login_member()
    {
        return view('pages.login_1');
    }
    public function check_user_member(Request $request)
    {
        $member = Staff::where('staff_username',$request->username)->first();
        if (!empty($member)) {
            if (Hash::check($request->pass,$member->staff_password)) {
                Session::put('Mem_name',$member->staff_name);
                Session::put('Mem_level','staff');
                return redirect('backend');
            }else{
                $error_mes = 'Password not correct !';
                $data = array(
                    'error_mes' => $error_mes
                );
                return view('pages.login_1',$data);
            }
        }else{
            $error_mes = 'Not see username !';
            $data = array(
                'error_mes' => $error_mes
            );
            return view('pages.login_1',$data);
        }
    }
    public function logout_mem()
    {
        Session::flush();
        return redirect('login');
    }
}
