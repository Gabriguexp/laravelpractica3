<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReparacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reparacion', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idconsola')->unsigned();
            $table->string('descripcion', 200);
            $table->string('fecha', 20);
            $table->decimal('precio', 8, 2);
            $table->foreign('idconsola')->references('id')->on('consola')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reparacion');
    }
}
