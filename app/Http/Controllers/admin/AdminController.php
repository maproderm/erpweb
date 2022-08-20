<?php

namespace App\Http\Controllers\admin;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

    public function deactivated(){
        return view('auth.account-deactivated');
    }


    public function dashboard(){
        $data        = (object)[];
        $data->user  = Auth::user();
        return view('administrator.dashboard');
    }
}
