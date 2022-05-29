<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\Product;
use App\Models\Category;
use App\Models\Client;
use App\Models\Order;
use App\Mail\SendMail;
use App\Cart;
use Session;

class ClientController extends Controller
{
    public function home(){
        $products = Product::All()->where('status', 1);
        return view('client.home')->with('products', $products);
    }
    public function about(){
        return view('client.about');
    }
    public function shop(){
        $categories = Category::All();

        $products = product::All()->where('status', 1);
        return view('client.shop')->with('categories', $categories)->with('products', $products);
        
    }
    public function show($id){
        $product = Product::find($id);

        return view('client.show')->with('product', $product);
    
     }
    public function archive(){
        $categories = Category::All();

        $products = product::All()->where('status', 1);
        return view('client.archive')->with('categories', $categories)->with('products', $products);
        
    }

    public function addToCart($id){
        $product = Product::find($id);
        $previousCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($previousCart);
        $cart->add($product, $id);
        Session::put('cart', $cart);
        return back();

    }


    public function cart(){
        if(!Session::has('cart')){
            return view('client.cart');
        }
        $previousCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($previousCart);
        return view('client.cart', ['products' => $cart->items]);
    }

    public function remove_from_cart($id){
        $previousCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($previousCart);
        $cart->removeItem($id);

        if(count($cart->items)> 0){
            Session::put('cart', $cart);
        
        } else{
            Session::forget('cart');
        }
        return back();
    }


    public function checkout(){
        if(!Session::has('client')){
            return view('client.login');
        }
        if(!Session::has('cart')){
            return view('client.cart');
        }
        return view('client.checkout');
    }
    public function login(){
        return view('client.login');
    }
    public function signup(){
        return view('client.signup');
    }
    public function creatingAccount(Request $request){
            $this->validate($request, ['email' => 'email|required|unique:clients', 
                                        'password' => 'required|min:10']);
        
        $client = new Client();
        $client->email = $request->input('email');
        $client->password = bcrypt($request->input('password'));
        $client->save();
        return back()->with('status', 'Your account has been created.');
    }

    public function accessAccount(Request $request){
        $this->validate($request, ['email' => 'email|required', 
                                        'password' => 'required']);

         $client = Client::where('email', $request->input('email'))->first();

         if($client){
             if(Hash::check($request->input('password'), $client->password)){
                 Session::put('client', $client);
                 return redirect('/shop');
             }else{
                 return back()->with('status', 'Incorrect email or password.');
             }
         } else{
             return back()->with('status', 'This email does not exist.');
         }

    }

    public function logOut(){
        Session::forget('client');
        return redirect('/');
    }

public function finalCheckout(Request $request){
    $previousCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($previousCart);

    $customer_id = time();
    $order = new Order();
    $order->name = $request->input('name');
    $order->address = $request->input('address');
    $order->country = $request->input('country');
    $order->city = $request->input('city');
    $order->postcode = $request->input('postcode');
    $order->cart = serialize($cart);
    $order->customer_id = $customer_id;
    $order->save();
    
    Session::forget('cart');

    $orders = Order::where('customer_id', $customer_id)->get();
    $orders->transform(function($order, $key){
        $order->cart = unserialize($order->cart);
        return $order;
    });

    $email = Session::get('client')->email;
    Mail::to($email)->send(new SendMail($orders));

    return redirect('cart')->with('status', 'Your order has been approved.');
}


    public function orders(){
        $orders = Order::All();
        $orders->transform(function($order, $key){
            $order->cart = unserialize($order->cart);
            return $order;
        });
        return view('admin.orders')->with('orders', $orders);
    }
}
