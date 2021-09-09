<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKitmedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kitmedicos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_kit');
            $table->string('instrumentos');

            $table->unsignedBigInteger('enfermera_id')->nullable();
            $table->unsignedBigInteger('servicio_id')->nullable();

            $table->foreign ('enfermera_id') ->on('enfermeras') ->references('id')-> onDelete('set null');
            $table->foreign ('servicio_id') ->on('servicios') ->references('id')-> onDelete('set null');
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
        Schema::dropIfExists('kitmedicos');
    }
}
