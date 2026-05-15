@extends('WebBusSite.layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4 text-center">Информационное табло автовокзала</h2>
    <div class="card mb-5 shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Действующие автобусы</h5>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped table-hover mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>Регистрационный номер</th>
                        <th>Модель автобуса</th>
                        <th>Количество мест</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($buses as $bus)
                        <tr>
                            <td><strong>{{ $bus->registration_number }}</strong></td>
                            <td>{{ $bus->model }}</td>
                            <td>{{ $bus->seat_count }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center py-3 text-muted">Нет доступных автобусов</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <div class="card mb-5 shadow-sm">
        <div class="card-header bg-success text-white">
            <h5 class="mb-0">Действующие маршруты</h5>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped table-hover mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>Номер маршрута</th>
                        <th>Начальная остановка</th>
                        <th>Конечная остановка</th>
                        <th>Цена билета</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($routes as $route)
                        <tr>
                            <td><strong>{{ $route->route_number }}</strong></td>
                            <td>{{ $route->start_stop }}</td>
                            <td>{{ $route->end_stop }}</td>
                            <td>{{ number_format($route->ticket_price, 2, '.', ' ') }} ₽</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center py-3 text-muted">Нет доступных маршрутов</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-info text-white">
            <h5 class="mb-0">Действующие рейсы</h5>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped table-hover mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>Номер рейса</th>
                        <th>Автобус (Модель / Номер)</th>
                        <th>Маршрут</th>
                        <th>Время прибытия на начальную</th>
                        <th>Время прибытия на конечную</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($rides as $ride)
                        <tr>
                            <td><strong>{{ $ride->ride_number }}</strong></td>
                            <td>{{ $ride->bus->model }} ({{ $ride->bus->registration_number }})</td>
                            <td>№{{ $ride->route->route_number }} ({{ $ride->route->start_stop }} ➔ {{ $ride->route->end_stop }})</td>
                            <td>{{ $ride->arrival_start->format('d.m.Y H:i') }}</td>
                            <td>{{ $ride->arrival_end->format('d.m.Y H:i') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-3 text-muted">Нет действующих рейсов</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
