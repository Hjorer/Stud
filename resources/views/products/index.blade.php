@extends('layouts.layout')
@section('title')@parent :: {{ $title }}
@endsection
@section('content')
<div class="col-12">
  <div class="row product-cards mb-5">
    @foreach($products as $product)
    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
      <div class="product-card h-100 d-flex flex-column justify-content-between p-3 border rounded">
        <div>
          <div class="offer">
            @if($product->hit)
            <div class="offer-hit">Hit</div>
            @endif
            @if($product->sale)
            <div class="offer-sale">Sale</div>
            @endif
          </div>
          <div class="card-thumb text-center mb-2">
            <a href="{{ route('products.show', ['slug' => $product->slug]) }}">
              <img src="{{ $product->getImage() }}" alt="" class="img-fluid" style="max-height: 200px; object-fit: contain;">
            </a>
          </div>
          <div class="card-caption">
            <div class="card-title">
              <a href="{{ route('products.show', ['slug' => $product->slug]) }}">{{ $product->title }}</a>
            </div>
            <div class="card-price text-center my-2">
              @if($product->old_price)
              <del><small>{{ $product->old_price }} руб.</small></del>
              @endif
              <strong>{{ $product->price }} руб.</strong>
            </div>
          </div>
        </div>

        <div>
          <form action="{{ route('cart.add') }}" method="post" class="addtocart">
            @csrf
            <div class="input-group">
              <input type="text" class="form-control" name="qty" value="1">
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
    @endforeach
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