<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatrocinadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patrocinadores', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('url');
            $table->string('Telefono');
            $table->string('Direccion');
            $table->longtext('Imagen');
            $table->char('Estado')->default('1');
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
        Schema::dropIfExists('patrocinadores');
    }
}
