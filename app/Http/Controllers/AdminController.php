<?php

namespace App\Http\Controllers;

use App\RegionalManager;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.pages.home');
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
        $reg_manager->save();
        return back()->with('status',"Manager added successfully to the system");


    }

}
