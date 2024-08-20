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
        Schema::create('auditoria_eventos', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('eventos_id')->references('id')->on('eventos'); //funciona pero no puedo eliminar eventos
            $table->foreignId('eventos_id')->references('id')->on('eventos')->cascadeOnDelete(); //Me paso Mitsu
            // $table->foreignId('user_id')->references('id')->on('users'); // Nuevo campo user_id, iba a ser para que referencie de este mi tabla auditoria y que yo pueda eliminar un evento sin que se elimine tambien de mi tabla auditoria_eventos
            $table->string('nombre');
            $table->text('descripcion');
            $table->string('fecha');
            $table->string('ubicacion');
            $table->string('precio');
            $table->string('autor');
            $table->string('cat_id');
            $table->string('accion');
            $table->timestamp('fecha_modificacion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auditoria_eventos');
    }
};
