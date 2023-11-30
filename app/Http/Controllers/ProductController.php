<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        Product::get();
        return view('products.index',['products'=>Product::get()]);
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        
        //data validation

        $request->validate([
            'name' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000'
        ]);

        //upload image
        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('products'),$imageName);

        $product = new Product;
        $product->image=  $imageName;
        $product->name=  $request->name;
        $product->quantity=  $request->quantity;
        $product->price=  $request->price;
        $product->description=  $request->description;

        $product->save();
        return redirect('/product')->withSuccess('Product Created!');

    }

    public function edit($id){
        
        $product = Product::find($id);
        if (!$product) {
            abort(404); // Or handle the case where the product with the given ID is not found.
        }
        return view('products.edit', ['product' => $product]);
    }

    public function update(Request $request,$id){
        //data validation

        $request->validate([
            'name' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:jpeg,jpg,png,gif|max:10000'
        ]);

        $product = Product::where('id',$id)->first();

        if(isset($request->image)){
            //upload image
            $imageName = time().'.'.$request->image->extension();

            $request->image->move(public_path('products'),$imageName);

            $product->image=  $imageName;
        }

        
        
        $product->name=  $request->name;
        $product->quantity=  $request->quantity;
        $product->price=  $request->price;
        $product->description=  $request->description;


        $product->save();
        return redirect('/product')->withSuccess('Product updated!');
    }

    public function destroy($id){
        $product=Product::where('id',$id)->first();
        $product->delete();
        return redirect('/product')->withSuccess('Product deleted!!');
    }

    public function show($id){
        $product=Product::where('id',$id)->first();
        
        return view('products.show',['product'=>$product]);
    }

    

    



}
