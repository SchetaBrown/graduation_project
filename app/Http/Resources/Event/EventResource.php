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
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'players_count' => $this->players_count,
            'players_limit' => $this->players_limit,
            'direction' => new EventDirectionResource($this->eventDirection),
            'status' => new EventStatusResourse($this->eventStatus),
            'types' => EventTypeResource::collection($this->eventTypes)
        ];
    }
}
