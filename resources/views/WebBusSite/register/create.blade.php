@extends('WebBusSite.layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card card-body">
            <h4 class="card-title mb-4 text-center">Регистрация гостя</h4>
            <form action="/register" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Имя пользователя</label>
                    <input type="text" name="username" class="form-control" required value="{{ old('username') }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Пароль</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Подтверждение пароля</label>
                    <input type="password" name="password_confirmation" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success w-100">Зарегистрироваться</button>
            </form>
        </div>
    </div>
</div>
@endsection
