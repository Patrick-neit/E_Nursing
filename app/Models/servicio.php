<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class servicio extends Model
{
    use HasFactory;
    protected $table='servicios';

    protected $fillable=['nombre','descripcion','fecha_ini','precio','enfermera_id','especialidad_id'];


    public function enfermera(){
        return $this->belongsTo('App\Models\Enfermera');
    }
    public function especialidad(){
        return $this->belongsTo('App\Models\especialidad');
    }
    public function kitmedico(){
        return $this->hasMany('App\Models\kitmedico');
    }
    public function receta(){
        return $this->hasMany('App\Models\receta');
    }
}
