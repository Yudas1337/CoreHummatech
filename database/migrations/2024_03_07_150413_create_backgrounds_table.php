<?php

use App\Enums\PageEnum;
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
        Schema::create('backgrounds', function (Blueprint $table) {
            $table->id();
            $table->enum('show_in', [
                PageEnum::TENTANG->value, 
                PageEnum::LAYANAN->value, 
                PageEnum::PORTOFOLIO->value, 
                PageEnum::BERITA->value, 
                PageEnum::HUBUNGI->value, 
                PageEnum::LOWONGAN->value]);
            $table->string('image');
            $table->foreignId('service_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('backgrounds');
    }
};
