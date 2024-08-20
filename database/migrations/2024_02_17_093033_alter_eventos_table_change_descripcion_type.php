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
        //
        Schema::table('eventos', function (Blueprint $table) {
            // Cambia el tipo de dato de la columna 'descripcion' a varchar(max)
            $table->string('descripcion', -1)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('eventos', function (Blueprint $table) {
            // Revierte el cambio anterior
            $table->string('descripcion', 1000)->change();
        });
    }
};
