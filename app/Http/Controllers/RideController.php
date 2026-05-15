<?php

namespace App\Http\Controllers;

use App\Models\Ride;
use App\Models\Bus;
use App\Models\Route as BusRoute;
use Illuminate\Http\Request;

class RideController extends Controller
{
    public function index()
    {
        return redirect()->route('guest.index');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'ride_number' => 'required|string|max:50|unique:rides',
            'bus_id' => 'required|exists:buses,id',
            'route_id' => 'required|exists:routes,id',
            'arrival_start' => 'required|date',
            'arrival_end' => 'required|date|after:arrival_start',
        ]);

        Ride::create($data);
        return redirect()->route('dispatcher.index')->with('success', 'Рейс успешно добавлен.');
    }

    public function edit(Ride $ride)
    {
        $buses = Bus::all();
        $routes = BusRoute::all();
        return view('WebBusSite.edit.ride', compact('ride', 'buses', 'routes'));
    }

    public function update(Request $request, Ride $ride)
    {
        $data = $request->validate([
            'ride_number' => 'required|string|max:50|unique:rides,ride_number,' . $ride->id,
            'bus_id' => 'required|exists:buses,id',
            'route_id' => 'required|exists:routes,id',
            'arrival_start' => 'required|date',
            'arrival_end' => 'required|date|after:arrival_start',
        ]);

        $ride->update($data);
        return redirect()->route('dispatcher.index')->with('success', 'Рейс успешно обновлен.');
    }

    public function destroy(Ride $ride)
    {
        $ride->delete();
        return redirect()->route('dispatcher.index')->with('success', 'Рейс успешно удален.');
    }
}
