<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Shop;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('shop')->get();
        $shops = Shop::with('products')->get();
        $products = Product::all();
        return view('products.detail',['shops'=>$shops]);
    }

    public function create()
    {
        $products = Product::with('shop')->get();
        $shops = Shop::with('products')->get();
        $products = Product::all();
        return view('products.create',['products'=>$products],['shops'=>$shops]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'product_name' => 'required',
            'product_price' => 'required',
            'product_stock' => 'required',
            'shop_name' => 'required',
            'product_video' => 'required|mimes:mp4,mp3|max:2048',
        ]);
  
        $input = $request->all();

        if ($product_video = $request->file('product_video')) {
            $destinationPath = 'storage/videos/';
            $profileImage = date('YmdHis') . "." . $product_video->getClientOriginalExtension();
            $product_video->move($destinationPath, $profileImage);
            $input['product_video'] = "$profileImage";
        }


    
        Product::create($input);
     
        return redirect()->route('product.detail')
                        ->with('success','Shop created successfully.');
    }

    public function show(Product $products)
    {
        $products = Product::all();
        return view('products.detail',['products'=>$products]);
    }

    public function edit($id)
    {
        $products = Product::find($id);
        return view('products.edit',['products'=>$products]);
    }

    public function update(Request $request,$id, Product $products)
    {
        // dd($request->all());
        // exit();
        $request->validate([
            'product_name' => 'required',
            'product_price' => 'required',
            'product_stock' => 'required',
            'product_video' => 'required'
        ]);
        
        $id = $request->id;
        // $shop_id= Shop::where('shop_id',Auth::id())->pluck('id');
        $input = $request->all();
        // if ($shop_id = $request->shop_id) {
        //     $input['shop_id'] = "$shop_id";
        // }
        // else{
        //     unset($input['shop_id']);
        // }
            
        if ($product_video = $request->file('product_video')) {
            $destinationPath = '/storage/videos/';
            $profileImage = date('YmdHis') . "." . $product_video->getClientOriginalExtension();
            $product_video->move($destinationPath, $profileImage);
            $input['product_video'] = "$profileImage";
        }else{
            unset($input['product_video']);
        }
        Product::whereId($id)->update($input);
        return redirect()->route('product.detail')->with('success','Product updated successfully');
    }

    public function destory($id)
    {
        $products = Product::find($id);
        $products->delete();
        return redirect()->route('product.detail');
    }
}


