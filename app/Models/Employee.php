<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{
    protected $table = "employees";
    protected $primaryKey = "id";
    protected $typeKey = "int";
    public $timestamps = true;
    public $incrementing = true;

    public function role() : BelongsTo {
        return $this->belongsTo(Role::class, "role_id", "id");
    }
    
}
