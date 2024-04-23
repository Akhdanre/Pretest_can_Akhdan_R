<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string("email", 100)->nullable(false)->unique("users_email_unique");
            $table->string("password", 100)->nullable(false);
            $table->string("no_ktp", 16)->nullable(false);
            $table->string("name", 100)->nullable(false);
            $table->date("birth_date")->nullable();
            $table->string("gender", 20)->nullable();
            $table->string("address", 100)->nullable();
            $table->string("phone_number", 20)->nullable();
            $table->string("profile_image", 100)->nullable();
            $table->string("token", 100)->nullable()->unique("users_token_unique");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
