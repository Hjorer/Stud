@extends('layouts.layout')

@section('title', 'Laravel Shop :: Home')

@section('content')
  <div class="container my-5">
    <div class="row product-cards mb-5">
      <div class="col-md-4 col-sm-6 mb-4">

        <div class="product-card border p-3 h-100 position-relative">
          <div class="offer">
            <div class="offer-hit">Hit</div>
            <div class="offer-sale">Sale</div>
          </div>

          <div class="card-thumb text-center">
            <a href="product.html">
              <img src="{{ asset('assets/front/img/1.jpg') }}" class="img-fluid" alt="">
            </a>
          </div>

          <div class="card-caption mt-3">
            <div class="card-title font-weight-bold">
              <a href="product.html">CORT AD810M Акустическая гитара</a>
            </div>

            <div class="card-price text-center my-2">
              <del class="text-muted">3 142 руб.</del>
              <div class="h5 text-danger font-weight-bold">2 799 руб.</div>
            </div>

            <button type="button" class="btn btn-info btn-block card-addtocart">
              <i class="fas fa-cart-arrow-down"></i> Купить
            </button>

            <div class="item-status mt-2 text-center">
              <i class="fas fa-check text-success"></i> В наличии
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>


  <nav aria-label="Page navigation example">
    <ul class="pagination">
      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
  </nav>
@endsection