<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ProducttController extends Controller
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
        //zadanie7
        $z7adanie1 = Product::all();
        $z7adanie2 = Product::where('id', 5)->get();
        $z7adanie3 = Product::first();
        $z7adanie4 = Product::firstOrFail('id');
        //zadanie8
        /* $create = Product::create(['name' => 'O', 'price' => 123, 'quantity' => 1,]); */
        /* Product::orderBy('price', 'desc')->where('price', '>', 500)->Where('is_active', true)->get(); */
        //Zadanie9
        Product::where('id', 3)->update(['price' => 999999]);
        $z9 = Product::find(3)?->toArray() ?? [];
        Product::where('quantity', 0)->update(['is_active' => false]);
        //zadanie10
        /* Product::first()->delete();
        Product::where('price',10)->delete();
        Product::destroy([10]); */
        //zadanie11
        $z11adanie = Product::where('price','>',500)->where('is_active','=',true)->orderBy('price','desc')->get();
        //zadanie13
        $z13adanie1 = Product::whereBetween('price', [100, 500])->get();
        $z13adanie2 = Product::whereIn('quantity', [0, 5, 10, 15])->get();
        //zadanie15
        $z15adanie = Product::where(function ($query) {$query->where('quantity', 0)->where('price', '<', 100); })->orWhere('is_active', false)->get();
        //zadanie16
        $z16adanie1 =Product::where('is_active',true)->get();
        $z16adanie2 =Product::avg('price');
        $z16adanie3a1 =Product::min('price');
        $z16adanie3a2 =Product::max('price');
        $z16adanie4 =Product::sum('quantity');
        $z17adanie =Product::where('is_active','=',true)->selectRaw('AVG(price) as average_price,SUM(quantity) as total_quantity')->get();
        $z18adanie = Product::active()->expensive(500)->get();
        return view('post.products', ['z7and1' => $z7adanie1, 'z7and2' => $z7adanie2, 'z7and3' => $z7adanie3, 'z7and4' => $z7adanie4, 'znine' => $z9, 'z13and1' => $z13adanie1, 'z13and2' => $z13adanie2, 'z15' => $z15adanie,'z11'=>$z11adanie,'z16and2'=>$z16adanie2,'z16and1'=>$z16adanie1,'z16and3a2'=>$z16adanie3a2,'z16and3a1'=>$z16adanie3a1,'z16and4'=>$z16adanie4,'z17'=>$z17adanie,'z18'=>$z18adanie]);
    }

}
