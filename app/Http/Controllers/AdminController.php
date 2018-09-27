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

//use Intervention\Image\Image;
//use Intervention\Image\ImageManagerStatic as Image;


class AdminController extends Controller
{
    public function index()
    {
        $user=Auth::user();
        return view('admin.pages.home',compact('user'),array('user'=>Auth::user()));
    }

    public function managers()
    {
        $regional_managers=RegionalManager::all();

        return view('admin.pages.allregmanagers',compact('regional_managers'));
    }

    public function managersform()
    {
        $regions=Region::all();
        return view('admin.pages.managers-form',compact('regions'));

    }

    public function addManager(Request $request)
    {
        $reg_manager=new RegionalManager();
        $reg_manager->name=$request->name;
        $reg_manager->phoneNumber=$request->phoneNumber;
        $reg_manager->region_id=$request->region_id;
        $reg_manager->save();
        return back()->with('status'," Regional Manager added successfully to the system");


    }

    public function addregion()
    {
        return view('admin.pages.regions');
    }

    public function addsubregion()
    {
        //withRegions works the same way as the compact method. withRegions() is therefore a magic method
        return view('admin.pages.subregions')->withRegions(Region::all());

    }
    public function postregion(Request $request)
    {
        if($request->has('id') && request('id')!=null)
        {
            $region=Region::find($request->id);

        }
        else{
            $region = new Region();
        }
        $region->region = $request->region;
        $region->save();
        return back()->with('status','A region has been added successfully');

    }

    public function postsubregion(Request $request)
    {
        $subregion = new Subregion();
        $subregion->subregion=$request->subregion;
        $subregion->region_id = request('region_id');
        $subregion->save();
        return back()->with('status','A subregion has been added successfully ');

    }
    public function profile()
    {
        $user=Auth::user();

        return view('admin.pages.profile',array('user'=>Auth::user()));
    }

    public function editprofile(User $user)
    {
        Session::flash('_old_input',$user);

        return view('admin.pages.profileform',array('user'=>Auth::user()));
    }

    public function updateprofile(Request $request)
    {

        $user=Auth::user();
        if ($request->hasFile('avatar'))
        {
            $avatar=$request->file('avatar');
            $filename=time(). '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('/images/admin/profile-pictures/' . $filename));

            $user->avatar = $filename;
        }
        $user ->save();


        return back()->with('status','Profile updated successfully!');
    }

    public function allregions()
    {
        $regions=Region::all();
        return view('admin.pages.allregions',compact('regions'));
    }

    public function updateregion(Region $region)
    {
        Session::flash('_old_input',$region);
//        var_dump($region);
        return view('admin.pages.regions');
    }

    public function allsubregions()
    {
        $subregions=Subregion::all();

        return view('admin.pages.allsubregions',compact('subregions'));

    }

    public function deleteregion( Region $region)
    {
        $region=Region::find($region->id);
        $region->delete();
        return back()->with('status','Delete successful');
    }

}
