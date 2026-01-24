<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EducationSchool extends Model
{
    protected $fillable = [
        'full_name',
        'short_name',
        'inn',
        'phone_number',
        'email',
        'city_id',
    ];

    // Связи
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function educationDirection()
    {
        return $this->hasMany(EducationDirection::class);
    }
}
