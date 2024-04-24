<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class bus extends Model
{
    protected $table = "buses";
    protected $primaryKey = "id";
    protected $typeKey = "int";
    public $timestamps = true;
    public $incrementing = true;

    protected $fillable = [
        'plat_no',
        'type',
        'capacity',
    ];

    public function schedule() : HasOne {
        return $this->hasOne(schedule::class , "bus_id", "id");
    }
}
