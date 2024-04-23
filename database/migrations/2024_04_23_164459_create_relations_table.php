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
        Schema::create('relations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("from_id")->nullable(false);
            $table->unsignedBigInteger("destination_id")->nullable(false);
            $table->integer("price")->nullable(false);
            $table->timestamps();

            $table->foreign("from_id")->references("id")->on("cities");
            $table->foreign("destination_id")->references("id")->on("cities");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relations');
    }
};
