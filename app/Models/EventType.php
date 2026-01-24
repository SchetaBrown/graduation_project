<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventType extends Model
{
    protected $fillable = [
        'type',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function events()
    {
        return $this->belongsToMany(Event::class, 'event_event_types');
    }
}
