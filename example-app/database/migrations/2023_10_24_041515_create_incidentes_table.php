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
        Schema::create('incidentes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('area');
            $table->foreign('area')->references('id')->on('areas')->onDelete('cascade');
            $table->unsignedBigInteger('equipo_involucrado');
            $table->foreign('equipo_involucrado')->references('id')->on('equipos')->onDelete('cascade');
            $table->date('fecha');
            $table->double('horas_solucion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incidentes');
    }
};
