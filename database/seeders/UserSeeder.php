<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    private array $users = [
        [
            'email' => 'participant@gmail.com',
            'password' => '123123123',
            'role_id' => 1,
        ],
        [
            'email' => 'manager@gmail.com',
            'password' => '123123123',
            'role_id' => 2,
        ],
        [
            'email' => 'admin@gmail.com',
            'password' => '123123123',
            'role_id' => 5,
        ],
    ];

    private array $participants = [
        [
            'surname' => 'Иванов',
            'name' => 'Иван',
            'patronymic' => 'Иванович',
            '' => 'Иванов',
        ],
    ];


    public function run(): void
    {
        //
    }
}
