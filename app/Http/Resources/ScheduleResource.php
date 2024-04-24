<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ScheduleResource extends JsonResource {
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request): array {
        return [
            'id' => $this->id,
            'bus_type' => $this->bus->type,
            'bus_plat' => $this->bus->plat_no,
            'first_city' => $this->relation->cityFrom->name,
            'destination_city' => $this->relation->cityDestination->name,
            'price' => $this->relation->price,
            'driver_id' => $this->driver->id,
            'driver_name' => $this->driver->name,
            'driver_email' => $this->driver->email,
            'driver_phone_number' => $this->driver->phone_number,
            'driver_assist_id' => $this->driverAssistance->id,
            'driver_assist_name' => $this->driverAssistance->name,
            'driver_assist_email' => $this->driverAssistance->email,
            'driver_assist_phone_number' => $this->driverAssistance->phone_number,
            'start_at' => $this->start_at
        ];
    }
}
