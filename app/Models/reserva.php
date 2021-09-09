<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reserva extends Model
{
    use HasFactory;
    protected $table='reservas';

    protected $fillable=['motivo','hora','paciente_id','horario_id',];

    public function paciente(){
        return $this->belongsTo('App\Models\Paciente');
    }
    public function horario(){
        return $this->belongsTo('App\Models\horario');
    }
}
