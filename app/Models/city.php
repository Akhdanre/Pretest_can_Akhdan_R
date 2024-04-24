<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class city extends Model
{
    protected $table = "cities";
    protected $primaryKey = "id";
    protected $typeKey = "int";
    public $timestamps = false;
    public $incrementing = true;

    protected $fillable = [
        "name"
    ];

    public function fromRelation() : HasMany {
        return $this->hasMany(relation::class, "from_id", "id");
    }

    public function destinationRelation() : HasMany {
        return $this->hasMany(relation::class, "destination_id", "id");
    }
}
