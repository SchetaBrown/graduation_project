<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventDirection extends Model
{
    // Поля
    protected $fillable = [
        'direction',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    // Связи
    public function event()
    {
        return $this->hasMany(Event::class);
    }
}
