<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('/admin/pages/product/list');
    }

    public function addProduct(){
        return view('/admin/pages/product/add');
    }

    public function addProgressProduct(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'size' => 'required|string|max:50',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'discount' => 'nullable|numeric|min:0|max:100'
        ]);
    
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $imagePath = $image->storeAs('images', $imageName, 'public');
        } else {
            return back()->withErrors(['image' => 'Image upload failed'])->withInput();
        }
    
      
        $product = new product();
        $product->name = $request->input('name');
        $product->image = $imagePath;
        $product->size = $request->input('size');
        $product->category_id = $request->input('category_id');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->discount = $request->input('discount') ?? 0;
    
        $product->save();
    
        return redirect()->route('addProduct')->with('success', 'Product added successfully!');
    }
    
}
