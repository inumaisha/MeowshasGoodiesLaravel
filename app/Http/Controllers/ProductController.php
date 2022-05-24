<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function products(){

        $products = Product::All();
            return view('admin.products')->with('products', $products );
        }

    public function addproduct(){
        $categories = Category::All()->pluck('category_name', 'category_name');
        return view('admin.addproduct')->with('categories', $categories);
    }
    public function saveproduct(Request $request){
        $this->validate($request, ['product_name' => 'required',
                                    'product_price' => 'required',
                                    'product_category' => 'required',
                                    'product_image' => 'image|nullable|max:1999']);

    if($request->hasFile('product_image')){
        $fileNameWithExt = $request->file('product_image')->getClientOriginalName();
        $fileName = pathInfo($fileNameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('product_image')->getClientOriginalExtension();
        $fileNameToStore = $fileName.'_'.time().'.'.$extension;

        $path = $request->file('product_image')->storeAs('public/product_images', $fileNameToStore);

    }else{
        $fileNameToStore = 'noimage.jpg';

    }
        $product = new Product();

        $product->product_name = $request->input('product_name');
        $product->product_price = $request->input('product_price');
        $product->product_category = $request->input('product_category');
        $product->product_image = $fileNameToStore;

        $product->save();

        return back()->with('status', 'New Product has been successfully added.');
        

    }
    
    
    public function editproduct($id){

        $products = Product::find($id);
        $categories = Category::All()->pluck('category_name', 'category_name');
            return view('admin.editproduct')->with('products', $products )->with('categories', $categories);
        }
  

    public function updateproduct(Request $request){

        $this->validate($request, ['product_name' => 'required',
        'product_price' => 'required',
        'product_category' => 'required',
        'product_image' => 'image|nullable|max:1999']);

        $product = Product::find($request->input('id'));

        $product->product_name = $request->input('product_name');
        $product->product_price = $request->input('product_price');
        $product->product_category = $request->input('product_category');
       
    if($request->hasFile('product_image')){
        $fileNameWithExt = $request->file('product_image')->getClientOriginalName();
        $fileName = pathInfo($fileNameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('product_image')->getClientOriginalExtension();
        $fileNameToStore = $fileName.'_'.time().'.'.$extension;

        $path = $request->file('product_image')->storeAs('public/product_images', $fileNameToStore);
        if($product->product_image != 'noimage.jpg'){
            Storage::delete('public/product_images/'.$product->product_image);
        }
        $product->product_image = $fileNameToStore;
    }

        $product->update();

        return redirect('/products')->with('status', 'Product has been successfully updated.');
        }
}
