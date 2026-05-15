@extends('WebBusSite.layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-5 text-center">Панель диспетчера: Управление автовокзалом</h2>
    <div class="card mb-5 shadow-sm">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Автобусы</h5>
            <button class="btn btn-light btn-sm" data-bs-toggle="collapse" data-bs-target="#addBusForm">Добавить автобус</button>
        </div>
        <div class="card-body">
            <div class="collapse mb-4 p-3 bg-light border rounded" id="addBusForm">
                <form action="/buses" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-4">
                            <input type="text" name="registration_number" class="form-control" placeholder="Рег. номер" required>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="model" class="form-control" placeholder="Модель автобуса" required>
                        </div>
                        <div class="col-md-2">
                            <input type="number" name="seat_count" class="form-control" placeholder="Мест" min="1" required>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-success w-100">Сохранить</button>
                        </div>
                    </div>
                </form>
            </div>
            <table class="table table-hover align-middle mb-0">
                <thead>
                    <tr>
                        <th>Рег. номер</th>
                        <th>Модель</th>
                        <th>Места</th>
                        <th class="text-end">Действия</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($buses as $bus)
                        <tr>
                            <td><strong>{{ $bus->registration_number }}</strong></td>
                            <td>{{ $bus->model }}</td>
                            <td>{{ $bus->seat_count }}</td>
                            <td class="text-end">
                                <a href="/buses/{{ $bus->id }}/edit" class="btn btn-sm btn-warning me-1">Редактировать</a>
                                <form action="/buses/{{ $bus->id }}" method="POST" class="d-inline">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Удалить этот автобус?')">Удалить</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card mb-5 shadow-sm">
        <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Маршруты</h5>
            <button class="btn btn-light btn-sm" data-bs-toggle="collapse" data-bs-target="#addRouteForm">Добавить маршрут</button>
        </div>
        <div class="card-body">
            <div class="collapse mb-4 p-3 bg-light border rounded" id="addRouteForm">
                <form action="/routes" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-2">
                            <input type="text" name="route_number" class="form-control" placeholder="№ маршрута" required>
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="start_stop" class="form-control" placeholder="Начальная остановка" required>
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="end_stop" class="form-control" placeholder="Конечная остановка" required>
                        </div>
                        <div class="col-md-2">
                            <input type="number" step="0.01" name="ticket_price" class="form-control" placeholder="Цена" min="0" required>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-success w-100">Сохранить</button>
                        </div>
                    </div>
                </form>
            </div>
            <table class="table table-hover align-middle mb-0">
                <thead>
                    <tr>
                        <th>№</th>
                        <th>Откуда</th>
                        <th>Куда</th>
                        <th>Цена билета</th>
                        <th class="text-end">Действия</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($routes as $route)
                        <tr>
                            <td><strong>{{ $route->route_number }}</strong></td>
                            <td>{{ $route->start_stop }}</td>
                            <td>{{ $route->end_stop }}</td>
                            <td>{{ number_format($route->ticket_price, 2, '.', ' ') }} ₽</td>
                            <td class="text-end">
                                <a href="/routes/{{ $route->id }}/edit" class="btn btn-sm btn-warning me-1">Редактировать</a>
                                <form action="/routes/{{ $route->id }}" method="POST" class="d-inline">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Удалить этот маршрут?')">Удалить</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-info text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Рейсы</h5>
            <button class="btn btn-light btn-sm" data-bs-toggle="collapse" data-bs-target="#addRideForm">Добавить рейс</button>
        </div>
        <div class="card-body">
            <div class="collapse mb-4 p-3 bg-light border rounded" id="addRideForm">
                <form action="/rides" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-2">
                            <input type="text" name="ride_number" class="form-control" placeholder="№ рейса" required>
                        </div>
                        <div class="col-md-3">
                            <select name="bus_id" class="form-select" required>
                                <option value="" selected disabled>Выбрать автобус...</option>
                                @foreach($buses as $bus)
                                    <option value="{{ $bus->id }}">{{ $bus->model }} ({{ $bus->registration_number }})</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select name="route_id" class="form-select" required>
                                <option value="" selected disabled>Выбрать маршрут...</option>
                                @foreach($routes as $route)
                                    <option value="{{ $route->id }}">№{{ $route->route_number }} ({{ $route->start_stop }} - {{ $route->end_stop }})</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2">
                            <input type="datetime-local" name="arrival_start" class="form-control" title="Прибытие на начальную" required>
                        </div>
                        <div class="col-md-2">
                            <input type="datetime-local" name="arrival_end" class="form-control" title="Прибытие на конечную" required>
                        </div>
                        <div class="col-12 text-end">
                            <button type="submit" class="btn btn-success px-4">Сохранить рейс</button>
                        </div>
                    </div>
                </form>
            </div>
            <table class="table table-hover align-middle mb-0">
                <thead>
                    <tr>
                        <th>№ рейса</th>
                        <th>Автобус</th>
                        <th>Маршрут</th>
                        <th>Начальная</th>
                        <th>Конечная</th>
                        <th class="text-end">Действия</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rides as $ride)
                        <tr>
                            <td><strong>{{ $ride->ride_number }}</strong></td>
                            <td>{{ $ride->bus->model }}</td>
                            <td>№{{ $ride->route->route_number }}</td>
                            <td>{{ $ride->arrival_start->format('d.m H:i') }}</td>
                            <td>{{ $ride->arrival_end->format('d.m H:i') }}</td>
                            <td class="text-end">
                                <a href="/rides/{{ $ride->id }}/edit" class="btn btn-sm btn-warning me-1">Редактировать</a>
                                <form action="/rides/{{ $ride->id }}" method="POST" class="d-inline">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Удалить этот рейс?')">Удалить</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
