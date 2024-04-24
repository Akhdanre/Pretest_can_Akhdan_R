<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use PHPUnit\Framework\Attributes\Ticket;

class User extends Model implements Authenticatable {
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


    public function getAuthIdentifierName() {
        return 'email';
    }


    public function getAuthIdentifier() {
        return $this->email;
    }


    public function getAuthPassword() {
        return $this->password;
    }


    public function getRememberToken() {
        return $this->token;
    }


    public function setRememberToken($value) {
        $this->token = $value;
    }


    public function getRememberTokenName() {
        return 'token';
    }
}
