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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelatihan');
            $table->string('penyelenggara');
            $table->string('waktu_pelaksanaan');
            $table->string('tingkatan');
            $table->string('deskripsi', 1500);
            $table->foreignId('experiencecategory_id');
            $table->foreign('experiencecategory_id')->references('id')->on('experience_categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
