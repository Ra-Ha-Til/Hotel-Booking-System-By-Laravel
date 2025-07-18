<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if(Auth::id()) 
        {
            $usertype = Auth()->user()->usertype;
            //...........when user login.................
            if($usertype == 'user')
            {
                return view('dashboard'); //after login goto the dashboard
            }
          //...........when admin login.................
             if($usertype == 'admin')
            {
                return view('admin.index'); //after login goto the admin index
            }
        }

    }
}
