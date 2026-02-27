<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserControllerone extends Controller
{
     public function show()
    {
        $users = User::all();
        foreach ($users as $user) {
            dump($user);
        }
    }
     public function showuser()
    {
        $users = User::all();
        return $users->toArray();
    }
    public function show1()
    {
        /* $newuser = new User;
        $newuser->name ='Maik';
        $newuser->surname ='Pedro';
        $newuser->save();
        $changeuser = User::find(1);
        $changeuser->name ='User';
        $changeuser->save();
        $dropuser = User::where('age', 30)->delete();
        $dropuser->delete();
        $dropsomeuser = User::destroy(3);
        $dropsomeuser = User::destroy([4,5,6]); */
        $users1 = User::where('age', '>', 30)->get();
        $users2 = User::where('salary', '>', 100)->orWhere('salary', '<', 300)->get();
        $users3 = User::take(4)->get();
        $users4 = User::skip(4)->take('5')->get();
        $users5 = User::where('id', 1)->orWhere('id', '<=', 5)->get();
        $users7 = User::where('id', 3)->get();
        $users8 = User::where('id', 3)->orWhere('id', '<=', '5')->get();
        $users6 = User::where('age', 30)->get();
        $users = User::all();
        return view('post.show222', ['users' => $users, 'users1' => $users1, 'users2' => $users2, 'users3' => $users3, 'users4' => $users4, 'users5' => $users5, 'users6' => $users6, 'users8' => $users8, 'users7' => $users7]);
    }
}
