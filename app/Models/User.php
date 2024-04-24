<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use PHPUnit\Framework\Attributes\Ticket;

class User extends Model {
    protected $table = "users";
    protected $primaryKey = "id";
    protected $keyType = "int";
    public $timestamps = true;
    public $incrementing = true;

    protected $fillable = [
        'email',
        'password',
        'no_ktp',
        'name',
        'birth_date',
        'gender',
        'address',
        'phone_number',
        'profile_image',
        'token'
    ];

    public function tickets(): HasMany {
        return $this->hasMany(Ticket::class, "user_id", "id");
    }
}
