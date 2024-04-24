<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model {
    protected $table = "roles";
    protected $primaryKey = "id";
    protected $typeKey = "int";
    public $incrementing = true;

    protected $fillable = [
        'name',
        'description',
    ];

    public function employess() : HasMany{
        return $this->hasMany(employee::class, "role_id", "id");
    }
}
