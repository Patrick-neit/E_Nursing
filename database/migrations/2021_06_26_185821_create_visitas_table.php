<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitas', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->datetime('hora_en');
            $table->datetime('hora_sal');
            $table->unsignedBigInteger('enfermera_id')->nullable();
            $table->unsignedBigInteger('paciente_id')->nullable();

            $table->foreign ('enfermera_id') ->on('enfermeras') ->references('id')-> onDelete('set null');
            $table->foreign ('paciente_id') ->on('pacientes') ->references('id')-> onDelete('set null');


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
        Schema::dropIfExists('visitas');
    }
}
