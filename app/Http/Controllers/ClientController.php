<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Client;
use Session;
use App\Cart;

class ClientController extends Controller
{
    public function home(){
        $products = Product::All()->where('status', 1);
        return view('client.home')->with('products', $products);
    }
    public function shop(){
        $categories = Category::All();

        $products = product::All()->where('status', 1);
        return view('client.shop')->with('categories', $categories)->with('products', $products);
        
    }

    public function addToCart($id){
        $product = Product::find($id);
        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        Session::put('cart', $cart);

        //dd(Session::get('cart'));
        // return redirect::to('/shop');
        return back();

    }


    public function cart(){
        if(!Session::has('cart')){
            return view('client.cart');
        }
        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        return view('client.cart', ['products' => $cart->items]);
    }

    public function remove_from_cart($id){
        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);
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




    public function orders(){
        return view('admin.orders');
    }
}
