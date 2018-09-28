<?php

namespace App\Http\Controllers;

use App\Booklist;
use App\Institution;
use App\institutionBooklist;
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

    public function editprofile()
    {
//        Session::flash('_old_input',$user);
        $regions=Region::all();
        $subregions=Subregion::all();


        return view('user.pages.profileform',compact('regions','subregions'));
    }

    public function updateprofile(Request $request)
    {
//        $regions=Region::all();

            $user=Auth::user();
            $user->dob=$request->dob;
            $user->location = $request->location;
            $user->contacts=$request->contacts;
            $user->region_id=$request->region_id;
//            $user->subregion_id=$request->subregion_id;
            $user->save();

        if ($request->hasFile('avatar'))
        {
            $avatar=$request->file('avatar');
            $filename=time(). '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('/images/user/profile-pictures/' . $filename));

            $user->avatar = $filename;
        }
        $user ->save();

        return back()->with('status','Success!');

    }

    public function mainform()
    {
        $regions=Region::all();
        $subregions=Subregion::all();
        $booklist = false;
        return view('user.pages.mainform',compact('regions','subregions','booklist'));

    }

//method for filling the main form
    public function fill(Request $request)
    {

        $institution=new Institution();

        $institution->institution_name=$request->institution_name;
        $institution->type=$request->type;
        $institution->activity=$request->activity;
        $institution->upcoming=$request->upcoming;
        $institution->orders=$request->orders;
        $institution->outcome=$request->outcome;
        $institution->region_id=$request->region_id;
        $institution->subregion_id=$request->subregion_id;
        $institution->contactName=$request->contactName;
        $institution->contactEmail=$request->contactEmail;
        $institution->contactDesignation=$request->contactDesignation;
        $institution->contactNumber=$request->contactNumber;
        $institution->user_id=Auth::id();
        $institution->save();

        if ($request->hasFile('filename'))
        {
//            dd($request->file('filename_'));

            foreach ($request->file('filename') as $file)
            {
//                var_dump($file);
                $extension=$file->getClientOriginalExtension();
                $filename=uniqid(). '.'.$extension;
                $location=public_path('Documents/');
                $file->move($location,$filename);
                $booklist=new Booklist();
                $booklist->filename=$filename;
                $booklist->institution_id = $institution->id;
                $booklist->save();

            }
        }

        return back()->with('status','Success!');
    }

    public function view()
    {
       $user=Auth::user();
       $institutions=Institution::all();
       $regions=Region::all();
       $subregions=Subregion::all();

        return view('user.pages.institutions',compact('user','institutions','regions','subregions'));
    }

    public function updateinstitution(Institution $institution)
    {
        Session::flash('_old_input',$institution);
//        dd($institution);
        $regions=Region::all();
        $subregions=Subregion::all();
        $booklist = Booklist::where('institution_id', $institution->id)->get();
        return view('user.pages.mainform',compact('regions','subregions', 'booklist'));

    }

}
