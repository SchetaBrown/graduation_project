<?php

namespace App\Repositories;

use App\Http\Resources\Event\EventResource;
use App\Models\Event;
use App\Models\EventType;
use App\Models\EventStatus;
use App\Models\EventDirection;
use App\Repositories\Interfaces\EventRepositoryInterface;

class EventRepository implements EventRepositoryInterface
{
    private function baseQuery()
    {
        return Event::with([
            'eventStatus',
            'eventNew',
            'eventDirection',
            'eventOrder',
            'eventTypes',
        ]);
    }
    public function getAllEvents(?int $paginate = 15)
    {
        return EventResource::collection($this->baseQuery()->paginate($paginate));
    }

    public function getEventStatuses()
    {
        return EventStatus::get();
    }

    public function getEventTypes()
    {
        return EventType::get();
    }

    public function getEventDirections()
    {
        return EventDirection::get();
    }

    public function findEvent(string $id)
    {
        return $this->baseQuery()->findOrFail($id);
    }
}
