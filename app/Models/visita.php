<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class visita extends Model
{
    use HasFactory;
    protected $table='visitas';

    protected $fillable=['descripcion','hora_en','hora_sal ','enfermera_id','paciente_id'];

    public function enfermera(){
        return $this->belongsTo('App\Models\Enfermera');
    }
    public function paciente(){
        return $this->belongsTo('App\Models\Paciente');
    }
}
