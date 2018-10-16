<?php

namespace App\Http\Controllers;

use App\Booklist;
use App\County;
use App\Exports\InstitutionsExport;
use App\Institution;
use App\Kyc;
use App\Region;
use App\SubCounty;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
//use Maatwebsite\Excel\Excel;
use Maatwebsite\Excel\Facades\Excel;


class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('admin.pages.home', compact('user'), array('user' => Auth::user()));
    }

    public function viewusers()
    {
        $users = User::where('user_type', 0)->get();
        return view('admin.pages.allusers', compact('users'));

    }

    public function makeadmin($id)
    {
        $user = User::find($id);
        $user->user_type = 1;
        $user->save();
        return back()->with('status', 'Admin successfully created');

    }

    public function delete_regmanager($id)
    {
        $user = User::find($id);
        $user->user_type = 0;
        $user->save();
        return back()->with('status', 'Now the user has ordinary sales rep privileges');

    }


    public function admins()
    {

        $regional_managers = User::where('user_type', 1)->get();

        return view('admin.pages.allregmanagers', compact('regional_managers'));
    }

    public function viewallreps()
    {
        $reps = User::where('user_type', 0)->get();
        return view('admin.pages.salesreps', compact('reps'));

    }

    public function rep_visits($id)
    {
        $msee = User::find($id);

        $institutions = Institution::where('user_id', $id)->first();
        $institutions1 = Institution::where('user_id', $id)->get();

        $counties = County::where('region_id', $institutions->region_id)->get();


        return view('admin.pages.regionalinstitutions', compact('institutions1', 'counties', 'msee'));
    }


    public function subCountiesJson(Request $request)
    {

        $county_id = $request->county_id;
        $subCounties = SubCounty::where('county_id', $county_id)->get();

        return response()->json([
            'sub_counties' => $subCounties
        ]);


    }


    public function institutionTable(Request $request)
    {
        $sub_county_id = $request->input('sub_county_id');

        $institution = Institution::where('subcounty_id', $sub_county_id)->get()->load(['region', 'county', 'subcounty', 'user']);
        return response()->json([
            'institutions' => $institution
        ]);
    }

    public function booklists(Institution $institution)
    {
        $booklists = Booklist::where('institution_id', $institution->id)->get();
        return view('admin.pages.booklists', compact('booklists'));
    }

    public function downloadFile($file_name)
    {
        $file = public_path() . '/Booklists/' . $file_name;

        return response()->download($file);
    }

    public function kyc(Institution $institution)
    {
        $kyc = Kyc::where('institution_id', $institution->id)->first();
        return view('admin.pages.kyc', compact('kyc'));
    }


    public function downloadKyc($kyc)
    {
        $file = public_path() . '/KYC/' . $kyc;
        return response()->download($file);
    }


    public function profile()
    {
//        $user=Auth::user();

        return view('admin.pages.profile', array('user' => Auth::user()));
    }

    public function editprofile(User $user)
    {
        Session::flash('_old_input', $user);

        return view('admin.pages.profileform', array('user' => Auth::user()));
    }

    public function updateprofile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'avatar' => 'mimes:jpeg,png,gif,WebP'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        $user = Auth::user();
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(public_path('/images/admin/profile-pictures/' . $filename));

//            dd($avatar);
            $user->avatar = $filename;
        }

        $user->save();


        return back()->with('status', 'Success!');
    }

    public function allregions()
    {
        $regions = Region::all();
        return view('admin.pages.allregions', compact('regions'));
    }
//
//    public function updateregion(Region $region)
//    {
//        Session::flash('_old_input',$region);
////        var_dump($region);
//        return view('admin.pages.regions');
//    }

    public function allsubregions()
    {
        $counties = County::all();
        $regions = Region::all();

        return view('admin.pages.allsubregions', compact('counties', 'regions'));

    }

    public function allsubcounties()
    {
        $subcounties = SubCounty::all();
        return view('admin.pages.subcounties', compact('subcounties'));

    }
//    public function deleteregion( Region $region)
//    {
//        $region=Region::find($region->id);
//        $region->delete();
//        return back()->with('status','Success!');
//    }

//    public function updatesubregion(Subregion $subregion)
//    {
//        Session::flash('_old_input',$subregion);
//
////        dd($subregion);
//        return view('admin.pages.subregions')->withRegions(Region::all());
//    }

//    public function deletesubregion(Subregion $subregion)
//    {
//        $subregion=Subregion::find($subregion->id);
//        $subregion->delete();
//        return back()->with('status','Success!');
//
//    }


    public function viewpubprimary()
    {
        $pubpschools = Institution::where('type', 'Public Primary')
            ->latest()
            ->get();
        return view('admin.pages.institutions.public-primary-schools', compact('pubpschools'));

    }

    public function viewpubsec()
    {
        $pubsschools = Institution::where('type', 'Public Secondary')->get();
        return view('admin.pages.institutions.public-secondary-schools', compact('pubsschools'));

    }

    public function viewprivsec()
    {
        $privatesecondary = Institution::where('type', 'Private Secondary')
            ->latest()
            ->get();
        return view('admin.pages.institutions.private-secondary-schools', compact('privatesecondary'));
    }

    public function viewprivprimary()
    {
        $privprimschls = Institution::where('type', 'Private Primary')
            ->latest()
            ->get();
        return view('admin.pages.institutions.private-primary-schools', compact('privprimschls'));
    }

    public function viewngos()
    {
        $ngos = Institution::where('type', 'NGO')->get();
        return view('admin.pages.institutions.ngo', compact('ngos'));
    }

    public function county()
    {
        $counties = Institution::where('type', 'County Office')->get();
        return view('admin.pages.institutions.county-office', compact('counties'));
    }

    public function bookshops()
    {
        $bookshops = Institution::where('type', 'Bookshop')->get();
//        dd($bookshops);
        return view('admin.pages.institutions.bookshop', compact('bookshops'));
    }

    public function ecds()
    {
        $ecds = Institution::where('type', 'ECD/KG/Nursery')->get();
        return view('admin.pages.institutions.ecds', compact('ecds'));

    }


    public function coast()
    {
        $manager = User::where('user_type', 1)
            ->where('region_id', 1)
            ->first();

        $sellers = User::where('region_id', 1)->where('user_type', 0)->get();

        $counties = County::where('region_id', 1)->get();
        $institutions = Institution::where('region_id', 1)
            ->latest()
            ->get();
//        $bookshops=Institution::where()
        return view('admin.pages.regions.coast', compact('institutions', 'manager', 'counties', 'sellers'));

    }

    public function coastExcel(Request $request)
    {
//        $date = $request->reservation;
//        dd($date);

        return (new InstitutionsExport(1))->download('institutions.xlsx');
    }

    public function riftv()
    {

        $manager = User::where('user_type', 1)
            ->where('region_id', 2)
            ->first();
        $sellers = User::where('region_id', 2)->where('user_type', 0)->get();

        $counties = County::where('region_id', 2)->get();
        $institutions = Institution::where('region_id', 2)
            ->latest()
            ->get();
        return view('admin.pages.regions.rift', compact('institutions', 'manager', 'counties', 'sellers'));

    }

    public function riftExcel()
    {
        return (new InstitutionsExport(2))->download('institutions.xlsx');


    }


    public function Nairobi()
    {
        $manager = User::where('user_type', 1)
            ->where('region_id', 3)
            ->first();
        $sellers = User::where('region_id', 3)->where('user_type', 0)->get();

        $counties = County::where('region_id', 3)->get();
        $institutions = Institution::where('region_id', 3)
            ->latest()
            ->get();
        return view('admin.pages.regions.nairobi', compact('institutions', 'manager', 'counties', 'sellers'));

    }

    public function nairobiExcel()
    {
        return (new InstitutionsExport(3))->download('institutions.xlsx');

    }

    public function Central()
    {
        $manager = User::where('user_type', 1)
            ->where('region_id', 4)
            ->first();
        $sellers = User::where('region_id', 4)->where('user_type', 0)->get();

        $counties = County::where('region_id', 4)->get();
        $institutions = Institution::where('region_id', 4)
            ->latest()
            ->get();
        return view('admin.pages.regions.central', compact('institutions', 'manager', 'counties', 'sellers'));

    }

    public function centralExcel()
    {
        return (new InstitutionsExport(4))->download('Institutions.xlsx');

    }

    public function Western()
    {
        $manager = User::where('user_type', 1)
            ->where('region_id', 5)
            ->first();
        $sellers = User::where('region_id', 5)->where('user_type', 0)->get();

        $counties = County::where('region_id', 5)->get();
        $institutions = Institution::where('region_id', 5)
            ->latest()
            ->get();
        return view('admin.pages.regions.western', compact('institutions', 'manager', 'counties', 'sellers'));

    }


    public function westernExcel()
    {
        return (new InstitutionsExport(5))->download('Institutions.xlsx');

    }


    public function Nyanza()
    {
        $manager = User::where('user_type', 1)
            ->where('region_id', 6)
            ->first();
        $sellers = User::where('region_id', 6)->where('user_type', 0)->get();

        $counties = County::where('region_id', 6)->get();
        $institutions = Institution::where('region_id', 6)
            ->latest()
            ->get();
        return view('admin.pages.regions.nyanza', compact('institutions', 'manager', 'counties', 'sellers'));
    }

    public function updatesubregion(Subregion $subregion)
    {
        Session::flash('_old_input', $subregion);
        $regions = Region::all();

        return view('admin.pages.subregions', compact('regions'));

    }

    public function nyanzaExcel()
    {
        return (new InstitutionsExport(6))->download('Institutions.xlsx');


    }


    public function NorthEastern()
    {
        $manager = User::where('user_type', 1)
            ->where('region_id', 7)
            ->first();
        $sellers = User::where('region_id', 7)->where('user_type', 0)->get();

        $counties = County::where('region_id', 7)->get();
        $institutions = Institution::where('region_id', 7)
            ->latest()
            ->get();
        return view('admin.pages.regions.northeastern', compact('institutions', 'manager', 'counties', 'sellers'));

    }

    public function northeasternExcel()
    {
        return (new InstitutionsExport(7))->download('Institutions.xlsx');

    }

    public function Eastern()
    {
        $manager = User::where('user_type', 1)
            ->where('region_id', 8)
            ->first();
        $sellers = User::where('region_id', 8)->where('user_type', 0)->get();

        $counties = County::where('region_id', 8)->get();
        $institutions = Institution::where('region_id', 8)
            ->latest()
            ->get();
        return view('admin.pages.regions.eastern', compact('institutions', 'manager', 'counties', 'sellers'));

    }

    public function easternExcel()
    {
        return (new InstitutionsExport(8))->download('Institutions.xlsx');

    }
}








