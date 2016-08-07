<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->enum('semester', ['Primero', 'Segundo', 'Tercero', 'Cuarto', 'Quinto', 'Sexto', 'Septimo', 'Octabo', 'Noveno', 'Decimo', 'Onceavo', 'Dosceavo']);
            $table->enum('plan', ['Diario', 'Fin de Semana']);
            $table->string('course');
            $table->integer('code_id')->unsigned();
            $table->timestamps();

            $table->foreign('code_id')
                    ->references('id')
                    ->on('codes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('people');
    }
}
