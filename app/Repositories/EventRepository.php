<?php

namespace App\Repositories;

use App\Http\Resources\Event\EventResource;
use App\Models\Event;
use App\Models\EventStatus;
use App\Models\EventDirection;
use App\Repositories\Interfaces\EventRepositoryInterface;
use Illuminate\Http\Resources\Json\ResourceCollection;

class EventRepository implements EventRepositoryInterface
{
    // Получение всех олимпиад
    public function getAllEvents(): ResourceCollection
    {
        return EventResource::collection(Event::orderBy('created_at', 'desc')->get());
    }

    // Получение всех направлений олимпиад
    public function getAllEventDirections(): ResourceCollection
    {
        return EventDirection::get()->toResourceCollection();
    }

    // Получение всех статусов олимпиады
    public function getAllEventStatuses(): ResourceCollection
    {
        return EventStatus::get()->toResourceCollection();
    }

    // Получение информации об одной олимпиаде
    public function getEvent(Event $event): mixed
    {
        return Event::findOrFail($event->id);
    }
}
