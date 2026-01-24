<?php

namespace Database\Seeders;

use App\Models\EventDirection;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EventDirectionSeeder extends Seeder
{
    private array $directions = [
        'программирование',
        'математика',
        'другое'
    ];
    public function run(): void
    {


        foreach ($this->directions as $direction) {
            EventDirection::create([
                'direction' => $direction
            ]);
        }
    }
}
