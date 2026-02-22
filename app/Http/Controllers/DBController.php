<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DBController extends Controller
{
    public function show()
    {
        $user = DB::table('user')->get();
        return $user;
    }
    public function show1()
    {
        $users1 = DB::table('user')->get();

        foreach ($users1 as $user1) {
            return $user1;
        }
    }
    public function show2()
    {
        $users2 = DB::table('user')->where('age', 30)->get();
        $users3 = DB::table('user')->where('age', 30)->get();
        $users4 = DB::table('user')->where('age', '!=', 30)->get();
        $users5 = DB::table('user')->where('age', '>', 30)->get();
        $users6 = DB::table('user')->where('age', '<', 30)->get();
        $users7 = DB::table('user')->where('age', '<=', 30)->get();
        $users8 = DB::table('user')->where('age', '<=', 30)->orwhere('age', '>=', 20)->get();
        $users9 = DB::table('user')->where('age', '<=', 30)->orwhere('id', '>=', 4)->get();
        $users10 = DB::table('user')->where('age', '<=', 30)->orwhere('id', '>=', 4)->orWhere('salary', 500)->get();
        $users11 = DB::table('user')->where('salary', 500)->orwhere(function ($query) {
            $query->where('age', '>', 20)->where('age', '<', 30);
        })->get();
        $users12 = DB::table('user')->where('age', '>', 20)->orwhere(function ($query) {
            $query->where('age', '>', 20)->where('age', '<', 30);
        })->orwhere(function ($query) {
            $query->where('salary', '>', 400)->where('salary', '<', 800);
        })->get();
        $users13 = DB::table('user')->where('id', 3)->first();
        $users = DB::table('user')->select('firstname', 'email as user_email')->get();
        $users14 = DB::table('user')->where('id', '3')->value('email');
        $users15 = DB::table('user')->pluck('firstname');
        $users16 = DB::table('user')
            ->whereBetween('age', [30, 40])
            ->get();
        $users17 = DB::table('user')
            ->whereNotBetween('age', [30, 40])
            ->get();
        $users18 = DB::table('user')
            ->whereIn('id', [1, 2, 3, 5])
            ->whereNotNull('updated_at')
            ->whereNull('updated_at')
            ->get();
        $users19 = DB::table('user')
            ->whereNotIn('id', [1, 2, 3, 5])
            ->get();
        $users20 = DB::table('user')
            ->whereId(3)
            ->get();
        $users21 = DB::table('user')
            ->wherefirstname('John')
            ->get();
        $users22 = DB::table('user')
            ->whereemail('john@mail.com')
            ->get();
        $users23 = DB::table('user')
            ->whereIdAndAge(3, 20)
            ->get();
        $users24 = DB::table('user')
            ->whereIdOrAge(3, 20)
            ->get();
        $users25 = DB::table('user')
            ->orderBy('age', 'asc')
            ->get();
        $users26 = DB::table('user')
            ->orderBy('age', 'desc')
            ->get();
        $users27 = DB::table('user')
            ->latest('created_at')
            ->get();
        $users28 = DB::table('user')
            ->oldest('created_at')
            ->get();
        $users29 = DB::table('user')
            ->oldest('updated_at')
            ->get();
        $users29a = DB::table('user')
            ->oldest('updated_at')
            ->where('age', '>', 30)
            ->get();
        $users30 = DB::table('user')
            ->inRandomOrder()
            ->get();
        $users31 = DB::table('user')
            ->inRandomOrder()
            ->first();
        $users32 = DB::table('user')
            ->inRandomOrder()
            ->where('age', '>', 30)
            ->get();
        $users33 = DB::table('user')
            ->inRandomOrder()
            ->where('age', '>', 30)
            ->first();
        $users34 = DB::table('user')
            ->take(3)
            ->get();
        $users35 = DB::table('user')
            ->take(3)
            ->where('age', 30)
            ->get();
        $users36 = DB::table('user')
            ->skip(5)
            ->take(10)
            ->get();
        $users37 = DB::table('user')
            ->skip(3)
            ->take(10)
            ->where('age', 30)
            ->get();
        $changetable = DB::table('user')->insertGetId([
            'firstname' => 'page',
            'secondname' => 'slug',
        ]);
        $changetable1 = DB::table('user')->insertGetId([
            'firstname' => 'page',
            'secondname' => 'slug',
        ]);
        $changetable2 = DB::table('user')->insert([
            ['firstname' => 'page', 'secondname' => 'slug'],
            ['firstname' => 'page1', 'secondname' => 'slug1'],
            ['firstname' => 'page2', 'secondname' => 'slug2'],
        ]);
        $changetable3 = DB::table('user')->where('id', 5)->update([
            'firstname' => 'page',
            'secondname' => 'slug',
        ]);
        $changetable4 = DB::table('user')->where('age', 30)->update([
            'salary' => 500,
        ]);
        $changetable5 = DB::table('user')
            ->where('firstname', 'John')
            ->increment('age');
        $changetable6 = DB::table('user')
            ->where('firstname', 'John')
            ->decrement('age');
        $changetable7 = DB::table('user')
            ->where('age', 30)
            ->increment('salary', 100);
        $changetableid = DB::table('user')->where('id', $changetable)->first();
        /* $dropuserid = DB::table('user')
            ->where('id', 5)
            ->delete();
        $dropuserage = DB::table('user')
            ->where('age', 30)
            ->delete();
        $dropallusers = DB::table('user')->delete(); */
        $tableandtable = DB::table('user')
            ->leftJoin('cities', 'user.id', '=', 'cities.id')
            ->select('user.*', 'cities.city as city_name')
            ->get();
        return view('post.pshow', ['users' => $users, 'users2' => $users2, 'users3' => $users3, 'users4' => $users4, 'users5' => $users5, 'users6' => $users6, 'users7' => $users7, 'users8' => $users8, 'users9' => $users9, 'users10' => $users10, 'users11' => $users11, 'users12' => $users12, 'users13' => $users13, 'users14' => $users14, 'users15' => $users15, 'users16' => $users16, 'users17' => $users17, 'users18' => $users18, 'users19' => $users19, 'users20' => $users20, 'users21' => $users21, 'users22' => $users22, 'users23' => $users23, 'users24' => $users24, 'users25' => $users25, 'users26' => $users26, 'users27' => $users27, 'users28' => $users28, 'users29' => $users29, 'users29a' => $users29a, 'users30' => $users30, 'users31' => $users31, 'users32' => $users32, 'users33' => $users33, 'users34' => $users34, 'users35' => $users35, 'users36' => $users36, 'users37' => $users37, 'changetable' => $changetable, 'changetable1' => $changetableid, 'tableID' => $tableandtable]);

    }
}
