<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model {
    protected $table = "employees";
    protected $primaryKey = "id";
    protected $typeKey = "int";
    public $timestamps = true;
    public $incrementing = true;

    protected $fillable = [
        'email',
        'name',
        'role_id',
        'birth_date',
        'address',
        'gender',
        'phone_number',
        'status',
        'photo_image',
    ];

    public function role(): BelongsTo {
        return $this->belongsTo(Role::class, "role_id", "id");
    }
}
