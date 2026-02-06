<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Event extends Model
{
    // Поля
    protected $fillable = [
        'id',
        'title',
        'description',
        'start_date',
        'end_date',
        'players_count',
        'players_limit',
        'event_status_id',
        'event_direction_id',
        'created_at',
        'updated_at',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    // Связи
    public function eventDirection()
    {
        return $this->belongsTo(EventDirection::class);
    }

    public function eventStatus()
    {
        return $this->belongsTo(EventStatus::class);
    }

    public function eventNew()
    {
        return $this->hasMany(EventNew::class);
    }

    public function eventOrder()
    {
        return $this->hasMany(EventOrder::class);
    }

    public function eventTypes()
    {
        return $this->belongsToMany(EventType::class, 'event_event_types')->withPivot('event_id');
    }

    // Мутаторы и аксессоры
}
