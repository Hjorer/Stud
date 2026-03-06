<x-product>
    @foreach ($user as $users)
        <ul>{{ $users }}</ul>
    @endforeach
      <form action="{{ route('user.profile') }}" method="POST">
        @csrf
        <label for="id">ID</label>
        <input type="text" name="id" id="id">
        <label for="login">Login</label>
        <input type="text" name="login" id="login">
        <button type="submit">Save</button>
    </form>
</x-product>