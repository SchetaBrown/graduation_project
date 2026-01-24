<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    private array $events = [
        [
            'title' => 'Основы программирования на VueJS',
            'description' => 'Олимпиада по созданию интерактивных веб-интерфейсов с использованием фреймворка VueJS. Участники освоят реактивность, компоненты и управление состоянием, решая задачи на построение динамических UI.',
            'start_date' => '2025-11-23',
            'end_date' => '2025-11-30',
            'players_count' => 28,
            'players_limit' => 50,
            'event_status_id' => 2,
            'event_direction_id' => 1,
        ],
        [
            'title' => 'Разработка ИС на Laravel',
            'description' => 'Олимпиада по backend-разработке на PHP-фреймворке Laravel. Участники будут проектировать архитектуру, работать с базами данных, API и реализовывать бизнес-логику для комплексных информационных систем.',
            'start_date' => '2026-01-14',
            'end_date' => '2026-01-18',
            'players_count' => 14,
            'players_limit' => 30,
            'event_status_id' => 2,
            'event_direction_id' => 1,
        ],
        [
            'title' => 'Дипломатия протоколов: проектирование RESTful API',
            'description' => 'Задачи этой олимпиады сфокусированы на архитектуре веб-сервисов. Участникам предстоит правильно применять HTTP-методы, статус-коды, проектировать ресурсы и их взаимосвязи, а также учитывать вопросы безопасности, версионирования и документирования API.',
            'start_date' => '2026-01-14',
            'end_date' => '2026-01-16',
            'players_count' => 78,
            'players_limit' => 100,
            'event_status_id' => 3,
            'event_direction_id' => 1,
        ],
        [
            'title' => 'Архитектурный код: паттерны проектирования на C#',
            'description' => 'Олимпиада для тех, кто хочет писать не просто работающий, но и элегантный, поддерживаемый код. Участникам предстоит решать типичные архитектурные проблемы, применяя классические паттерны (порождающие, структурные, поведенческие) в контексте языка C# и платформы .NET.',
            'start_date' => '2025-12-04',
            'end_date' => '2025-12-18',
            'players_count' => 40,
            'players_limit' => 40,
            'event_status_id' => 3,
            'event_direction_id' => 1,
        ],
        [
            'title' => 'DevOps-инструменты: автоматизация от CI/CD до контейнеризации',
            'description' => 'Олимпиада на стыке разработки и эксплуатации. Задания будут посвящены написанию скриптов для пайплайнов (GitLab CI/GitHub Actions), сборке Docker-образов, оркестрации и настройке мониторинга. Ключевой навык — умение автоматизировать рутину.',
            'start_date' => '2025-07-14',
            'end_date' => '2025-07-24',
            'players_count' => 7,
            'players_limit' => 20,
            'event_status_id' => 4,
            'event_direction_id' => 1,
        ],
    ];
    public function run(): void
    {
        foreach ($this->events as $event) {
            $makedEvent = Event::create($event);

            if ($makedEvent->id === rand(2, count($this->events) - 1)) {
                $makedEvent->eventTypes()->attach([1, 2]);
            } else {
                $makedEvent->eventTypes()->attach(rand(1, 2));
            }
        }
    }
}
