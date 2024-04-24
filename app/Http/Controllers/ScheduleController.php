<?php

namespace App\Http\Controllers;

use App\Http\Resources\ScheduleResource;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function get(Request $request): ScheduleResource {
        
        $schedule = Schedule::all();

        return new ScheduleResource($schedule);
    }
}
