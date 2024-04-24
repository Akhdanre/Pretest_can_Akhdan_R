<?php

namespace App\Http\Controllers;

use App\Http\Resources\ScheduleResource;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller {
    public function get(Request $request) {

        $schedule = Schedule::all();

        return ScheduleResource::collection($schedule);
    }
}
