<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventNew extends Model
{
    // Поля
    protected $fillable = [
        'event_id'
    ];

    // Связи
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
