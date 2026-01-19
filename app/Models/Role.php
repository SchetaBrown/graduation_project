<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'role'
    ];

    // Связи
    public function user() {
        return $this->hasMany(User::class);
    }
}
