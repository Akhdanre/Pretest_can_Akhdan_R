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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("relation_id")->nullable(false);
            $table->unsignedBigInteger("driver_id")->nullable(false);
            $table->unsignedBigInteger("driver_assist_id")->nullable(false);
            $table->unsignedBigInteger("bus_id")->nullable(false);
            $table->dateTime("start_at")->nullable(false);
            $table->integer("seat_available")->nullable(false)->default(40);
            $table->timestamps();

            $table->foreign("relation_id")->references("id")->on("relations");
            $table->foreign("driver_id")->references("id")->on("employees");
            $table->foreign("driver_assist_id")->references("id")->on("employees");
            $table->foreign("bus_id")->references("id")->on("buses");
			
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
