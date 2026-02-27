<x-product>
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
</x-product>