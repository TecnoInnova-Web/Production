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
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            $table->time('hora_salida_canada');
            $table->time('hora_llegada_centro');
            $table->time('hora_salida_centro');
            $table->time('hora_llegada_canada');
            $table->unsignedBigInteger('autobus_id');
            $table->unsignedBigInteger('conductor_id');
            $table->foreign('autobus_id')->references('id')->on('autobuses')->onDelete('cascade');
            $table->foreign('conductor_id')->references('id')->on('conductors')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horarios');
    }
};
