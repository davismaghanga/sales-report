<?php

namespace App\Http\Controllers;

use App\County;
use App\Institution;
use App\Region;
use App\SubCounty;
use App\Subregion;
use App\User;
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
        $booklist = false;


        if(Auth::user()->user_type==0)
        {
            $regions=Region::all();
            $counties=County::where('region_id',Auth::user()->region_id)->get();
//            $subcounties=SubCounty::where('region_id',Auth::user()->region_id)->get();
            return view('user.pages.mainform',compact('regions','counties','subcounties','booklist'));

        }
        else
        {
            $institutions=Institution::all();
            return view('admin.pages.home',compact('institutions'));
        }

    }

}
