<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
        ]);
        Product::create($validated);
        return redirect()->back()->with('success', 'Товар добавлен!');
    }
    
    public function show()
    {
        /* $create = Product::create(['name' => 'O', 'price' => 123, 'quantity' => 1,]); */
        $dropuser = Product::all();
        $dropid = Product::where('id', 5)->get();
        $dropfirst = Product::first();
        /* $dropfirst = Product::first()->delete(); */
        $dropids = Product::where('id', 1)->firstOrFail();
        $elevenz1 = Product::orderBy('price', 'desc')->where('price', '>', 500)->Where('is_active', true)->get();
        /* $changeproduct = Product::where('id', 3)->update(['price' => 999999]);
        $changeproduct1 = Product::where('quantity', 0)->update(['is_active' => false]);
        $changeproduct1 = Product::where('price',10)->delete(); */
        $productsort = Product::whereBetween('price', [100, 500])->get();
        $productsort1 = Product::whereIn('quantity', [0, 5, 10, 15])->get();
        $levers = Product::where(function ($query) {
            $query->where('quantity', 0)->where('price', '<', 100); })->orWhere('is_active', false)->get();
        return view('post.product', ['dropusers' => $dropuser, 'dropids' => $dropid, 'dropfirsts' => $dropfirst, 'dropidss' => $dropids, 'elevenz1' => $elevenz1, 'sort' => $productsort, 'sort1' => $productsort1, 'lever' => $levers]);
    }
    /* public function drop($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->back()->with('success', 'Товар delete');
    } */

}
