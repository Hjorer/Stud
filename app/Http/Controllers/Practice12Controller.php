<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Practice12Controller extends Controller
{
    public function index(Request $request)
    {
        $firstTime = $request->session()->get('first_visit', now()->format('H:i:s'));
        $request->session()->put('first_visit', $firstTime);
        $value = $request->session()->get('counter', 1);
        echo $value . ' ' . 'Pepe Shneine ' . 'Date:' . $firstTime;
        $request->session()->forget('key');
        $request->session()->put('key', '2');
        $request->session()->put('counter', $value + 1);
        $request->session()->get('status', '2');
        dump($request->session()->all());
    }
    public function schet(Request $request)
    {
        $counter = $request->session()->get('counter', 1);
        $request->session()->put('counter', $counter + 1);
        return redirect()->action([self::class, 'show']);
    }
    public function show(Request $request)
    {
        session(['user_id' => 123, 'role' => 'admin', 'theme' => 'dark']);
        if (!session()->has('time')) {
            session(['time' => now()->toDateTimeString()]);
        }
        $request->session()->put('arr', ['1', '2', '3']);
        $request->session()->push('arr', '4');
        session(['key'=>'Obeme']);
        $value = session(['key']);
        $value = session('key','default');
        dump(session('time'));
        $massive = session()->all();
        dump($massive,$value);
        $counter = $request->session()->get('counter', 1);
        $request->session()->flush();
        return view('practice12.practice12', ['counter' => $counter]);
    }
}
