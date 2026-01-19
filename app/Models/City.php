<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'city'
    ];

    public function educationSchool()
    {
        return $this->hasMany(EducationSchool::class);
    }
}
