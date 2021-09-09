<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->string('motivo');
            $table->string('hora');
            $table->unsignedBigInteger('paciente_id')->nullable();
            $table->unsignedBigInteger('horario_id')->nullable();

            $table->foreign ('paciente_id') ->on('pacientes') ->references('id')-> onDelete('set null');
            $table->foreign ('horario_id') ->on('horarios') ->references('id')-> onDelete('set null');
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
        Schema::dropIfExists('reservas');
    }
}
