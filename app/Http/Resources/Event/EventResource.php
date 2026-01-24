<?php

namespace App\Http\Resources\Event;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->when(($request->routeIs('admin.*') || $request->routeIs('event.show')), $this->id),
            'title' => $this->title,
            'description' => $this->when(!$request->routeIs('admin.*'), $this->description),
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'players_count' => $this->players_count,
            'players_limit' => $this->players_limit,
            'event_direction' => $this->eventDirection->direction,
            'event_status' => $this->eventStatus->status,
        ];
    }
}
