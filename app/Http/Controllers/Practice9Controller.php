<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Practice9Controller extends Controller
{
    public function show()
    {
        return view('practice9.p9form');
    }
    public function task2(Request $request)
    {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $num3 = $request->input('num3');
        $sum = $num1 + $num2 + $num3;
        return view('practice9.p9task2', ['sum' => $sum]);
    }
    public function task3(Request $request)
    {
        $name = $request->input('name');
        $age = $request->input('age');
        $salary = $request->input('salary');
        $user = $request->only('name', 'age', 'salary');
        return view('practice9.p9task3', ['user' => $user]);
    }

    public function task4(Request $request)
    {
        $country = $request->input('country');
        $city = $request->input('city');
        $candc = $country . ',' . $city;
        return view('practice9.p9task4', ['candc' => $candc]);
    }
    public function task5(Request $request)
    {
        $country = $request->input('country');
        $city = $request->input('city');
        $task5 = $request->all();
        return view('practice9.p9task5', ['task5' => $task5]);
    }

    public function task6(Request $request)
    {
        $name = $request->input('name');
        $surname = $request->input('surname');
        $login = $request->input('login');
        $password = $request->input('password');
        $user = $request->only('name', 'login');
        return view('practice9.p9task6', ['user' => $user]);
    }
    public function task7(Request $request)
    {
        $name = $request->input('name');
        $surname = $request->input('surname');
        $email = $request->input('email');
        $login = $request->input('login');
        $password = $request->input('password');
        $user = $request->except('password', 'email');
        return view('practice9.p9task7', ['user' => $user]);
    }

    public function task8(Request $request, $id = null, $login = null)
    {
        if ($request->isMethod('post')) {
            return to_route('user.profile', [
                'id' => $request->id,
                'login' => $request->login
            ]);
        }
        return view('practice9.p9task8',compact('id','login'));
    }

    public function task9to12(Request $request){
        if ($request->routeIs('admin.*')) {
            
        }
       echo $request->path() . ',' . $request->url() . ',' . $request->fullUrl();

    }
}
