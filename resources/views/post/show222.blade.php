<x-show222>
    <p>Zadanie1</p>
    <table>
        <td>
            @foreach ($users as $user)
                <tr>{{ $user }}</tr>
            @endforeach
        </td>
    </table>
    <p>Zadanie2</p>
    @foreach ($users2 as $user211)
        {{ $user211 }}
    @endforeach

    <p>Zadanie3</p>
    @foreach ($users3 as $user311)
        {{ $user311 }}
    @endforeach
    <p>Zadanie4</p>
    @foreach ($users4 as $user411)
        {{ $user411 }}
    @endforeach
    <p>Zadanie5</p>
    @foreach ($users5 as $user511)
        {{ $user511 }}
    @endforeach
    <p>Zadanie6</p>
    @foreach ($users6 as $users611)
        <p>{{ $users611 }}</p>
    @endforeach
    <p>Zadanie7</p>
    @foreach ($users7 as $users711)
        <h1>{{ $users711 }}</h1>
    @endforeach
    <p>Zadanie8</p>
    @foreach ($users8 as $users811)
        <h1>{{ $users811 }}</h1>
    @endforeach
    <p>Zadanie</p>
</x-show222>