<?php

namespace App\Http\Controllers;

use App\Book;
use App\Cart;
use App\County;
use App\Jobs\NewOrderJob;
use App\Notifications\OrderNotification;
use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class BookController extends Controller
{
    public function getAddToCart(Request $request, $id)
    {
        $book=Book::find($id);
        $oldCart=Session::has('cart') ? Session::get('cart'):null;
        $cart= new Cart($oldCart);

        //method within a method. This method is defined in the cart class
        $cart->add($book,$book->id);

        $request->session()->put('cart',$cart);
//        dd($request->session()->get('cart'));
        return redirect()->back()->with('status','Added to cart!');
    }

    public function getAddTenToCart(Request $request,$id)
    {
        $book=Book::find($id);
        $oldCart=Session::has('cart') ? Session::get('cart'):null;
        $cart= new Cart($oldCart);

        //method within a method. This method is defined in the cart class
        $cart->addTen($book,$book->id);

        $request->session()->put('cart',$cart);
//        dd($request->session()->get('cart'));
        return redirect()->back()->with('status','10 Added to cart!');

    }

    public function getAdd100ToCart(Request $request, $id)
    {
        $book=Book::find($id);
        $oldCart=Session::has('cart') ? Session::get('cart'):null;
        $cart= new Cart($oldCart);

        //method within a method. This method is defined in the cart class
        $cart->addHundred($book,$book->id);

        $request->session()->put('cart',$cart);
//        dd($request->session()->get('cart'));
        return redirect()->back()->with('status','100 Added to cart!');
    }

    public function getReduceByOne($id)
    {
        $oldCart=Session::has('cart') ? Session::get('cart'):null;
        $cart= new Cart($oldCart);
        $cart->reduceByOne($id);

        if(count($cart->items)>0){
            Session::put('cart',$cart);
        }
        else{
            Session::forget('cart');
        }

        return back();

    }

    public function getRemoveItem($id)
    {
        $oldCart=Session::has('cart') ? Session::get('cart'):null;
        $cart= new Cart($oldCart);
        $cart->removeItem($id);

        if(count($cart->items)>0){
            Session::put('cart',$cart);
        }
        else{
            Session::forget('cart');
        }

        return back();
        
    }




    //get newprice after discount

//    public function getNewPrice(Request $request)
//    {
//        $newPrice
//    }

    public function getCart()
    {
        if(!Session::has('cart'))
        {
            return view('user.pages.shoppingcart');
        }
        $oldCart=Session::get('cart');
        $cart=new Cart($oldCart);
        return view('user.pages.shoppingcart',['products'=>$cart->items,'totalPrice'=>$cart->totalPrice]);

    }

    public function checkoutPage()
    {
        if(!Session::has('cart'))
        {
            return view('user.pages.shoppingcart');
        }

        $counties=County::where('region_id',Auth::user()->region_id)->get();

        $oldCart=Session::get('cart');
        $cart=new Cart($oldCart);
        $total=$cart->totalPrice;
        return view('user.pages.checkout',compact('total','counties'));
    }

    public function postCheckOut(Request $request)
    {
        if(!Session::has('cart'))
        {
            return view('user.pages.shoppingcart');
        }
        $oldCart =Session::get('cart');
        $cart=new Cart($oldCart);
        $order=new Order();
        $order->cart=serialize($cart);
        $order->institution_name=$request->institution_name;
        $order->type=$request->type;
        $order->county_id=$request->county_id;
        $order->subcounty_id=$request->subcounty_id;
        $order->contactName=$request->contactName;
        $order->discount=$request->discount;
        $order->contactNumber=$request->contactNumber;
        $order->contactEmail=$request->contactEmail;

        $order->rep_id=Auth::id();
        $order->save();
//        dd($order);
        Session::forget('cart');

//        return redirect('sendNotification');
        return $this->sendNotification();


    }

//    public function sendNotification()
//    {
//
//        $when=now()->addSeconds(10);
//        $users=User::where('user_type',1)->get();
//        foreach ($users as $user)
//        {
//            $user->notify (   (new OrderNotification())->delay($when)  );
//
//        }
//        return redirect('orderpage')->with('status','Order Submitted Successfully!');
//
//    }

    public function sendNotification()
    {
        $this->dispatch(new NewOrderJob());
        return redirect('orderpage')->with('status','Order Submitted Successfully!');

    }
}
