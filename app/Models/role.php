<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Role extends Model {
    protected $table = "tickets";
    protected $primaryKey = "id";
    protected $typeKey = "int";
    public $incrementing = true;

    public function employess() : BelongsTo{
        return $this->belongsTo(employee::class, "role_id", "id");
    }
}
