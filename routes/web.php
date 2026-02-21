<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\FourController;
use App\Http\Controllers\DBController;
/* 
//Маршруты 1
//1
Route::get('/test', function () {
    return 'Hello World';
});

//2
Route::get('/dir/test', function () {
    return 'Hello Mir';
});

//3
Route::get('/user/{name}', function ($name) {
    return 'HI!' .' '. $name;
});

//4
Route::get('/users/{surname}/{name}', function ($name,$surname) {
    return 'HI!' .' '. $name . ' ' . $surname;
});

//5-необязательный параметр
Route::get('/city/{city?}', function ($city = 'Minsk') {
    return 'City:' . $city;
});

//6-8
Route::get('/user/{id}', function ($id) {
    return 'Id:' .' '. $id;
})->where('id','[0-9]+');

//9
Route::get('/user/{id}/{name}', function ($id,$name) {
    return 'Id:' .' '. $id . ' ' . 'Name:' . $name;
})->where('id','[0-9]+')->where('name','[a-z]');

//10
Route::get('/posts/{date}', function ($date) {
    return "Date: " . $date;
})->where('date', '[0-9]{4}-[0-9]{2}-[0-9]{2}');


//11
Route::get('/{year}/{month}/{day}', function ($year, $month, $day) {
    return "Дата: $day.$month.$year";
});

//12
Route::get('/users/{order}', function ($order) {
    return $order;
})->whereIn('order',['name','surname','age']);

//13
Route::get('/user/{id}', function ($id) {
    return $id;
})->whereNumber('id');

//14
Route::get('/city/{name}', function ($name) {
    return $name;
})->whereAlphaNumeric('name');

//15
Route::get('/post/{slug}', function ($slug) {
    return $slug;
});

//16
Route::get('/user/{id}', function ($id) {
    return $id;
})->where('id','[0-9]');

//17
Route::get('/user/{id}/{name}', function ($id,$name) {
    return $id . $name;
})->where('id','[0-9]')->where('name','[a-z]{2}');

//18
Route::get('/articles/{date}', function ($date) {
    return "Date: " . $date;
})->where('date', '[0-9]{4}-[0-9]{2}-[0-9]{2}');

//19
Route::get('/users/{order}', function ($order) {
    return $order;
})->whereIn('order',['name','surname','age']);

//20
Route::get('/{year}/{month}/{day}', function ($year, $month, $day) {
    return date('l',mktime(0,0,0,$month,$day,$year));
})->where('year','[0-9]{4}')->where('month','[0-9]{2}')->where('day','[0-9]{2}');
*/
/* 
//Контроллеры 2
//1-2
Route::get('/show', [UserController::class, 'show']);

//3
Route::get('/user/all', [UserController::class, 'all']);

//6
Route::get('/user/{name}', [UserController::class, 'name']);

//7
Route::get('/user/{surname}/{name}', [UserController::class, 'surnameANDname']);

//8-9
Route::get('/city/{name?}',[UserController::class,'nametothecity']);

//10-11
Route::get('/pages/show/{id}',[TypeController::class,'showOne']);
Route::get('/pages/all',[TypeController::class,'showall']);

//12
Route::get('/test/sum/{num1}/{num2}',[TestController::class,'sum'])->where('num1','[0-9]')->where('num2','[0-9]');
*/

/* 
//Представления 3

Route::get('/test', [UserController::class, 'test']);
Route::get('/pnm', [UserController::class, 'PNS']);
Route::get('/ashow', [UserController::class, 'ashow']);
Route::get('/one', [UserController::class, 'methodone']);
Route::get('/two', [UserController::class, 'methodtwo']);
Route::get('/three', [UserController::class, 'methodthree']); */

//Blade 4

//1
Route::get('/pbz1',[FourController::class,'one']);
Route::get('/show',[DBController::class,'show']);
Route::get('/show1',[DBController::class,'show1']);
Route::get('/show2',[DBController::class,'show2']);
Route::get('/show3',[DBController::class,'show3']);