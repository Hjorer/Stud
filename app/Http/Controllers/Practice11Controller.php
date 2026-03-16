<?
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class Practice11Controller extends Controller
{
    public function set(Request $request)
    {
        $count = (int)$request->cookie('counter', 0) + 1;
        $lastVisit = now()->format('H:i:s d-m-Y');
        $userAgent = $request->header('User-Agent');
        Cookie::queue('counter', $count, 60);             
        Cookie::queue('last_visit', $lastVisit, 60);      
        Cookie::queue('browser_info', $userAgent, 60);    
        return "Данные обновлены! <br> 
                Визитов: $count <br> 
                Последний раз был: $lastVisit";
    }

    public function get(Request $request)
    {
        return [
            'counter' => $request->cookie('counter'),
            'last_visit' => $request->cookie('last_visit'),
            'browser' => $request->cookie('browser_info'),
        ];
    }
}
