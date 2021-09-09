<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    protected $table='pacientes';

    protected $fillable=['nombre','apellido','profesion','peso','persona_id'];

    public function persona(){
        return $this->belongsTo(Persona::class,'persona_id');
    }
    public function kitmedico(){
        return $this->hasMany('App\Models\kitmedico');
    }
    public function visita(){
        return $this->hasMany('App\Models\visita');
    }
    public function reserva(){
        return $this->hasMany('App\Models\reserva');
    }

}
