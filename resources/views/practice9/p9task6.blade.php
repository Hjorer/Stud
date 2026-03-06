<x-product>
    <p>User:@foreach ($user as $users){{ $users }}@endforeach</p>
    <form action="/practice9/task7" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <label for="surname">Surname</label>
        <input type="text" name="surname" id="surname">
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <label for="login">Login</label>
        <input type="text" name="login" id="login">
        <label for="password">Password</label>
        <input type="text" name="password" id="password">
        <button type="submit">Save</button>
    </form>
</x-product>