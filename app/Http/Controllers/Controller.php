<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\EventRepositoryInterface;


abstract class Controller
{
    protected EventRepositoryInterface $eventRepository;
    public function __construct(EventRepositoryInterface $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }
}
