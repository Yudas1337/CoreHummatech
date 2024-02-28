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
        Schema::create('mision_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vision_and_mission_id')->constrained('vision_and_misions')->onDelete('cascade');
            // $table->string('vision');
            $table->string('mission');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mision_items');
    }
};
