<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('WebBusSite.admin.index', compact('users'));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'role' => 'required|string|in:guest,dispatcher,admin',
        ]);

        User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'],
        ]);

        return redirect()->route('admin.index')->with('success', 'Пользователь успешно добавлен.');
    }
    public function updatePassword(Request $request, User $user)
    {
        $data = $request->validate([
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user->update([
            'password' => Hash::make($data['password']),
        ]);

        return redirect()->route('admin.index')->with('success', "Пароль пользователя {$user->username} успешно изменен.");
    }
    public function destroy(User $user)
    {
        if ($user->id === auth()->id()) {
            return redirect()->route('admin.index')->withErrors(['error' => 'Вы не можете удалить свою собственную учетную запись.']);
        }

        $user->delete();
        return redirect()->route('admin.index')->with('success', 'Пользователь успешно удален.');
    }
}
