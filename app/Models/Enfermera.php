<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enfermera extends Model
{
    use HasFactory;
    protected $table='enfermeras';

    protected $fillable=['nombre','apellido','matricula','persona_id'];

    public function persona(){
        return $this->belongsTo(Persona::class,'persona_id');
    }
    public function horario(){
        return $this->hasMany('App\Models\horario');
    }
    public function servicio(){
        return $this->hasMany('App\Models\servicio');
    }
    public function kitmedico(){
        return $this->hasMany('App\Models\kitmedico');
    }

}


//public static function datosEnfermeras(){
      //  $enfermeras= Persona::query()->join('enfermeras','personas.id','=','enfermeras.persona_id');
        //return $enfermeras;

//}
