<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EducationSchool extends Model
{
    protected $fillable = [
        'full_name',
        'short_name',
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
