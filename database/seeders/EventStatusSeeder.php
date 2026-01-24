<?php

namespace Database\Seeders;

use App\Models\EventStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventStatusSeeder extends Seeder
{
    private array $statuses = [
        'черновик',
        'открыта регистрация',
        'регистрация закрыта',
        'завершено'
    ];

    public function run(): void
    {
        foreach ($this->statuses as $status) {
            EventStatus::create([
                'status' => $status
            ]);
        }
    }
}
