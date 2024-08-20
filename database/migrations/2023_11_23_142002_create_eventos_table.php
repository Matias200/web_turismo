<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateeventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('user_id')->references('id')->on('users'); // Elimina 'after('cat_id')'
            $table->string('nombre');
            // $table->string('descripcion',8000);
            $table->text('descripcion');
            $table->string('fecha');
            $table->string('ubicacion');
            $table->decimal('precio');
            $table->string('imagen');
            // $table->boolean('suscripcion');
            // $table->tinyInteger('suscripcion')->default(0); //proporciona un valor por defecto a la columna
            $table->string('autor');
            $table->integer('cat_id')->unsigned();
            $table->foreign('cat_id')->references('id')->on('categorias');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('eventos');
    }
};

