<?php

namespace App\Http\Controllers;

use App\County;
use App\Institution;
use App\Region;
use App\SubCounty;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ManagerController extends Controller
{
    public function allregions()
    {
        $regions=Region::all();
        return view('managers.pages.allregions',compact('regions'));
    }

    public function counties()
    {
        $counties=County::all();
        return view('managers.pages.allcounties',compact('counties'));
    }

    public function subcounties()
    {
        $constituencies=SubCounty::all();
        return view('managers.pages.allsubcounties',compact('constituencies'));

    }

    public function rep_visits($id)
    {
        $user=User::find($id);
        $institutions=Institution::where('user_id',$id)
            ->OrderBy('id','DESC')
            ->get();
        $counties=County::where('region_id',Auth::user()->region_id)->get();

        return view('managers.pages.reps-institutions',compact('institutions','counties','user'));
    }







}
