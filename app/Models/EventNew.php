<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventNew extends Model
{
    // Поля
    protected $fillable = [
        'title',
        'description',
        'event_id',
    ];

    // Связи
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
