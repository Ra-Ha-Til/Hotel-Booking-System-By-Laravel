<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function index()
    {
        if (Auth::id()) //if someone try to login
        {
            $usertype = Auth()->user()->usertype;
            //...........Check user login.................
            if ($usertype == 'user') {
                return view('home.index'); //after login goto the dashboard

            }

            //...........Check admin login.................
            else if ($usertype == 'admin') {
                return view('admin.index'); //after login goto the admin index
            } else {
                return redirect()->back();  //if database not find the user then user see the same page
            }
        }

    }

    public function home()
    {
        return view('home.index');
    }

    public function create_room()
    {
        return view('admin.create_room');
    }

    public function add_room(Request $request)
    {
        return view('admin.create_room');
    }




}