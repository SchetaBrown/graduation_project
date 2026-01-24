<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventOrder extends Model
{
    // Поля
    protected $fillable = [
        'score',
        'place',
        'event_id',
        'user_id',
        'team_id',
    ];

    // Связи
    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
