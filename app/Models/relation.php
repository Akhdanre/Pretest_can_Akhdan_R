<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class relation extends Model
{
    protected $table = "tickets";
    protected $primaryKey = "id";
    protected $typeKey = "int";
    public $timestamps = true;
    public $incrementing = true;

    public function cityFrom() : HasOne {
        return $this->hasOne(city::class, "from_id", "id");
    }

    public function cityDestination() : HasOne {
        return $this->hasOne(city::class, "destination_id", "id");
    }
}
