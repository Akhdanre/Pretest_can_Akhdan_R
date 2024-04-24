<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Schedule extends Model
{
    protected $table = "schedules";
    protected $primaryKey = "id";
    protected $typeKey = "int";
    public $timestamps = true;
    public $incrementing = true;

    public function relation() : BelongsTo{
        return $this->belongsTo(relation::class, "relation_id", "id");
    }

    public function driver() : BelongsTo{
        return $this->belongsTo(employee::class, "driver_id", "id");
    }

    public function driverAssistance() : BelongsTo{
        return $this->belongsTo(employee::class, "driver_assist_id", "id");
    }

    public function bus(): BelongsTo{
        return $this-> belongsTo(bus::class, "id", "bus_id  ");
    }
}
