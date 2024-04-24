<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ticket extends Model {
    protected $table = "tickets";
    protected $primaryKey = "id";
    protected $typeKey = "int";
    public $timestamps = true;
    public $incrementing = true;


    public function user(): BelongsTo{
        return $this->belongTo(User::class, "id", "user_id");
    }
}
