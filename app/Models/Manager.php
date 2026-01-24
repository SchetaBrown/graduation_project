<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    // Поля
    protected $fillable = [
        'surname',
        'name',
        'patronymic',
        'phone_number',
        'user_id',
        'education_school_id',
    ];

    // Связи
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function educationSchool()
    {
        return $this->belongsTo(EducationSchool::class);
    }
}
