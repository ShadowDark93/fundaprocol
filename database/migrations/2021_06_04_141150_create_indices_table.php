<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indices', function (Blueprint $table) {
            $table->id();
            $table->string('Nit')->default('900.576.263');
            $table->string('Cel')->default('3153982992');
            $table->text('Mision');
            $table->text('Vision');
            $table->text('Principios');
            $table->string('Correo');
            $table->string('Facebook');
            $table->string('Instagram');
            $table->string('Linkedin');
            $table->string('Youtube');
            $table->string('Twitter');
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
        Schema::dropIfExists('indices');
    }
}
