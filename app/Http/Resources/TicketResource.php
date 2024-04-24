<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TicketResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "buyyer_name" => $this->user->name,
            "buyyer_email" => $this->user->email,
            "schedule_id" => new ScheduleResource($this->schedule),
            "description" => $this->description,
            "buy_at" => $this->created_at,
        ];
    }
}
