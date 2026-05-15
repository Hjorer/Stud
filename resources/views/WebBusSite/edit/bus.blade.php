@extends('WebBusSite.layouts.app')

@section('content')
<div class="row justify-content-center mt-4">
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-header bg-warning text-dark">
                <h5 class="mb-0">Редактировать автобус №{{ $bus->id }}</h5>
            </div>
            <div class="card-body">
                <form action="/buses/{{ $bus->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label class="form-label">Регистрационный номер</label>
                        <input type="text" name="registration_number" class="form-control" value="{{ old('registration_number', $bus->registration_number) }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Модель автобуса</label>
                        <input type="text" name="model" class="form-control" value="{{ old('model', $bus->model) }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Количество мест</label>
                        <input type="number" name="seat_count" class="form-control" min="1" value="{{ old('seat_count', $bus->seat_count) }}" required>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="/dispatcher" class="btn btn-secondary">Отмена</a>
                        <button type="submit" class="btn btn-primary">Сохранить изменения</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
