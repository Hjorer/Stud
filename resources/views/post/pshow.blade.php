<x-show>
    <x-slot:title>
        </x-slot>
        <table>
            <tr>
                @foreach ($users as $user)
                    <td>{{ $user->firstname }}</td>
                    <td>{{ $user->user_email }}</td>
                @endforeach

            </tr>
        </table>
        <ul>{{ $users2 }}</ul>
        <ul>{{ $users3 }}</ul>
        <ul>{{ $users4 }}</ul>
        <ul>{{ $users5 }}</ul>
        <ul>{{ $users6 }}</ul>
        <ul>{{ $users7 }}</ul>
        <ul>{{ $users8 }}</ul>
        <ul>{{ $users9 }}</ul>
        <ul>{{ $users10 }}</ul>
        <ul>{{ $users11 }}</ul>
        <ul>{{ $users12 }}</ul>
        <ul>{{ $users13->id }}</ul>
        <ul>{{ $users13->firstname }}</ul>
        <ul>{{ $users13->age }}</ul>
        <ul>{{ $users13->email }}</ul>
        <p>{{ $users14 }}</p>
        @foreach ($users15 as $user)
            <ul>{{ $user }}</ul>
        @endforeach
        <table>
            <tr>
                @foreach ($users16 as $user)
                    <td>{{ $user->firstname }}</td>
                    <td>{{ $user->age }}</td>
                @endforeach
            </tr>
        </table>
        <table>
            <tr>
                @foreach ($users17 as $user)
                    <td>{{ $user->firstname }}</td>
                    <td>{{ $user->age }}</td>
                @endforeach
            </tr>
        </table>
        <table>
            <tr>
                @foreach ($users18 as $user)
                    <td>{{ $user->firstname }}</td>
                    <td>{{ $user->age }}</td>
                @endforeach
            </tr>
        </table>
        <table>
            <tr>
                @foreach ($users19 as $user)
                    <td>{{ $user->firstname }}</td>
                    <td>{{ $user->age }}</td>
                @endforeach
            </tr>
        </table>
        <table>
            <tr>
                @foreach ($users20 as $user)
                    <td>{{ $user->id }}</td>
                @endforeach
            </tr>
        </table>
        <table>
            <tr>
                @foreach ($users21 as $user)
                    <td>{{ $user->firstname }}</td>
                @endforeach
            </tr>
        </table>
        <table>
            <tr>
                @foreach ($users22 as $user)
                    <td>{{ $user->email }}</td>
                @endforeach
            </tr>
        </table>
        <table>
            <tr>
                @foreach ($users23 as $user)
                    <td>{{ $user->firstname }}</td>
                @endforeach
            </tr>
        </table>
        <table>
            <tr>
                @foreach ($users24 as $user)
                    <td>{{ $user->firstname }}</td>
                @endforeach
            </tr>
        </table>
        <table>
            <tr>
                @foreach ($users25 as $user)
                    <td>{{ $user->firstname }}</td>
                @endforeach
            </tr>
        </table>
        <table>
            <tr>
                @foreach ($users26 as $user)
                    <td>{{ $user->firstname }}</td>
                @endforeach
            </tr>
        </table>
        <table>
            <tr>
                @foreach ($users27 as $user)
                    <td>{{ $user->firstname }}</td>
                @endforeach
            </tr>
        </table>
        <table>
            <tr>
                @foreach ($users28 as $user)
                    <td>{{ $user->firstname }}</td>
                @endforeach
            </tr>
        </table>
        <table>
            <tr>
                @foreach ($users29 as $user)
                    <td>{{ $user->firstname }}</td>
                @endforeach
            </tr>
        </table>
        <table>
            <tr>
                @foreach ($users29a as $user)
                    <td>{{ $user->firstname }}</td>
                @endforeach
            </tr>
        </table>
        <table>
            <tr>
                @foreach ($users30 as $user)
                    <td>{{ $user->firstname }}</td>
                @endforeach
            </tr>
        </table>
        <table>
            <tr>
                @foreach ($users31 as $user)
                    <td>{{ $user }}</td>
                @endforeach
            </tr>
        </table>
        <table>
            <tr>
                @foreach ($users32 as $user)
                    <td>{{ $user->firstname }}</td>
                @endforeach
            </tr>
        </table>
        <table>
            <tr>
                @foreach ($users33 as $user33)
                    <td>{{ $user33 }}</td>
                @endforeach
            </tr>
        </table>
        <table>
            <tr>
                @foreach ($users34 as $user34)
                    <td>{{ $user34->firstname }}</td>
                @endforeach
            </tr>
        </table>
        <table>
            <tr>
                @foreach ($users35 as $user35)
                    <td>{{ $user35->firstname }}</td>
                @endforeach
            </tr>
        </table>
        <table>
            <tr>
                @foreach ($users36 as $user36)
                    <td>{{ $user36->firstname }}</td>
                @endforeach
            </tr>
        </table>
        <table>
            <tr>
                @foreach ($users37 as $user37)
                    <td>{{ $user37->firstname }}</td>
                @endforeach
            </tr>
        </table>
        <ul>{{ $changetable }}</ul>
        <ul>{{ $changetable1->id }}</ul>
</x-show>