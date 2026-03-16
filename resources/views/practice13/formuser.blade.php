<x-product>
    <form action="/users/store" method="POST">
        @csrf
            <label>Логин:</label>
            <input type="text" name="login" required value="{{ old('login') }}">
            <label>Пароль:</label>
            <input type="password" name="password" required>
        <button type="submit">Save</button>
</x-product>