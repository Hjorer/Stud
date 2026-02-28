<x-product>
    <h1>{{ $article->title }}</h1> {{-- Выведет: Новости Сибири --}}

    <p>Опубликовано: {{ $article->published_at->format('d.m.Y H:i') }}</p>
    <p>Прошло времени: {{ $article->published_at->diffForHumans() }}</p>

    <div class="content">
        {{ $article->body }}
    </div>
</x-product>
