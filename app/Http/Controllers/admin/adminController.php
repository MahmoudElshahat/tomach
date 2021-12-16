<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\admin\admin_signupRequest;
use App\Http\Requests\admin\loginRequest;
use App\Models\Admin;
use App\traits\General;

Class adminController extends Controller
{
    use General;

// ################## sign uppage ##############33
public function signup_page(){

    return view('admin.Auth.signup');
}
// ################ sign up admin ###############
public function insert_admin(admin_signupRequest $request){

        $data=$request->all();
        if($data==true){
        Admin::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'active'=>$request->active,
            'password'=>bcrypt($request->password),
        ]);

        Session::put('admin',$request->phone);

    return redirect()->route('verfy.user')->with(['success'=>'sign up succefuly']);
    }else{
        return 'error';
    }
}
//  ############  getlogin func to use in routes ###########
    public function admin_Login_page(){

        return view('admin.Auth.login');
    }

    #############  login func to check data in db #######################

    public function Login(loginRequest $request){
// =============================================
        if (auth()->guard('Admin')->attempt([
            'phone' => $request->phone,
            'password' => $request->password]
            )){
        return redirect()->route('admin.dashboard');
        }else{
            return 'erooorsignin';
        }
    }
    //################# start Back home function ######################
    public function backhome(){

        return view('front.home');
    }
    //################# start logout function ######################
    public function logout(){

        Session::flush();
        session_unset();
        Auth::logout();
         return view('admin.Auth.login');

    }
}
