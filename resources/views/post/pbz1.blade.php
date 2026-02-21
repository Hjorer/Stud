<x-cbz1>
    <p class="{{ $class }}">{{ $name }}</p>
    <p style="{{ $style }}">{{ $age }}</p>
    <p>{{ $salary }}</p>
    <input type="text" value="{{ $one }}">
    <input type="text" value="{{ $two }}">
    <input type="text" value="{{ $three }}">
    <p style="{{ $style }}">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt accusamus laborum itaque
        deserunt voluptas odit optio, maiores, nulla, nesciunt vitae aperiam eveniet id error mollitia esse. Ad vitae
        accusamus praesentium.</p>
    <a href="{{ $href }}">{{ $text }}</a>
    <h1>Date:{{ $date }}</h1>
    <p>{{ $worker['name'] }} {{ $worker['age'] }} {{ $worker['salary'] }}</p>
    <p>{{ count($worker) }}</p>
    <p>{{ $city['1'] ?? 'Moscow' }} {{ $city['2'] ?? 'Moscow' }} {{ $city['3'] ?? 'Moscow' }}
        {{ $city['4'] ?? 'Moscow' }}
    </p>
    <p>{{ $location['city']['1'] }} {{ $location['country']['1'] }}</p>
    <p>{{ $location['city']['2'] }} {{ $location['country']['2'] }}</p>
    <p>{{ $location['city']['3'] }} {{ $location['country']['3'] }}</p>
    <p>{{ $location['city']['4'] ?? 'Moscow' }} {{ $location['country']['4'] ?? 'Russia' }}</p>
    <p>{{ $dates['year']['1'] . '-' . $dates['month']['1'] . '-' . $dates['day']['1'] }}</p>
    <p>{{ $dates['year']['2'] . '-' . $dates['month']['2'] . '-' . $dates['day']['2'] }}</p>
    <p>
        {{ data_get($dates, 'year.3', date('Y')) }}-{{ data_get($dates, 'month.3', date('m')) }}-{{ data_get($dates, 'day.3', date('d')) }}
    </p>
    {!! $str !!}
    {{-- XAXAXAXAXAXAXAXA --}}
    @if ($is18)
        Welcome
    @elseif($ages = 18)
        Okay
    @else
        Bye bye
    @endif
    @unless ($is18)
        Вам пока не 18
    @endunless
    @if (count($arr) >= 1)
        {{ array_sum($arr) }}
    @else
        в массиве нет чисел
    @endif
    @foreach ($arr as $elem)
        <ul>{{ $elem }}</ul>
    @endforeach
    @foreach ($arr as $elem)
        <ul>{{ $elem ** 2 }}</ul>
    @endforeach
    @foreach ($arr as $elem)
        <ul>{{ sqrt($elem) }}</ul>
    @endforeach
    @foreach ($city as $key => $elem)
        {{ $key + 1 }} {{ $elem }}
    @endforeach
    @foreach ($city as $key => $elem)
        {{ $key }} {{ $elem }}
    @endforeach
    <ul>
        @foreach ($arr as $elem)
            @if ($elem > 0)
                <li>{{ $elem }}</li>
            @endif
        @endforeach
    </ul>
    @if(is_array($datas))
        <ul>
            @foreach($datas as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    @else
        <p>{{ $datas }}</p>
    @endif
    @foreach ($arr1 as $subArr)
        <table border="1">
            <tr>
                @foreach ($subArr as $elem)
                    <td>{{ $elem }}</td>
                @endforeach
            </tr>
        </table>
    @endforeach
    @foreach ($employees as $employee)
        <ul>{{ $employee['name'] }}</ul>
        <ul>{{ $employee['surname'] }}</ul>
        <ul>{{ $employee['salary'] }}</ul>
    @endforeach
    @foreach ($employees as $employee)
        <table border="1">
            <tr>
                <td>{{ $employee['name'] }}</td>
                <td>{{ $employee['surname'] }}</td>
                <td>{{ $employee['salary'] }}</td>
            </tr>
        </table>
    @endforeach
    @forelse ($users as $elem)
        <p style="@if ($loop->first){!! $first !!}@endif

                                                                @if ($loop->last)
                                                                    {!! $last !!}
                                                                @endif
                                                                ">{{ $elem }}</p>
    @empty
        <p>в массиве нет элементов</p>
    @endforelse
    @foreach ($users as $elem)

        <ul>{{ $loop->index + 1 }}
            {{ $elem }}
        </ul>
    @endforeach
    @foreach ($arr as $arrs)
        @if ($loop->remaining < 3)
            <i>{{ $arrs }}</i>
        @else
            <b>{{ $arrs }}</b>
        @endif
    @endforeach
    @foreach ($arr as $elem)
        {{ $elem }}

        @break($elem >= 0)
    @endforeach
    @foreach ($arr as $elem)
        @continue($elem <= 0)
        <ul>{{ $elem }}</ul>
    @endforeach
    @for ($i = 1; $i < 11; $i++)
        <p>{{ $i }}</p>
    @endfor
    @php
        echo 123;
    @endphp
    @foreach ($links as $link)
        <li>
            <ul><a href="{{ $link['href'] }}">{{ $link['text'] }}</a></ul>
        </li>
    @endforeach
    <table border="1">
        <tr>
            @foreach (array_keys($femployees[0]) as $key)
                <th>{{ $key }}</th>
            @endforeach
        </tr>
        @foreach ($femployees as $employee)


            <tr>
                <td>{{ $employee['name'] }}</td>
                <td>{{ $employee['surname'] }}</td>
                <td>{{ $employee['salary'] }}</td>
            </tr>
        @endforeach
    </table>
    <table border="1">
        <tr>
            @foreach (array_keys($fusers[0]) as $key)
                <th>{{ $key }}</th>
            @endforeach
        </tr>
        @foreach ($fusers as $employee)


            <tr style="@if($employee['banned'])
                color:red
            @else
                     color:green
                @endif
                        ">
                <td>{{ $employee['name'] }}</td>
                <td>{{ $employee['surname'] }}</td>
                <td>
                    @if($employee['banned'])
                        banned
                    @else
                        activity
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
    @foreach ($arr as $arrs)
        <input value="{{ $arrs }}">
    @endforeach

    <form action="">
        <label for="">select</label>
        <select name="arr" id="">
            @foreach ($arr as $arrs)<option value="{{ $arrs }}">{{ $arrs }}</option> @endforeach
        </select>
    </form>
    <ul>
        @foreach ($days as $day)
            <li class="{{ $day == $currentDay ? 'active' : '' }}">
                {{ $day }}
            </li>
        @endforeach
    </ul>

</x-cbz1>