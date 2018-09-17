<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        return view('user.pages.profile');
    }

    public function editprofile()
    {
        return view('user.pages.profileform');
    }
}
