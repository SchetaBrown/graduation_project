<?php

use App\Models\Event;
use App\Repositories\EventRepository;
use App\Sevices\Interfaces\EventServiceInterface;

class EventService implements EventServiceInterface
{
    private EventRepository $eventRepository;

    public function __construct(EventRepository $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }

    public function createEventOrder($eventId, $userId)
    {
        // Проверяем наличие мероприятия

        try {
            $event = Event::find($eventId);

            if (!$event)
                throw new Exception("Олимпиада не найдена");




        } catch (Exception $e) {
            return back()->with("error", $e->getMessage());
        }
    }

    private function createPDFDocument($eventId, $userId)
    {

    }
}
