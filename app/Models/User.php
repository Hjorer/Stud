<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    // 1. Указываем конкретное имя таблицы
    protected $table = 'user';

    // 2. Разрешаем массовое заполнение полей (необходимо для фабрик)
    protected $fillable = [
        'firstname',
        'secondname',
        'email',
        'age',
    ];

    // 3. Если в таблице НЕТ колонок created_at и updated_at, отключите их:
    // public $timestamps = false;
}