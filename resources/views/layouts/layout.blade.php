<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('assets/front/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/front/css/main.css') }}">
  <title>@yield('title', 'Laravel Shop')</title>
</head>


<body>


  @include('layouts.navbar')
  <div class="wrapper mt-5">
    <div class="container">
      <div class="row">

        @yield('content')

      </div><!-- /row -->
    </div><!-- /container -->
  </div><!-- /wrapper -->

  <!-- Modal -->
  <div class="modal fade cart-modal" id="cart-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Корзина</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

        </div>
        <!-- Modal -->
        <div class="modal fade cart-modal" id="cart-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Корзина</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button"
                  class="btn btn-primary btn-cart @if(empty(session('cart'))) d-none @endif">Оформить заказ</button>
                <button type="button" onclick="clearCart('{{ route('cart.clear') }}')"
                  class="btn btn-danger btn-cart @if(empty(session('cart'))) d-none @endif">Очистить корзину</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('assets/front/js/jquery-3.6.0.js') }}"></script>
  <script src="{{ asset('assets/front/js/bootstrap.bundle.js') }}"></script>
  <script src="{{ asset('assets/front/js/main.js') }}"></script>

</body>

</html>