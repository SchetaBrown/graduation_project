<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    // Поля
    protected $fillable = [
        'surname',
        'name',
        'patronymic',
        'cours_number',
        'user_id',
        'education_school_id',
        'education_direction_id',
        'attached_manager_id',
    ];

    // Связи
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function attachedManager()
    {
        return $this->belongsTo(User::class, 'attached_manager_id');
    }

    public function educationSchool()
    {
        return $this->belongsTo(EducationSchool::class);
    }

    public function educationDirection()
    {
        return $this->belongsTo(EducationDirection::class);
    }

}
