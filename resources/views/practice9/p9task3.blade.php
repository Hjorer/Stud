<x-product>
    <p>User:@foreach ($user as $users) {{ $users }} @endforeach</p>
    <form action="/practice9/task4" method="POST">
        @csrf
        <label for="country">Country</label>
        <input type="text" name="country" id="country">
        <label for="city">City</label>
        <input type="text" name="city" id="city">
        <button type="submit">Save</button>
    </form>
</x-product>