<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class schedule extends Model
{
    protected $table = "schedules";
    protected $primaryKey = "id";
    protected $typeKey = "int";
    public $timestamps = true;
    public $incrementing = true;

    public function relation() : HasMany{
        return $this->hasMany(relation::class, "relation_id", "id");
    }

    public function driver() : HasOne{
        return $this->hasOne(employee::class, "driver_id", "id");
    }

    public function driverAssistance() : HasOne{
        return $this->hasOne(employee::class, "driver_assist_id", "id");
    }

    public function bus(): HasOne{
        return $this-> hasOne(bus::class, "bus_id", "id");
    }
}
