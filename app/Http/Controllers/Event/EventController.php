<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function index()
    {
        return inertia('Index', [
            'events' => $this->eventRepository->getAllEvents(15),
            'event_statuses' => $this->eventRepository->getEventStatuses(),
            'event_directions' => $this->eventRepository->getEventDirections(),
            'event_types' => $this->eventRepository->getEventTypes(),
        ]);
    }

    public function show()
    {

    }
}
