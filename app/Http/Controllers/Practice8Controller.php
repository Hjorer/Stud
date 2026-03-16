<?php

namespace App\Http\Controllers;
use App\Models\countries8;
use App\Models\users8;
use App\Models\users8a2;
use App\Models\profiles8;
use App\Models\cities8a2;
use App\Models\roles;
use Illuminate\Http\Request;

    class Practice8Controller extends Controller
    {
        public function show()
        {
            $z3adanie = users8::find(2);
            $z5adanie = users8::with('profiles8')->get();
            $z8adanie = profiles8::with('users')->get();
            $z7adanie = profiles8::find( 2);
            $z11a12adanie = Countries8::with('cities')->get();
            $z15 = Countries8::with(['city' => function ($query) {$query->where('population', '>',100_000);}])->get();
            $z16 = cities8a2::with('country')->orderBy('population', 'asc')->get();
            $z17adanie = cities8a2::with('country')->get();
            $z20 = cities8a2::where('population', '>', 100000)->with('country')->get();
            $z24 = users8a2::with('roles')->get();
            $z27 = roles::with('users')->get();
            return view('post.user8', compact('z16'), ['z3' => $z3adanie, 'z5' => $z5adanie, 'z7' => $z7adanie, 'z8' => $z8adanie, 'z11a12' => $z11a12adanie, 'z15' => $z15, 'z17' => $z17adanie, 'z20' => $z20,'z24'=>$z24,'z27'=>$z27]);
        }
        public function prctice13task6($id){
             $user = users8::findOrFail($id);
            return view('practice13.user', compact('user'));
        }
    }
