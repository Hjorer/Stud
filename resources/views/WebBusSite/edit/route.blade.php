@extends('WebBusSite.layouts.app')

@section('content')
<div class="row justify-content-center mt-4">
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-header bg-warning text-dark">
                <h5 class="mb-0">Редактировать маршрут №{{ $route->id }}</h5>
            </div>
            <div class="card-body">
                <form action="/routes/{{ $route->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label class="form-label">Номер маршрута</label>
                        <input type="text" name="route_number" class="form-control" value="{{ old('route_number', $route->route_number) }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Начальная остановка</label>
                        <input type="text" name="start_stop" class="form-control" value="{{ old('start_stop', $route->start_stop) }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Конечная остановка</label>
                        <input type="text" name="end_stop" class="form-control" value="{{ old('end_stop', $route->end_stop) }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Цена билета</label>
                        <input type="number" step="0.01" name="ticket_price" class="form-control" min="0" value="{{ old('ticket_price', $route->ticket_price) }}" required>
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
