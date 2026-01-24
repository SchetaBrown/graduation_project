<?php

namespace Database\Seeders;

use App\Models\EventType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EventTypeSeeder extends Seeder
{
    private array $types = [
        'индивидуальный',
        'командный',
    ];

    public function run(): void
    {

        foreach ($this->types as $type) {
            EventType::create([
                'type' => $type
            ]);
        }
    }
}
