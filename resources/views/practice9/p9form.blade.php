<x-product>
    <form action="/practice9/task2" method="POST">
        @csrf
        <label for="num1">Num1</label>
        <input type="text" name="num1" id="num1">
        <label for="num2">Num2</label>
        <input type="text" name="num2" id="num2">
        <label for="num3">Num3</label>
        <input type="text" name="num3" id="num3">
        <button type="submit">Save</button>
    </form>
    <form action="practice9/task3" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <label for="age">Age</label>
        <input type="text" name="age" id="age">
        <label for="salary">Salary</label>
        <input type="text" name="salary" id="salary">
        <button type="submit">Save</button>
    </form>
</x-product>