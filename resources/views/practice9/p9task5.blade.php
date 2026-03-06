<x-product>
    @foreach ($task5 as $t5)
        <ul>{{ $t5 }}</ul>
    @endforeach
    <form action="/practice9/task6" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <label for="surname">Surname</label>
        <input type="text" name="surname" id="surname">
        <label for="login">Login</label>
        <input type="text" name="login" id="login">
        <label for="password">Password</label>
        <input type="text" name="password" id="password">
        <button type="submit">Save</button>
    </form>
</x-product>