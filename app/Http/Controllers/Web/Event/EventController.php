<?php

namespace App\Http\Controllers\Web\Event;

use App\Models\Event;
use App\Repositories\Interfaces\EventRepositoryInterface;
use Inertia\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    private EventRepositoryInterface $eventRepository;

    public function __construct(EventRepositoryInterface $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }

    public function index(Request $request): Response
    {
        return inertia('Index', [
            'title' => 'Главная страница',
            'events' => $this->eventRepository->getAllEvents(),
            'event_statuses' => [],
            'event_directions' => [],
            'event_types' => [],
        ]);
    }

    public function show(Event $event): Response
    {
        return inertia('event/Show', [
            'title' => "$event->title",
            'event' => $this->eventRepository->getEvent($event),
        ]);
    }
}
