<?php

namespace App\Http\Controllers;

use App\Region;
use App\RegionalManager;
use App\Subregion;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $user=Auth::user();
        return view('admin.pages.home',compact('user'));
    }

    public function managers()
    {
        return view('admin.pages.managers');
    }

    public function managersform()
    {
        return view('admin.pages.managers-form');

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
        $region = new Region();
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

}
