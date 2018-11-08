<?php

namespace App\Http\Controllers;

use App\Book;
use App\Booklist;
use App\CentralSchool;
use App\CoastSchool;
use App\County;
use App\EasternSchool;
use App\Exports\InstitutionsExport;
use App\Imports\BookImport;
use App\Imports\CentralImports;
use App\Imports\CoastImports;
use App\Imports\EasternImports;
use App\Imports\NairobiImports;
use App\Imports\NorthEasternImports;
use App\Imports\NyanzaImport;
use App\Imports\RiftImports;
use App\Imports\WesternImport;
use App\Institution;
use App\Kyc;
use App\NairobiSchool;
use App\NorthEasternSchool;
use App\NyanzaSchool;
use App\Order;
use App\Report;
use App\Region;
use App\RiftSchool;
use App\SubCounty;
use App\User;
use App\WesternSchool;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
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

        try{
            $old_path=public_path('/images/user/profile-pictures/' . $user->avatar);
            $new_path=public_path('images/admin/profile-pictures/' . $user->avatar);
            if($user->avatar!='default.jpg')
                File::move($old_path, $new_path);
        }
        catch(\Exception $e){

        }

        $user->save();
        return back()->with('status', 'Admin successfully created!');

    }

    public function delete_regmanager($id)
    {
        $user = User::find($id);
        $user->user_type = 0;

        try{
            $old_path=public_path('/images/admin/profile-pictures/' . $user->avatar);
            $new_path=public_path('images/user/profile-pictures/' . $user->avatar);
            if($user->avatar!='default.jpg')
                File::move($old_path, $new_path);
        }
        catch(\Exception $e){

        }


        $user->save();
        return back()->with('status', 'Ordinary User!');

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

    public function getInstitutionTable2(Request $request)
    {
        $sub_county_id = $request->input('sub_county_id');
        $user_id=$request->input('u_id');

        $institution = Institution::where('subcounty_id', $sub_county_id)
            ->where('user_id',$user_id)
            ->get()->load(['region', 'county', 'subcounty', 'user','booklists','kyc','report']);
        return response()->json([
            'institutions' => $institution
        ]);
    }






    public function userProfile($id)
    {
        $msee=User::find($id);
        return view('admin.pages.userProfile',compact('msee'));

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

    public function report(Institution $institution)
    {
        $report=Report::where('institution_id',$institution->id)->first();
        return view('admin.pages.report',compact('report'));

    }
    public function downloadReport($report)
    {
        $file=public_path().'/Reports/'.$report;
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


    public function allsubregions()
    {
        $counties = County::all();
        $regions = Region::all();

        return view('admin.pages.allsubregions', compact('counties', 'regions'));

    }

    public function allsubcounties()
    {
        $subcounties = SubCounty::paginate(50);
        return view('admin.pages.subcounties', compact('subcounties'));

    }


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
        $pubsschools = Institution::where('type', 'Public Secondary')
            ->latest()
            ->get();
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
        $ngos = Institution::where('type', 'NGO')
            ->latest()
            ->get();
        return view('admin.pages.institutions.ngo', compact('ngos'));
    }

    public function county()
    {
        $counties = Institution::where('type', 'County Office')
            ->latest()
            ->get();
        return view('admin.pages.institutions.county-office', compact('counties'));
    }

    public function bookshops()
    {
        $bookshops = Institution::where('type', 'Bookshop')
            ->latest()
            ->get();
//        dd($bookshops);
        return view('admin.pages.institutions.bookshop', compact('bookshops'));
    }

    public function ecds()
    {
        $ecds = Institution::where('type', 'ECD/KG/Nursery')
            ->latest()
            ->get();
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
//        dd($institutions);
        return view('admin.pages.regions.coast', compact('institutions', 'manager', 'counties', 'sellers'));

    }

    // Excel Exports

    public function coastExcel(Request $request)
    {
        $date = $request->reservation;
        return (new InstitutionsExport(1,$date))->download('Coast Institutions Report.xlsx');
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

    public function riftExcel(Request $request)
    {
        $date = $request->reservation;

        return (new InstitutionsExport(2,$date))->download('Rift Valley Institutions Report.xlsx');


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

    public function nairobiExcel(Request $request)
    {
        $date = $request->reservation;

        return (new InstitutionsExport(3,$date))->download('Nairobi Institutions Report.xlsx');

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

    public function centralExcel(Request $request)
    {
        $date = $request->reservation;

        return (new InstitutionsExport(4,$date))->download('Central Institutions Report.xlsx');

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


    public function westernExcel(Request $request)
    {
        $date = $request->reservation;

        return (new InstitutionsExport(5,$date))->download('Western Institutions Report.xlsx');

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



    public function nyanzaExcel(Request $request)
    {
        $date = $request->reservation;

        return (new InstitutionsExport(6,$date))->download('Nyanza Institutions Report.xlsx');


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

    public function northeasternExcel(Request $request)
    {
        $date = $request->reservation;

        return (new InstitutionsExport(7,$date))->download('North Eastern Institutions Report.xlsx');

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

    public function easternExcel(Request $request)
    {
        $date = $request->reservation;

        return (new InstitutionsExport(8,$date))->download('Eastern Institutions Report.xlsx');

    }



    //Excel Imports

    //Rift Valley

    public function riftImport(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'riftImport' => 'mimes:xlsx,'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        Excel::import(new RiftImports(),request()->file('riftImport'));
        return back()->with('status','Saved!');
    }

    public function riftView()
    {
        $schools=RiftSchool::paginate(50);
        return view('admin.pages.schools.riftvalley',compact('schools'));
    }


    // Central

    public function centralView()
    {
        $schools=CentralSchool::paginate(50);
        return view('admin.pages.schools.central',compact('schools'));

    }

    public function centralImport(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'centralImport' => 'mimes:xlsx,'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        Excel::import(new CentralImports(),request()->file('centralImport'));
        return back()->with('status','Saved!');


    }

    // Coast
    public function coastView()
    {
        $schools=CoastSchool::paginate(50);
        return view('admin.pages.schools.coast',compact('schools'));

    }

    public function coastImport(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'coastImport' => 'mimes:xlsx,'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        Excel::import(new CoastImports(),request()->file('coastImport'));
        return back()->with('status','Saved!');



    }


    //Eastern
    public function easternView()
    {
        $schools=EasternSchool::paginate(50);
        return view('admin.pages.schools.eastern',compact('schools'));


    }

    public function easternImport(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'easternImport' => 'mimes:xlsx,'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        Excel::import(new EasternImports(),request()->file('easternImport'));
        return back()->with('status','Saved!');

    }


    //Nairobi
    public function nairobiView()
    {
        $schools=NairobiSchool::paginate(50);
        return view('admin.pages.schools.nairobi',compact('schools'));


    }

    public function nairobiImport(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nairobiImport' => 'mimes:xlsx,'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        Excel::import(new NairobiImports(),request()->file('nairobiImport'));
        return back()->with('status','Saved!');


    }

    // Nyanza

    public function nyanzaView()
    {
        $schools=NyanzaSchool::paginate(50);
        return view('admin.pages.schools.nyanza',compact('schools'));

    }

    public function nyanzaImport(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nyanzaImport' => 'mimes:xlsx,'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        Excel::import(new NyanzaImport(),request()->file('nyanzaImport'));
        return back()->with('status','Saved!');

    }

    //Western
    public function westernView()
    {
        $schools=WesternSchool::paginate(50);
        return view('admin.pages.schools.western',compact('schools'));

    }

    public function westernImport(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'westernImport' => 'mimes:xlsx,'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        Excel::import(new WesternImport(),request()->file('westernImport'));
        return back()->with('status','Saved!');


    }


    public function northeasternView()
    {
        $schools=NorthEasternSchool::paginate(50);
        return view('admin.pages.schools.northeastern',compact('schools'));


    }

    public function northeasternImport(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'northeasternImport' => 'mimes:xlsx,'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        Excel::import(new NorthEasternImports(),request()->file('northeasternImport'));
        return back()->with('status','Saved!');


    }

    public function bookpage()
    {
        $books=Book::all();
        return view('admin.pages.books',compact('books'));

    }

    public function bookImport(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'books' => 'mimes:xlsx,'
        ]);
        if($validator->fails()){
            return back()->withErrors($validator);

        }
        Excel::import(new BookImport(),request()->file('books'));
        return back()->with('status','Saved!');

    }

    public function deleteBook($id)
    {
        $book=Book::find($id);
        $book->delete();
        return back()->with('status','Successfully deleted!');

    }

    public function getOrders()
    {
        $orders=Order::all();
        return view('admin.pages.orders',compact('orders'));
    }

    public function getOrder(Request $request,$id)
    {
        $order=Order::find($id);
        $cart=unserialize($order->cart);
        $products=$cart->items;
        $totalPrice=$cart->totalPrice;


        // Get current page form url e.x. &page=1
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        // Create a new Laravel collection from the array data
        $itemCollection = collect($products);

        // Define how many items we want to be visible in each page
        $perPage = 2;

        // Slice the collection to get the items to display in current page
        $currentPageItems = $itemCollection->slice(($currentPage * $perPage) - $perPage, $perPage)->all();

        // Create our paginator and pass it to the view
        $paginatedItems= new LengthAwarePaginator($currentPageItems , count($itemCollection), $perPage);

        // set url path for generted links
        $paginatedItems->setPath($request->url());

//        return view('items_view', ['items' => $paginatedItems]);

        return view('admin.pages.that-order',['products'=>$paginatedItems,'order'=>$order,'totalPrice'=>$totalPrice]);

    }

    public function process($id)
    {
        $order=Order::find($id);
        $order->invoiced=true;
        $order->save();
        return back()->with('status','Order now processed!');
    }



}








