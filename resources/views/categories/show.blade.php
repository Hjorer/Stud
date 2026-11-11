@extends('layouts.layout')
@section('title')@parent :: {{ $category->title }}
@endsection
@section('content')
<div class="col-12">
    <h1 class="mb-4">{{ $category->title }}</h1>

    <div class="row product-cards mb-5">
        @forelse($products as $product)
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="product-card h-100 d-flex flex-column justify-content-between p-3 border rounded">
                <div>
                    <div class="offer mb-2" style="min-height: 28px;">
                        @if($product->hit)
                        <div class="offer-hit">Hit</div>
                        @endif
                        @if($product->sale)
                        <div class="offer-sale">Sale</div>
                        @endif
                    </div>

                    <div class="card-thumb text-center mb-3 d-flex align-items-center justify-content-center" style="height: 180px;">
                        <a href="{{ route('products.show', ['slug' => $product->slug]) }}">
                            <img src="{{ $product->getImage() }}" alt="{{ $product->title }}" class="img-fluid" style="max-height: 180px; object-fit: contain;">
                        </a>
                    </div>

                    <div class="card-title text-center mb-2" style="min-height: 48px; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                        <a href="{{ route('products.show', ['slug' => $product->slug]) }}" class="d-block">
                            {{ $product->title }}
                        </a>
                    </div>
                </div>

                <div>
                    <div class="card-price text-center my-2 d-flex flex-column justify-content-end" style="min-height: 46px;">
                        @if($product->old_price)
                        <del class="text-muted"><small>{{ $product->old_price }} руб.</small></del>
                        @endif
                        <strong class="d-block">{{ $product->price }} руб.</strong>
                    </div>

                    <form action="{{ route('cart.add') }}" method="post" class="addtocart">
                        @csrf
                        <div class="input-group">
                            <input type="number" class="form-control" name="qty" value="1" min="1" step="1" required>
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <div class="input-group-append">
                                <button class="btn btn-info btn-block card-addtocart" type="submit">
                                    <i class="fas fa-cart-arrow-down"></i> Купить
                                </button>
                            </div>
                        </div>
                    </form>

                    <div class="item-status mt-2 text-muted small">
                        <i class="{{ $product->status->icon }}"></i> {{ $product->status->title }}
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <p>В этой категории пока нет товаров.</p>
        </div>
        @endforelse
    </div>

    <div class="row">
        <div class="col-md-12">
            <nav aria-label="Page navigation example">
                {{ $products->links() }}
            </nav>
        </div>
    </div>
</div>
@endsection