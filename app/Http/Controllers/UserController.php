<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(){
        return 'Hi!' ;
    }
    public function all(){
        return 'Hi!!!!!' ;
    }
    public function name($name){
        return 'HI!' .' '. $name;
    }
    public function surnameANDname($surname,$name){
        return 'Welcome!:' . $surname . ' ' . $name;
    }

    public function nametothecity($city){
        $name =[
            'Alexandr' => 'Moscow',
            'Ivan' => 'Ekaterinburg',
            'Oleg' => 'Kazan',
            'Masha' => 'Omsk',
            'Viktorya' => 'Novgorod',
            'Alya' => 'Voronezh'
        ];
        
        return $name[$city] ?? 'Error';
    }

    public function test(){
        return view('test');
    }

    public function PNS(){
        return view('test',['name' => 'Alex','surname' => 'G']);
    }

    public function ashow(){
        return view('post.show',['title' => 'ejwgivi','content' => 'egkiewgjigj']);
    }

    public function methodone(){
        return view('post.methodone',['title' => 'ejwgivi','content' => 'egkiewgjigj']);
    }
    public function methodtwo(){
        return view('post.methodtwo',['title' => 'ejwgivi','content' => 'egkiewgjigj']);
    }
    public function methodthree(){
        return view('post.methodthree',['title' => 'ejwgivi','content' => 'egkiewgjigj']);
    }
}
