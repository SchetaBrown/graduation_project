<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventStatus extends Model
{
    // Поля
    protected $fillable = [
        'status',
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
