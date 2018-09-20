<?php

namespace App\Http\Controllers;

use App\Region;
use App\RegionalManager;
use App\Subregion;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;


class UserController extends Controller
{

    public function profile()
    {
        return view('user.pages.profile',array('user'=>Auth::user()));
    }

    public function editprofile(User $user)
    {
        Session::flash('_old_input',$user);
        $regions=Region::all();
        $subregions=Subregion::all();


        return view('user.pages.profileform',compact('regions','subregions'));
    }

    public function updateprofile(Request $request)
    {

            $user=Auth::user();
            $user->dob=$request->dob;
            $user->location = $request->location;
            $user->contacts=$request->contacts;
            $user->region_id=$request->region_id;
            $user->subregion_id=$request->subregion_id;
            $user->save();

        if ($request->hasFile('avatar'))
        {
            $avatar=$request->file('avatar');
            $filename=time(). '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('/images/user/profile-pictures/' . $filename));

            $user->avatar = $filename;
        }
        $user ->save();

        return back()->with('status','Profile updated successfully!');

    }
}
