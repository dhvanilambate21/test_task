<?php

namespace App\Http\Controllers;
use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::all();
        return view('shop.detail')->with('shops',$shops);
    }

    public function create()
    {
        return view('shop.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'shop_name' => 'required',
            'shop_address' => 'required',
            'shop_email' => 'required',
            'shop_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($shop_image = $request->file('shop_image')) {
            $destinationPath = 'storage/images/';
            $profileImage = date('YmdHis') . "." . $shop_image->getClientOriginalExtension();
            $shop_image->move($destinationPath, $profileImage);
            $input['shop_image'] = "$profileImage";
        }
    
        Shop::create($input);
     
        return redirect()->route('shop.detail')
                        ->with('success','Shop created successfully.');
    }

    public function show(Shop $shop)
    {
        $data = Shop::all();
        return view('shop.detail',['shops'=>$data]);
    }

    public function edit($id)
    {
        $data = Shop::find($id);
        return view('shop.edit',['shops'=>$data]);
    }

    public function update(Request $request,$id, Shop $shop)
    {
        // dd($request->all());
        // exit();
        $request->validate([
            'shop_name' => 'required',
            'shop_address' => 'required',
            'shop_email' => 'required'
        ]);
        
        $id = $request->id;
        // dd($id);
        // exit();
        $input = $request->all();
        if ($shop_image = $request->file('shop_image')) {
            $destinationPath = '/storage/images/';
            $profileImage = date('YmdHis') . "." . $shop_image->getClientOriginalExtension();
            $shop_image->move($destinationPath, $profileImage);
            $input['shop_image'] = "$profileImage";
        }else{
            unset($input['shop_image']);
        }
        Shop::whereId($id)->update($input);
        return redirect()->route('shop.detail')->with('success','Shop updated successfully');
    }

    public function destory($id)
    {
        $data = Shop::find($id);
        $data->delete();
        return redirect()->route('shop.detail');
    }
}


