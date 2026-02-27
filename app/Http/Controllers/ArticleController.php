<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show(){
        /* Article::create(['title'=>'kefkekfekk','body'=>'ekefkekc']); */
        $z19adanie = Article::withoutGlobalScope('published')->get();
        return view ('post.article',['z19'=>$z19adanie]);
    }
}
