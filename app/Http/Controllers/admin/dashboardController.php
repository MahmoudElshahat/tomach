<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class dashboardController extends Controller
{


    // ===================
    public function index(){
        // $admin_session=Session('phone');
        // $admins=Admin::select('*')->where('phone','=',$admin_session)->get();

        // return view('admin.dashboard',compact('admins'));
        return view('admin.dashboard');

   }
}
