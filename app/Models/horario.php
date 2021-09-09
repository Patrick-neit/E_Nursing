<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class horario extends Model
{
    use HasFactory;
    protected $table='horarios';

    protected $fillable=['hora_inicio','hora_fin','enfermera_id'];


    public function enfermera(){
        return $this->belongsTo('App\Models\Enfermera');
    }
    public function reserva(){
        return $this->hasMany('App\Models\reserva');
    }
}
