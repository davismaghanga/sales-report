<?php

namespace App\Http\Controllers;

use App\Region;
use App\Subregion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        if(Auth::user()->user_type==0)
        {
            $regions=Region::all();
            $subregions=Subregion::all();
            return view('user.pages.mainform',compact('regions','subregions'));

        }
        else
        {
            return view('admin.pages.home');
        }
    }

}
