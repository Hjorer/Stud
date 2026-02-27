<x-product>
    <p>Zadanie 7/1</p>
    @foreach ($z7and1 as $a)
        {{ $a }}
    @endforeach
    <p>Zadanie 7/2</p>
    @foreach ($z7and2 as $d)
        {{ $d }}
    @endforeach
    <p>Zadanie 7/3</p>
    <p>{{ $z7and3 }}</p>
    <P>Zadanie 7/4</P>
    @foreach($z7and4 as $D)
    {{ $d }}
    @endforeach
    <p>Zadanie 8</p>
    <form action="{{ route("product.store") }}" method="POST">
        @csrf
        <input type="text" name="name" id="">
        <input type="number" name="price" id="">
        <input type="number" name="quantity" id="">
        <button type="submit">Save</button>
    </form>
<p>Zadanie 9</p>
@foreach ($znine as $e)
    {{ $e }}
@endforeach
<p>Zadanie 11</p>
@foreach ($z11 as $s)
    {{ $s }}
@endforeach
<p>Zadanie13/1</p>
@foreach ($z13and1 as $s)
    {{ $s }}
@endforeach
<p>Zadanie13/2</p>
@foreach ($z13and2 as $p)
    {{ $p }} 
@endforeach
<p>Zadanie13/3</p>
@foreach ($z15 as $p)
    {{ $p }} 
@endforeach
<p>Zadanie16/1</p>
<p>{{$z16and1}}</p>
<p>Zadanie16/2</p>
<p>{{$z16and2}}</p>
<p>Zadanie16/3/1</p>
<p>{{$z16and3a1}}</p>
<p>Zadanie16/3/2</p>
<p>{{$z16and3a2}}</p>
<p>Zadanie16/4</p>
<p>{{$z16and4}}</p>
<p>Zadanie17</p>
<p>{{$z17}}</p>
<p>Zadanie18</p>
<p>{{$z18}}</p>
</x-product>