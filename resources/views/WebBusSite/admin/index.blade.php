@extends('WebBusSite.layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-5 text-center">Панель администратора: Управление пользователями</h2>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white">
                    <h5 class="mb-0">Добавить пользователя</h5>
                </div>
                <div class="card-body">
                    <form action="/admin/users" method="POST">
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
                            <label class="form-label">Роль в системе</label>
                            <select name="role" class="form-select" required>
                                <option value="guest" selected>Гость (guest)</option>
                                <option value="dispatcher">Диспетчер (dispatcher)</option>
                                <option value="admin">Администратор (admin)</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success w-100">Создать аккаунт</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Пользователи системы</h5>
                </div>
                <div class="card-body p-0">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Имя / Email</th>
                                <th>Роль</th>
                                <th class="text-end" style="width: 45%;">Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>
                                        <strong>{{ $user->username }}</strong><br>
                                        <small class="text-muted">{{ $user->email }}</small>
                                    </td>
                                    <td>
                                        <span class="badge 
                                            @if($user->role === 'admin') bg-danger 
                                            @elseif($user->role === 'dispatcher') bg-warning text-dark 
                                            @else bg-secondary @endif">
                                            {{ $user->role }}
                                        </span>
                                    </td>
                                    <td class="text-end">
                                        <button class="btn btn-sm btn-outline-primary me-1" 
                                                data-bs-toggle="collapse" 
                                                data-bs-target="#passwordForm{{ $user->id }}">
                                            Сменить пароль
                                        </button>
                                        @if($user->id !== auth()->id())
                                            <form action="/admin/users/{{ $user->id }}" method="POST" class="d-inline">
                                                @csrf @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Удалить пользователя {{ $user->username }}?')">Удалить</button>
                                            </form>
                                        @else
                                            <button class="btn btn-sm btn-danger" disabled title="Вы вошли через этот аккаунт">Удалить</button>
                                        @endif
                                        <div class="collapse mt-2 text-start p-2 bg-light border rounded" id="passwordForm{{ $user->id }}">
                                            <form action="/admin/users/{{ $user->id }}/password" method="POST">
                                                @csrf @method('PUT')
                                                <div class="mb-2">
                                                    <input type="password" name="password" class="form-control form-control-sm" placeholder="Новый пароль" required>
                                                </div>
                                                <div class="mb-2">
                                                    <input type="password" name="password_confirmation" class="form-control form-control-sm" placeholder="Подтверждение" required>
                                                </div>
                                                <button type="submit" class="btn btn-sm btn-warning w-100">Обновить пароль</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
