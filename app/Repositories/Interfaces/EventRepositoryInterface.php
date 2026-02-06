<?php

namespace App\Repositories\Interfaces;

use App\Models\Event;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Resources\Json\ResourceCollection;

interface EventRepositoryInterface
{
    public function getAllEvents(): ResourceCollection;
    public function getAllEventDirections(): ResourceCollection;
    public function getAllEventStatuses(): ResourceCollection;
    public function getEvent(Event $event): mixed;
}
