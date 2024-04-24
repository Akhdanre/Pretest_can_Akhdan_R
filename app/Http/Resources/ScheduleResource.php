<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ScheduleResource extends JsonResource
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
            'relation_id' => $this->relation->name,
            'driver_id' => $this->driver->name,
            'driver_assist_id' => $this->driverAssistance->name,
            'bus_id' => $this->bus->id,
            'start_at' => $this->start_at
        ];
    }
}
