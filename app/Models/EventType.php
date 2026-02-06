<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventType extends Model
{
    // Поля
    protected $fillable = [
        'id',
        'type',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    // Связи
    public function events()
    {
        return $this->belongsToMany(Event::class, 'event_event_types');
    }
}
