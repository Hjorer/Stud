<x-product>
    <form action="{{ url('/check-number') }}" method="POST">
    @csrf
    <label>Введите число от 1 до 10:</label>
    <input type="number" name="num" required>
    <button type="submit">Проверить</button>
</form>
</x-product>