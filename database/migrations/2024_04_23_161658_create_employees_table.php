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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string("email", 100)->nullable(false)->unique("employee_email_unique");
            $table->string("name", 100)->nullable(false);
            $table->date("birth_date")->nullable();
            $table->string("address", 100)->nullable();
            $table->string("gender", 20)->nullable();
            $table->string("phone_number", 20)->nullable();
            $table->boolean("status")->nullable(false)->default(true);
            $table->string("photo_image")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
