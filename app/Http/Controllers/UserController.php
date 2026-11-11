<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Отображение страницы с формой регистрации нового пользователя.
     */
    public function create()
    {
        return view('register.create');
    }

    /**
     * Валидация данных и сохранение нового пользователя в базу данных.
     */
    public function store(Request $request)
    {
        // Проверка корректности введенных данных
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);

        // Создание записи пользователя в БД с хэшированием пароля
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Запись сообщения об успехе в сессию и автоматический вход в аккаунт
        session()->flash('success', 'Регистрация пройдена');
        Auth::login($user);

        return redirect()->route('home');
    }

    /**
     * Отображение страницы с формой авторизации (входа).
     */
    public function loginForm()
    {
        return view('login.create');
    }

    /**
     * Проверка учетных данных и авторизация пользователя в системе.
     */
    public function login(Request $request)
    {
        // Валидация полей email и пароля
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Попытка аутентификации пользователя по введенным данным
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            // Регенерация идентификатора сессии для защиты от фиксации сессии
            $request->session()->regenerate();
            session()->flash('success', 'Вы успешно авторизовались');

            // Если пользователь является администратором — перенаправляем в админ-панель
            if (Auth::user()->is_admin) {
                return redirect()->route('admin.index');
            }

            // Обычного пользователя отправляем на главную страницу сайта
            return redirect()->route('home');
        }

        // Возврат назад на форму входа с сообщением об ошибке
        return redirect()->back()->with('error', 'Неверный логин или пароль');
    }

    /**
     * Выход пользователя из учетной записи и очистка сессии.
     */
    public function logout(Request $request)
    {
        Auth::logout();

        // Аннулирование текущей сессии и обновление CSRF-токена
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login.create');
    }
}
