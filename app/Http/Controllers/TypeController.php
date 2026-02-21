<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function showOne($id){
        $types = [
            1 => 'pages1',
            2 => 'pages2',
            3 => 'pages3',
            4 => 'pages4',
            5 => 'pages5',
        ];
        return $types[$id] ?? 'No pages' . ' ' . $id*$id ;
    }
    public function showall(){
        return 'Hi all';
    }
}
