@extends('WebBusSite.layouts.app')

@section('content')
    <div class="row justify-content-center mt-4">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-warning text-dark">
                    <h5 class="mb-0">Редактировать рейс №{{ $ride->id }}</h5>
                </div>
                <div class="card-body">
                    <form action="/rides/{{ $ride->id }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">Номер рейса</label>
                            <input type="text" name="ride_number" class="form-control"
                                value="{{ old('ride_number', $ride->ride_number) }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Автобус</label>
                            <select name="bus_id" class="form-select" required>
                                @foreach($buses as $bus)
                                    <option value="{{ $bus->id }}" {{ $ride->bus_id == $bus->id ? 'selected' : '' }}>
                                        {{ $bus->model }} ({{ $bus->registration_number }})
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Маршрут</label>
                            <select name="route_id" class="form-select" required>
                                @foreach($routes as $route)
                                    <option value="{{ $route->id }}" {{ $ride->route_id == $route->id ? 'selected' : '' }}>
                                        №{{ $route->route_number }} ({{ $route->start_stop }} - {{ $route->end_stop }})
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Время прибытия на начальную</label>
                            <input type="datetime-local" name="arrival_start" class="form-control"
                                value="{{ old('arrival_start', $ride->arrival_start->format('Y-m-d\TH:i')) }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Время прибытия на конечную</label>
                            <input type="datetime-local" name="arrival_end" class="form-control"
                                value="{{ old('arrival_end', $ride->arrival_end->format('Y-m-d\TH:i')) }}" required>
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