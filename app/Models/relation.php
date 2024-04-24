<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class relation extends Model
{
    protected $table = "relations";
    protected $primaryKey = "id";
    protected $typeKey = "int";
    public $timestamps = true;
    public $incrementing = true;

    protected $fillable = [
        'from_id',
        'destination_id',
        'price',
    ];

    public function cityFrom() : BelongsTo {
        return $this->belongsTo(city::class, "from_id", "id");
    }

    public function cityDestination() : BelongsTo {
        return $this->belongsTo(city::class, "destination_id", "id");
    }

    public function schedule() : HasOne {
        return $this->hasOne(Schedule::class, "relation_id", "id");
    }
}
