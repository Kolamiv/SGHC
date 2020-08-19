<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbAlaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_islas', function (Blueprint $table) {
            $table->increments("id");
            $table->string('isla');
        });

        Schema::create('tb_hidrocarburo', function (Blueprint $table) {
            $table->increments("id");
            $table->string('hidrocarburo');
            $table->string('propiedad');
        });

        Schema::create('tb_ala', function (Blueprint $table) {
            $table->increments("id");
            $table->string('ala');
            $table->unsignedBigInteger('tb_islas_id'); // Relación con categorias
            $table->foreign('tb_islas_id')->references('id')->on('tb_islas'); // clave foranea

            $table->unsignedBigInteger('tb_hidrocarburo_id'); // Relación con categorias
            $table->foreign('tb_hidrocarburo_id')->references('id')->on('tb_hidrocarburo'); // clave foranea
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_hidrocarburo');
        Schema::dropIfExists('tb_ala');
        Schema::dropIfExists('islas');
    }
}
