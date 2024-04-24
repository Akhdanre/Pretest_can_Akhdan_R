<?php

namespace App\Http\Controllers;

use App\Http\Requests\TicketRequest;
use App\Http\Resources\TicketResource;
use App\Models\Schedule;
use App\Models\ticket;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller {
    public function create(TicketRequest $request): TicketResource {
        $data = $request->validated();
        $user = Auth::user();

        $schedule = Schedule::where("id", $data['schedule_id'])->first();
        if (!$schedule) {
            throw new HttpResponseException(response([
                "errors" => [
                    "schedule" => [
                        "schedule not found"
                    ]
                ]
            ], 400));
        }
        if ($schedule->seat_available < 1) {
            throw new HttpResponseException(response([
                "errors" => [
                    "ticket" => [
                        "ticket sold out"
                    ]
                ]
            ], 400));
        }

        $ticket = ticket::create(
            [
                'schedule_id' => $data['schedule_id'],
                'user_id' => $user->id,
                'description' => $data['description']
            ]
        );
        return new TicketResource($ticket);
    }
}
