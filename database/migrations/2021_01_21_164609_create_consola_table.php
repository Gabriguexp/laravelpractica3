<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsolaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consola', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('urlpic', 200);
            $table->string('estado', 50);
            $table->decimal('precio', 8, 2);
            $table->string("fechaventa", 20);
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consolas');
    }
}
