<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slides', function (Blueprint $table) {
            $table->id();
            $table->enum('estado', ['Publico', 'Borrador'])->default('Borrador');
            $table->enum('posicion', ['active', 'inactive'])->default('inactive');
            $table->string('pretitulo', 20)->nullable();
            $table->string('titulo')->nullable();
            $table->string('subtitulo')->nullable();
            $table->text('parrafo')->nullable();
            $table->string('imagen')->nullable();
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
        Schema::dropIfExists('slides');
    }
};
