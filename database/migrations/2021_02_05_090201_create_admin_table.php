<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->id();
            $table->string('usuario',20);
            $table->string('contraseña',50);
            $table->timestamps();

        });


        DB::table('admin')->insert(
            array(
                'id' => 0,
                'usuario' =>'Admin',
                'contraseña' =>'admin',

           )
        );
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin');
    }
}
