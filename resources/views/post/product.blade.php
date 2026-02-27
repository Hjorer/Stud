<x-product>
    @foreach ($dropusers as $dropuser)
        {{ $dropuser }}
    @endforeach
    @foreach ($dropids as $dropid)
        {{ $dropid }}
    @endforeach
    <p>{{ $dropidss }}</p>
    <form action="{{ route("product.store") }}" method="POST">
        @csrf
        <input type="text" name="name" id="">
        <input type="number" name="price" id="">
        <input type="number" name="quantity" id="">
        <button type="submit">Save</button>
    </form>
    @foreach ($dropusers as $item)
    <div>
        {{ $item->name }}
        <form action="{{ route('product.drop', $item->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Удалить</button>
        </form>
    </div>
@endforeach
@foreach ($elevenz1 as $eleven)
    {{ $eleven }}
@endforeach
<p>Z1</p>
@foreach ($sort as $sorts)
    {{ $sorts }}
@endforeach
<p>Z2</p>
@foreach ($sort1 as $sorts)
    {{ $sorts }}
@endforeach
<p>Z3</p>
@foreach ($lever as $products)
    {{ $products }} 
@endforeach
</x-product>