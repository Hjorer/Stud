<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DBController extends Controller
{
    public function show()
    {
        $user = DB::table('userss')->get();
        return $user;
    }
    public function show1()
    {
        $users1 = DB::table('userss')->get();

        foreach ($users1 as $user1) {
            return $user1;
        }
    }
    public function show2()
    {
        $users2 = DB::table('userss')->where('age', 30)->get();
        $users3 = DB::table('userss')->where('age', 30)->get();
        $users4 = DB::table('userss')->where('age', '!=', 30)->get();
        $users5 = DB::table('userss')->where('age', '>', 30)->get();
        $users6 = DB::table('userss')->where('age', '<', 30)->get();
        $users7 = DB::table('userss')->where('age', '<=', 30)->get();
        $users8 = DB::table('userss')->where('age', '<=', 30)->orwhere('age', '>=', 20)->get();
        $users9 = DB::table('userss')->where('age', '<=', 30)->orwhere('id', '>=', 4)->get();
        $users10 = DB::table('userss')->where('age', '<=', 30)->orwhere('id', '>=', 4)->orWhere('salary', 500)->get();
        $users11 = DB::table('userss')->where('salary', 500)->orwhere(function ($query) {
            $query->where('age', '>', 20)->where('age', '<', 30);
        })->get();
        $users12 = DB::table('userss')->where('age', '>', 20)->orwhere(function ($query) {
            $query->where('age', '>', 20)->where('age', '<', 30);
        })->orwhere(function ($query) {
            $query->where('salary', '>', 400)->where('salary', '<', 800);
        })->get();
        $users13 = DB::table('userss')->where('id', 3)->first();
        $users = DB::table('userss')->select('firstname', 'email as user_email')->get();
        $users14 = DB::table('userss')->where('id', '3')->value('email');
        $users15 = DB::table('userss')->pluck('firstname');
        $users16 = DB::table('userss')
            ->whereBetween('age', [30, 40])
            ->get();
        $users17 = DB::table('userss')
            ->whereNotBetween('age', [30, 40])
            ->get();
        $users18 = DB::table('userss')
            ->whereIn('id', [1, 2, 3, 5])
            ->whereNotNull('updated_at')
            ->whereNull('updated_at')
            ->get();
        $users19 = DB::table('userss')
            ->whereNotIn('id', [1, 2, 3, 5])
            ->get();
        $users20 = DB::table('userss')
            ->whereId(3)
            ->get();
        $users21 = DB::table('userss')
            ->wherefirstname('John')
            ->get();
        $users22 = DB::table('userss')
            ->whereemail('john@mail.com')
            ->get();
        $users23 = DB::table('userss')
            ->whereIdAndAge(3, 20)
            ->get();
        $users24 = DB::table('userss')
            ->whereIdOrAge(3, 20)
            ->get();
        $users25 = DB::table('userss')
            ->orderBy('age', 'asc')
            ->get();
        $users26 = DB::table('userss')
            ->orderBy('age', 'desc')
            ->get();
        $users27 = DB::table('userss')
            ->latest('created_at')
            ->get();
        $users28 = DB::table('userss')
            ->oldest('created_at')
            ->get();
        $users29 = DB::table('userss')
            ->oldest('updated_at')
            ->get();
        $users29a = DB::table('userss')
            ->oldest('updated_at')
            ->where('age', '>', 30)
            ->get();
        $users30 = DB::table('userss')
            ->inRandomOrder()
            ->get();
        $users31 = DB::table('userss')
            ->inRandomOrder()
            ->first();
        $users32 = DB::table('userss')
            ->inRandomOrder()
            ->where('age', '>', 30)
            ->get();
        $users33 = DB::table('userss')
            ->inRandomOrder()
            ->where('age', '>', 30)
            ->first();
        $users34 = DB::table('userss')
            ->take(3)
            ->get();
        $users35 = DB::table('userss')
            ->take(3)
            ->where('age', 30)
            ->get();
        $users36 = DB::table('userss')
            ->skip(5)
            ->take(10)
            ->get();
        $users37 = DB::table('userss')
            ->skip(3)
            ->take(10)
            ->where('age', 30)
            ->get();
        $changetable = DB::table('userss')->insertGetId([
            'firstname' => 'page',
            'secondname' => 'slug',
        ]);
        $changetable1 = DB::table('userss')->insertGetId([
            'firstname' => 'page',
            'secondname' => 'slug',
        ]);
        $changetable2 = DB::table('userss')->insert([
            ['firstname' => 'page', 'secondname' => 'slug'],
            ['firstname' => 'page1', 'secondname' => 'slug1'],
            ['firstname' => 'page2', 'secondname' => 'slug2'],
        ]);
        $changetable3 = DB::table('userss')->where('id', 5)->update([
            'firstname' => 'page',
            'secondname' => 'slug',
        ]);
        $changetable4 = DB::table('userss')->where('age', 30)->update([
            'salary' => 500,
        ]);
        $changetable5 = DB::table('userss')
            ->where('firstname', 'John')
            ->increment('age');
        $changetable6 = DB::table('userss')
            ->where('firstname', 'John')
            ->decrement('age');
        $changetable7 = DB::table('userss')
            ->where('age', 30)
            ->increment('salary', 100);
        $changetableid = DB::table('userss')->where('id', $changetable)->first();
        /* $dropuserid = DB::table('userss')
            ->where('id', 5)
            ->delete();
        $dropuserage = DB::table('userss')
            ->where('age', 30)
            ->delete();
        $dropallusers = DB::table('userss')->delete(); */
        $tableandtable = DB::table('userss')
            ->leftJoin('cities', 'userss.id', '=', 'cities.id')
            ->select('userss.*', 'cities.city as city_name')
            ->get();
        return view('post.pshow', ['users' => $users, 'users2' => $users2, 'users3' => $users3, 'users4' => $users4, 'users5' => $users5, 'users6' => $users6, 'users7' => $users7, 'users8' => $users8, 'users9' => $users9, 'users10' => $users10, 'users11' => $users11, 'users12' => $users12, 'users13' => $users13, 'users14' => $users14, 'users15' => $users15, 'users16' => $users16, 'users17' => $users17, 'users18' => $users18, 'users19' => $users19, 'users20' => $users20, 'users21' => $users21, 'users22' => $users22, 'users23' => $users23, 'users24' => $users24, 'users25' => $users25, 'users26' => $users26, 'users27' => $users27, 'users28' => $users28, 'users29' => $users29, 'users29a' => $users29a, 'users30' => $users30, 'users31' => $users31, 'users32' => $users32, 'users33' => $users33, 'users34' => $users34, 'users35' => $users35, 'users36' => $users36, 'users37' => $users37, 'changetable' => $changetable, 'changetable1' => $changetableid, 'tableID' => $tableandtable]);

    }
}
