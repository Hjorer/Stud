<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Post;
use App\Models\User;

class MainController extends Controller
{
    public function index()
    {
        $categoriesCount = Category::count();
        $tagsCount = Tag::count();
        $postsCount = Post::count();
        $usersCount = User::count();

        return view('admin.index', compact('categoriesCount', 'tagsCount', 'postsCount', 'usersCount'));
    }
}
