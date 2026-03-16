<?php

namespace App\Http\Controllers;

use App\Models\users8;
use Illuminate\Http\Request;

class Practice13Controller extends Controller
{
    public function show1()
    {
        return redirect('practice13/show2');
    }
    public function show2()
    {
        return 'show2';
    }
    public function showform()
    {
        return view('practice13.form');
    }
    public function showformuser()
    {
        return view('practice13.formuser');
    }
    public function check(Request $request)
    {
        $number = $request->input('num');
        if ($number >= 1 && $number <= 10) {
            return redirect('/success');
        }
        return back()->with('error', 'Число ' . $number . ' не входит в диапазон 1-10!');
    }
    public function success()
    {
        return "Ура! Вы niggaдяй";
    }
    public function store(Request $request)
    {
        \App\Models\users8::create([
            'login'    => $request->login,
            'password' => $request->password,
        ]);
        return redirect()->route('users');
    }
    public function task6(){
        return redirect()->route('userss');
    }
}
