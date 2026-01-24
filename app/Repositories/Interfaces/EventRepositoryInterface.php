<?php

namespace App\Repositories\Interfaces;

interface EventRepositoryInterface
{
    public function getAllEvents(?int $paginate = 15);
    public function getEventStatuses();
    public function getEventTypes();
    public function getEventDirections();
    public function findEvent(string $id);
}
