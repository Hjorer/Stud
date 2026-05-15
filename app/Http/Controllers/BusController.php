<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use Illuminate\Http\Request;

class BusController extends Controller
{
    public function index()
    {
        return redirect()->route('guest.index');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'registration_number' => 'required|string|max:50|unique:buses',
            'model' => 'required|string|max:100',
            'seat_count' => 'required|integer|min:1',
        ]);

        Bus::create($data);
        return redirect()->route('dispatcher.index')->with('success', 'Автобус успешно добавлен.');
    }

    public function edit(Bus $bus)
    {
        return view('WebBusSite.edit.bus', compact('bus'));
    }

    public function update(Request $request, Bus $bus)
    {
        $data = $request->validate([
            'registration_number' => 'required|string|max:50|unique:buses,registration_number,' . $bus->id,
            'model' => 'required|string|max:100',
            'seat_count' => 'required|integer|min:1',
        ]);

        $bus->update($data);
        return redirect()->route('dispatcher.index')->with('success', 'Автобус успешно обновлен.');
    }

    public function destroy(Bus $bus)
    {
        $bus->delete();
        return redirect()->route('dispatcher.index')->with('success', 'Автобус успешно удален.');
    }
}
