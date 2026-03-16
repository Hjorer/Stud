<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Practice14Controller extends Controller
{
    public function num201(){
        return new Response('некоторый текст 1','201');
    }
    public function num404(){
        return new Response('некоторый текст 2','404');
    }
    public function num404to2(){
        return new Response('некоторый текст 3','404');
    }
    public function task4(){
        return response()
        ->view('practice14.task4',['heading' => 'Заголовок через Response'])
        ->header('Content-Type', 'text/html')
        ->header('X-Custom-Header', 'Laravel-Power');
    }
}
