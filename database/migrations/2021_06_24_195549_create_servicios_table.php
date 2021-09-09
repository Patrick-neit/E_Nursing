<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table-> string ('nombre');
            $table-> string ('descripcion');
            $table-> date ('fecha_ini');
            $table-> float ('precio');
            $table->unsignedBigInteger('enfermera_id')->nullable();
            $table->unsignedBigInteger('especialidad_id')->nullable();

            $table->foreign ('enfermera_id') ->on('enfermeras') ->references('id')-> onDelete('set null');
            $table->foreign ('especialidad_id') ->on('especialidades') ->references('id')-> onDelete('set null');
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
        Schema::dropIfExists('servicios');
    }
}
