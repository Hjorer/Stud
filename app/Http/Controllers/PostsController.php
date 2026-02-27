<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show()
    {
        $droppost = Post::where('text', 'LIKE', '%$Laravel%')->orWhere('view_count', '>', 1000)->skip(5)->take(10)->get();
        $droppostdate = Post::whereNotNull('published_at')->whereDate('created_at', '2026-02-27')->get();
        return $droppost . '<p>Z2</p>' . $droppostdate;
    }
}
