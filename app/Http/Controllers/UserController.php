<?php

namespace App\Http\Controllers;

use App\Booklist;
use App\County;
use App\Institution;
//use App\institutionBooklist;
use App\Kyc;
use App\Region;
//use App\RegionalManager;
use App\SubCounty;
//use App\Subregion;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use PHPUnit\Framework\Constraint\Count;


class UserController extends Controller
{
    public function mainform()
    {
        $booklist=false;
        $regions=Region::all();
        $counties=County::where('region_id',Auth::user()->region_id)->get();
        return view('user.pages.mainform',compact('regions','counties'));


    }


    public function profile()
    {
        return view('user.pages.profile',array('user'=>Auth::user()));
    }

    public function editprofile(User $user)
    {
        Session::flash('_old_input',$user);


        return view('user.pages.profileform');
    }

    public function updateprofile(Request $request )

    {
        $validator=Validator::make($request->all(),[
           'avatar'=>'mimes:jpeg,png,gif,WebP'
        ]);

        if ($validator->fails()){
            return back()->withErrors($validator);
        }
        $user=Auth::user();
        $user->dob=$request->dob;
        $user->location = $request->location;
        $user->contacts=$request->contacts;

        if ($request->hasFile('avatar'))
        {
            $avatar=$request->file('avatar');
            $filename=time(). '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('/images/user/profile-pictures/' . $filename));
//            $oldfilename=$user->avatar;

            $user->avatar = $filename;
        }else{
            return back()->with('status','Please upload image');
        }
        $user ->save();

        return back()->with('status','Profile updated successfully!');

    }


    public function subCountiesJson(Request $request)
    {
        $county_id=$request->county_id;
        $subcounties=SubCounty::where('county_id',$county_id)->get();
        return response()->json([
            'sub_counties'=>$subcounties
        ]);
    }

//method for filling the main form
    public function fill(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'booklist','kyc'   => 'mimes:doc,pdf,docx,zip,txt'
        ]);

        if ($validator->fails()){
            return back()->withErrors($validator);
        }


        if($request->id==null){
            $institution=new Institution();

        }
        else{
            $institution=Institution::find($request->id);

        }

        $institution->institution_name=$request->institution_name;
        $institution->type=$request->type;
        $institution->activity=$request->activity;
        $institution->upcoming=$request->upcoming;
        $institution->orders=$request->orders;
        $institution->outcome=$request->outcome;
        $institution->region_id=Auth::user()->region_id;
        $institution->county_id=$request->county_id;
        $institution->subcounty_id=$request->subcounty_id;
        $institution->contactName=$request->contactName;
        $institution->contactEmail=$request->contactEmail;
        $institution->contactDesignation=$request->contactDesignation;
        $institution->contactNumber=$request->contactNumber;
        $institution->user_id=Auth::id();
        $institution->save();

        if ($request->hasFile('booklist'))
        {
//            dd($request->file('filename_'));

            foreach ($request->file('booklist') as $file)
            {
//                var_dump($file);
                $extension=$file->getClientOriginalExtension();
                $filename=uniqid(). '.'.$extension;
                $location=public_path('Booklists/');
                $file->move($location,$filename);



                $booklist=new Booklist();
                $booklist->filename=$filename;
                $booklist->institution_id = $institution->id;
                $booklist->save();

            }
        }
        if($request->hasFile('kyc'))
        {
            $kyc=$request->file('kyc');
            $extension=$kyc->getClientOriginalExtension();
            $filename=uniqid().'.'.$extension;
            $location=public_path('KYC/');
            $kyc->move($location,$filename);

            $kycustomer=new Kyc();
            $kycustomer->kyc=$filename;
            $kycustomer->institution_id=$institution->id;
            $kycustomer->save();

        }


        return back()->with('status','Form submitted successfully');
    }

    public function view()
    {
       $user=Auth::user();
       $institutions=Institution::where('user_id',$user->id)->latest()->get();
       $regions=Region::all();
       $counties=County::all();

        return view('user.pages.institutions',compact('user','institutions','regions','counties'));
    }

    public function updateinstitution(Institution $institution)
    {
        Session::flash('_old_input',$institution);
//        dd($institution);
//        $regions=Region::all();
//        $counties=County::all();
        $counties=County::where('region_id',Auth::user()->region_id)->get();
        $booklist = Booklist::where('institution_id', $institution->id)->get();
        return view('user.pages.mainform',compact('regions','counties', 'booklist'));

    }

    public function booklists(Institution $institution)
    {
        $booklists=Booklist::where('institution_id',$institution->id)->get();
        return view('user.pages.booklists',compact('booklists'));


    }

    public function downloadFile($file_name)
    {

       $file=public_path().'/Booklists/'.$file_name;

       return response()->download($file);
    }
    public function kyc(Institution $institution)
    {
        $kyc=Kyc::where('institution_id',$institution->id)->first();
        return view('user.pages.kyc',compact('kyc'));
    }

    public function downloadkyc($kyc)
    {
        $file=public_path().'/KYC/'.$kyc;
        return response()->download($file);

    }

}
