<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function store(Request $request)
    {
        $article = Article::create([
            'title'   => 'свежие новости разработки на laravel',
            'body'         => '   Много лишних пробелов в начале и конце.   ',
            'published_at' => now(),
        ]);
        return view('post.articles', compact('article'));
    }
    public function show()
    {
        /* Article::create(['title'=>'kefkekfekk','body'=>'ekefkekc']); */
        $z19adanie = Article::withoutGlobalScope('published')->get();
        return view('post.article', ['z19' => $z19adanie]);
    }
}
