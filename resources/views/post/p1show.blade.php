<x-show>
    <x-slot:title>
        </x-slot>
        <table>
            <tr>
                @foreach ($users2 as $user2)
                    <td>{{ $user2->id }}</td>
                    <td>{{ $user2->secondname }}</td>
                    <td>{{ $user2->age }}</td>
                    <td>{{ $user2->firstname }}</td>
                @endforeach

            </tr>
        </table>
</x-show>