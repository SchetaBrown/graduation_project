<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EducationDirection extends Model
{
    // Поля
    protected $fillable = [
        'direction',
        'education_school_id'
    ];

    // Связи
    public function educationSchool()
    {
        return $this->belongsTo(EducationSchool::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function events()
    {
        return $this->belongsToMany(Event::class, 'event_event_directions');
    }
}
