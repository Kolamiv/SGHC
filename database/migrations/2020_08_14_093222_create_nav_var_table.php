<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavVarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nav_var', function (Blueprint $table) {
            $table->increments("id");
            $table->string('namelink')->nullable();
            $table->string('href')->nullable();
            $table->string('icon')->nullable();
            $table->string('dropdown')->nullable();
            $table->string('dropdown-child')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nav_var');
    }
}
