<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('inicio');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
//Routes para usuario/admin
Route::get('personas',[\App\Http\Controllers\PersonaController::class,'index'])->name('persona.index');
Route::get('/create',[\App\Http\Controllers\PersonaController::class,'create'])->name('persona.create');
Route::Post('/store',[\App\Http\Controllers\PersonaController::class,'store'])->name('persona.store');
Route::put('/{id}/update',[\App\Http\Controllers\PersonaController::class,'update'])->name('persona.update');
Route::get('/{id}/edit',[\App\Http\Controllers\PersonaController::class,'edit'])->name('persona.edit');
Route::delete('{id}/destroy',[\App\Http\Controllers\PersonaController::class,'destroy'])->name('persona.destroy');

//Route de Catalogo
Route::group(['prefix' => 'catalogo'], function () {
Route::get('',[\App\Http\Controllers\CatalogoController::class,'index'])->name('catalogo.index');
//Route::get('/{id}',[\App\Http\Controllers\CatalogoController::class,'show'])->name('catalogo.show');
});

Route::group(['prefix' => 'visitas'], function () {
    Route::get('visitas',[\App\Http\Controllers\VisitaController::class,'index'])->name('visita.index');
    Route::get('/create',[\App\Http\Controllers\VisitaController::class,'create'])->name('visita.create');
    Route::Post('/store',[\App\Http\Controllers\VisitaController::class,'store'])->name('visita.store');
    Route::put('/{id}/update',[\App\Http\Controllers\VisitaController::class,'update'])->name('visita.update');
    Route::get('/{id}/edit',[\App\Http\Controllers\VisitaController::class,'edit'])->name('visita.edit');
    Route::delete('{id}/destroy',[\App\Http\Controllers\VisitaController::class,'destroy'])->name('visita.destroy');
    });
//Rutas para kitmedico
    Route::group(['prefix' => 'kitmedicos'], function () {
        Route::get('kitmedicos',[\App\Http\Controllers\kitmedicoController::class,'index'])->name('kitmedico.index');
        Route::get('/create',[\App\Http\Controllers\kitmedicoController::class,'create'])->name('kitmedico.create');
        Route::Post('/store',[\App\Http\Controllers\kitmedicoController::class,'store'])->name('kitmedico.store');
        Route::put('/{id}/update',[\App\Http\Controllers\kitmedicoController::class,'update'])->name('kitmedico.update');
        Route::get('/{id}/edit',[\App\Http\Controllers\kitmedicoController::class,'edit'])->name('kitmedico.edit');
        Route::delete('{id}/destroy',[\App\Http\Controllers\kitmedicoController::class,'destroy'])->name('kitmedico.destroy');
    });
    //Rutas para recetas
    Route::group(['prefix' => 'recetas'], function () {
        Route::get('recetas',[\App\Http\Controllers\RecetaController::class,'index'])->name('receta.index');
        Route::get('/create',[\App\Http\Controllers\RecetaController::class,'create'])->name('receta.create');
        Route::Post('/store',[\App\Http\Controllers\RecetaController::class,'store'])->name('receta.store');
        Route::put('/{id}/update',[\App\Http\Controllers\RecetaController::class,'update'])->name('receta.update');
        Route::get('/{id}/edit',[\App\Http\Controllers\RecetaController::class,'edit'])->name('receta.edit');
        Route::delete('{id}/destroy',[\App\Http\Controllers\RecetaController::class,'destroy'])->name('receta.destroy');
    });
//Rutas para Medicamentos
Route::group(['prefix' => 'medicamentos'], function () {
    Route::get('medicamentos',[\App\Http\Controllers\medicamentoController::class,'index'])->name('medicamento.index');
    Route::get('/create',[\App\Http\Controllers\medicamentoController::class,'create'])->name('medicamento.create');
    Route::Post('/store',[\App\Http\Controllers\medicamentoController::class,'store'])->name('medicamento.store');
    Route::put('/{id}/update',[\App\Http\Controllers\medicamentoController::class,'update'])->name('medicamento.update');
    Route::get('/{id}/edit',[\App\Http\Controllers\medicamentoController::class,'edit'])->name('medicamento.edit');
    Route::delete('{id}/destroy',[\App\Http\Controllers\medicamentoController::class,'destroy'])->name('medicamento.destroy');
});


//Reservas
Route::group(['prefix' => 'reserva'], function () {
Route::get('reservas',[\App\Http\Controllers\ReservaController::class,'index'])->name('reserva.index');
Route::get('/create',[\App\Http\Controllers\ReservaController::class,'create'])->name('reserva.create');
Route::Post('/store',[\App\Http\Controllers\ReservaController::class,'store'])->name('reserva.store');
Route::put('/{id}/update',[\App\Http\Controllers\ReservaController::class,'update'])->name('reserva.update');
Route::get('/{id}/edit',[\App\Http\Controllers\ReservaController::class,'edit'])->name('reserva.edit');
Route::delete('{id}/destroy',[\App\Http\Controllers\ReservaController::class,'destroy'])->name('reserva.destroy');

});


//Routes para enfermera
Route::group(['prefix' => 'enfermeras'], function () {
Route::get('enfermeras',[\App\Http\Controllers\EnfermeraController::class,'index'])->name('enfermera.index');
Route::get('/create',[\App\Http\Controllers\EnfermeraController::class,'create'])->name('enfermera.create');
Route::Post('/store',[\App\Http\Controllers\EnfermeraController::class,'store'])->name('enfermera.store');
Route::put('/{id}/update',[\App\Http\Controllers\EnfermeraController::class,'update'])->name('enfermera.update');
Route::get('/{id}/edit',[\App\Http\Controllers\EnfermeraController::class,'edit'])->name('enfermera.edit');
Route::delete('{id}/destroy',[\App\Http\Controllers\EnfermeraController::class,'destroy'])->name('enfermera.destroy');
});

Route::group(['prefix' => 'servicios'], function () {
    Route::get('servicios',[\App\Http\Controllers\ServicioController::class,'index'])->name('servicio.index');
    Route::get('/create',[\App\Http\Controllers\ServicioController::class,'create'])->name('servicio.create');
    Route::Post('/store',[\App\Http\Controllers\ServicioController::class,'store'])->name('servicio.store');
    Route::put('/{id}/update',[\App\Http\Controllers\ServicioController::class,'update'])->name('servicio.update');
    Route::get('/{id}/edit',[\App\Http\Controllers\ServicioController::class,'edit'])->name('servicio.edit');
    Route::delete('{id}/destroy',[\App\Http\Controllers\ServicioController::class,'destroy'])->name('servicio.destroy');
});
//Routes para horario/
   // Route::group(['prefix' => 'horarios'], function () {
    //Route::get('/{enfermera_id}',[\App\Http\Controllers\HorarioController::class,'index'])->name('horario.index');
    //Route::get('/{enfermera_id}',[\App\Http\Controllers\HorarioController::class,'create'])->name('horario.create');
    //Route::post('/{enfermera_id}',[\App\Http\Controllers\HorarioController::class,'store'])->name('horario.store');
    //Route::put('/{id}',[\App\Http\Controllers\HorarioController::class,'update'])->name('horario.update');
    //Route::get('/{id}/edit',[\App\Http\Controllers\HorarioController::class,'edit'])->name('horario.edit');
    //Route::delete('{id}/destroy',[\App\Http\Controllers\HorarioController::class,'destroy'])->name('horario.destroy');
//});
//Routes Paciente -- Para que no haya cruce con las rutas.. agrego un prefijo indicando que
//las rutas dentro de la funcion le pertenecen al prefijo y a la tabla 'pacientes'
Route::group(['prefix' => 'pacientes'], function () {
    Route::get('pacientes',[\App\Http\Controllers\PacienteController::class,'index'])->name('paciente.index');
    Route::get('/create',[\App\Http\Controllers\PacienteController::class,'create'])->name('paciente.create');
    Route::Post('/store',[\App\Http\Controllers\PacienteController::class,'store'])->name('paciente.store');
    Route::put('/{id}/update',[\App\Http\Controllers\PacienteController::class,'update'])->name('paciente.update');
    Route::get('/{id}/edit',[\App\Http\Controllers\PacienteController::class,'edit'])->name('paciente.edit');
    Route::delete('{id}/destroy',[\App\Http\Controllers\PacienteController::class,'destroy'])->name('paciente.destroy');
});
