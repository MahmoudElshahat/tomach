<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Exceptions\Handler;
// use App\Http\Requests\front\user_loginREquest;
use Illuminate\Validation\ValidationException;
// ====== requests
use Illuminate\Http\Request;
use App\Http\Requests\front\user_loginREquest;
use App\Http\Requests\front\user_signupRequest;

// use Illuminate\Http\Request;
// ===============
use Illuminate\Support\Facades\Auth;

use App\Models\Admin;

// ===========
// use Session;
use Illuminate\Support\Facades\Session;

class userController extends Controller
{

    // ################## sign up #########################endregion
    public function user_signup(){

        return view('front/signin/signup');
    }

    // ################### register New user ########################
    public function insert_user(user_signupRequest $request)
    {
        try {

            User::create([
                'name'=>$request->name,
                'phone'=>$request->phone,
                'is_admin'=>$request->active,
                'password'=>bcrypt($request->password),//|min:8
                'adress'=>$request->adress,
            ]);
            //

        return redirect()->route('verfy.user')->with(['success'=>'sign up succefuly']);

        } catch (\Exception $ex) {

        return redirect()->route('user.login')->with(['error'=>'Error in data']);

        }}
        // ################## active user
        public function active(Request $request){
            $phone=$request->phone;
            $query=User::select('*')->find($phone);

            $query->update([

                'phone'=>$request->phone

            ]);
        }
    // ################ verfication acount #################endregion
    public function verfy(Request $request){

        $user_phone=User::select('phone')->where('phone','=',$request->phone)->first();

        return view('front/signin/verfication',compact('user_phone'));


    }
    // ##################### login user #################
    public function user_login(){

        return view('front/signin/login');
    }
    // ############### user get login ################
    public function user_get_login(user_loginREquest $request){

        if (auth()->guard('user')->attempt(['phone' => $request->phone,'password' => $request->password]))
        {

            $user_name=user::select('name')->where('phone','=',$request->phone)->first();

            Session::put('phone',$request->phone);

            Session::put('user_name',$user_name['name']);



                return redirect()->route('back.home');
        }elseif(auth()->guard('Admin')->attempt(['phone' => $request->phone,'password' => $request->password]))
        {
            return redirect()->route('back.home');

        }else{
            return redirect()->route('user.login')->with(['error' => 'please insert correct data']);

        }
    }
    // ############### logout ##################endregion

    public function user_logout(Request $request){

        // Session::getHandler();
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');

    }



}//end class
