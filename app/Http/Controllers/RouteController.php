<?php

namespace App\Http\Controllers;

use App\Models\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index()
    {
        return redirect()->route('guest.index');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'route_number' => 'required|string|max:50|unique:routes',
            'start_stop' => 'required|string|max:255',
            'end_stop' => 'required|string|max:255',
            'ticket_price' => 'required|numeric|min:0',
        ]);

        Route::create($data);
        return redirect()->route('dispatcher.index')->with('success', 'Маршрут успешно добавлен.');
    }

    public function edit(Route $route)
    {
        return view('WebBusSite.edit.route', compact('route'));
    }

    public function update(Request $request, Route $route)
    {
        $data = $request->validate([
            'route_number' => 'required|string|max:50|unique:routes,route_number,' . $route->id,
            'start_stop' => 'required|string|max:255',
            'end_stop' => 'required|string|max:255',
            'ticket_price' => 'required|numeric|min:0',
        ]);

        $route->update($data);
        return redirect()->route('dispatcher.index')->with('success', 'Маршрут успешно обновлен.');
    }

    public function destroy(Route $route)
    {
        $route->delete();
        return redirect()->route('dispatcher.index')->with('success', 'Маршрут успешно удален.');
    }
}
