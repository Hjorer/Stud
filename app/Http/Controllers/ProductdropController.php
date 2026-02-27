<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductdropController extends Controller
{
    public function drop($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->back()->with('success', 'Товар delete');
    }
    public function show(){
        $dropuser = Product::all();
        return view('post.dropproduct',['dropusers' => $dropuser]);
    }
}
