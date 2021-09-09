<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string ('nombre');
            $table->string ('apellido');
            $table->string ('profesion');
            $table->float ('peso');
            $table->unsignedBigInteger('persona_id')->nullable();

            $table->foreign ('persona_id') ->on('personas') ->references('id')-> onDelete('set null');
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
        Schema::dropIfExists('pacientes');
    }
}
