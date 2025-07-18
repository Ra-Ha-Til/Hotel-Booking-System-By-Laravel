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
        $data = new Room();
        $data->room_title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->wifi = $request->wifi;
        $data->room_type = $request->type;
        $image = $request->image;
        $data->save();

        return redirect()->back();
    }




}