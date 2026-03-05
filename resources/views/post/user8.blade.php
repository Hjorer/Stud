<x-product>
    <p>Task 3 and 4</p>
        <table border="1">
        <thead>
            <tr>
                <td rowspan="2">ID</td>
                <td colspan="2">Users</td>
                <td colspan="3">Profile</td>
                <tr>
                    <td>Login</td>
                    <td>Password</td>
                    <td>Name</td>
                    <td>Surname</td>
                    <td>Email</td>
                </tr>
            </tr>
                
        </thead>
        <tbody>
            <tr>
                <td>{{ $z3->id }}</td>
                <td>{{ $z3->login }}</td>
                <td>{{ $z3->password }}</td>
                <td>{{ $z3->profiles8->name }}</td>
                <td>{{ $z3->profiles8->surname }}</td>
                <td>{{ $z3->profiles8->email }}</td>
            </tr>
        </tbody>
    </table>
    <p>Task 5</p>
    <table border="1">
        <thead>
            <tr>
                <td rowspan="2">ID</td>
                <td colspan="2">Users</td>
                <td colspan="3">Profile</td>
                <tr>
                    <td>Login</td>
                    <td>Password</td>
                    <td>Name</td>
                    <td>Surname</td>
                    <td>Email</td>
                </tr>
            </tr>
                
        </thead>
        <tbody>
            @foreach ($z5 as $z5a)
                <tr>
                    <td>{{ $z5a->id }}</td>
                    <td>{{ $z5a->login }}</td>
                    <td>{{ $z5a->password }}</td>
                    @foreach ($z5a->profiles as $z5b)
                        <td>{{ $z5b->name }}</td>
                        <td>{{ $z5b->surname }}</td>
                        <td>{{ $z5b->email }}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <p>Task 7</p>
    <table border="1">
        <thead>
            <tr>
                <td rowspan="2">ID</td>
                <td colspan="2">Users</td>
                <td colspan="3">Profile</td>
                <tr>
                    <td>Name</td>
                    <td>Surname</td>
                    <td>Email</td>
                    <td>Login</td>
                    <td>Password</td>
                </tr>
            </tr>
                
        </thead>
        <tbody>
            <tr>
                <td>{{ $z7->users->id }}</td>
                <td>{{ $z7->name }}</td>
                <td>{{ $z7->surname }}</td>
                <td>{{ $z7->email }}</td>
                <td>{{ $z7->users->login }}</td>
                <td>{{ $z7->users->password }}</td>
            </tr>
        </tbody>
    </table>
    <p>Task 8</p>
    
        <table border="1">
            <thead>
                <tr>
                    <th rowspan="2">ID</th>
                    <th colspan="3">User</th>
                    <th colspan="2">Profile</th>
                    <tr>
                        <td>Name</td>
                        <td>Surname</td>
                        <td>Email</td>
                        <td>Login</td>
                        <td>Password</td>
                    </tr>
                </tr>
            </thead>
            <tbody>
            @foreach ($z8 as $z8a)
                <tr>
                    <td>{{ $z8a->users->id }}</td>
                    <td>{{ $z8a->name }}</td>
                    <td>{{ $z8a->surname }}</td>
                    <td>{{ $z8a->email }}</td>
                    <td>{{ $z8a->users->password }}</td>
                    <td>{{ $z8a->users->login }}</td>
                    
                </tr>
            </tbody>
            @endforeach
        </table>
    <p>Task 11 and 12</p>
    @foreach ($z11a12 as $z11a12a)
        <div>
            <h2>{{ $z11a12a->name }}</h2>
        </div>
        <ul>
            @foreach ($z11a12a->cities as $city)
                <li>{{ $city->name }}</li>
            @endforeach
        </ul>
    @endforeach
    <p>Task 15</p>
    <table border="1">
        <thead>
            <tr>
                <td>ID</td>
                <td>Country</td>
                <td>City</td>
                <td>Population</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($z15 as $z15a)
                <tr>
                    @foreach ($z15a->city as $city)
                        <td>{{ $z15a->id }}</td>
                        <td>{{ $z15a->name }}</td>
                        <td>{{ $city->name }}</td>
                        <td>{{ $city->population }}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <p>Task 16</p>
    <table border="1">
        <thead>
            <tr>
                <td>ID</td>
                <td>Country</td>
                <td>City</td>
                <td>Population</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($z16 as $z16a)
                <tr>
                    <td>{{ $z16a->id }}</td>
                    <td>{{ $z16a->country->name }}</td>
                    <td>{{ $z16a->name }}</td>
                    <td>{{ $z16a->population }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p>Task 18-19</p>
    <table border="1">
        <thead>
            <tr>
                <td>ID</td>
                <td>City</td>
                <td>Country</td>
            </tr>
        </thead>
        <tbody>
                @foreach ($z17 as $z16a)
                    <tr>
                        <td>{{ $z16a->id }}</td>
                        <td>{{ $z16a->name }}</td>
                        <td>{{ $z16a->country->name }}</td>
                    </tr>
                @endforeach
        </tbody>
    </table>
    
    <p>Task 20</p>
    <table border="1">
        <thead>
            <tr>
                <td>ID</td>
                <td>Country</td>
                <td>City</td>
                <td>Population</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($z20 as $z20a)
                <tr>
                    <td>{{ $z20a->id }}</td>
                    <td>{{ $z20a->country->name }}</td>
                    <td>{{ $z20a->name }}</td>
                    <td>{{ $z20a->population }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p>Task 24</p>
    <table border="1">
        <thead>
            <tr>
                <td>ID</td>
                <td>User</td>
                <td>Position</td>
                <td>City</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($z24 as $z24a)
                <tr>
                    <td>{{ $z24a->id }}</td>
                    <td>{{ $z24a->name }}</td>
                    <td>{{ $z24a->position->name }}</td>
                    <td>{{ $z24a->ucity->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p>Task  26</p>
    <table border="1">
        <thead>
            <tr>
                <td>ID</td>
                <td>User</td>
                <td>Roles</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($z24 as $z24a)
                <tr>
                    <td>{{ $z24a->id }}</td>
                    <td>{{ $z24a->name }}</td>
                    @foreach ($z24a->roles as $z24b)<td>{{ implode(',',$z24b->name )}}</td>@endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
    <p>Task  27</p>
    <table border="1">
        <thead>
            <tr>
                <td>ID</td>
                <td>Roles</td>
                <td>User</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($z27 as $z27a)
                <tr>
                    <td>{{ $z27a->id }}</td>
                    <td>{{ implode(',',$z27a->name) }}</td>
                    @foreach($z27a->users as $user)<td>{{ $user->name }}</td>@endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
    <p>Task  29</p>
    <table border="1">
    <thead>
        <tr>
            <td>ID</td>
            <td>User</td>
            <td>Position</td>
            <td>City</td>
            <td>Roles</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($z24 as $z24a)
            <tr>
                <td>{{ $z24a->id }}</td>
                <td>{{ $z24a->name }}</td>
                <td>{{ $z24a->position->name }}</td>
                <td>{{ $z24a->ucity->name }}</td>
                <td>
                    @foreach ($z24a->roles as $z24b)
                        {{ implode(', ', $z24b->name) }}
                    @endforeach
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</x-product>