<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kitmedico extends Model
{
    use HasFactory;
    protected $table='kitmedicos';

    protected $fillable=['tipo_kit','instrumentos','enfermera_id','servicio_id'];

    public function enfermera(){
        return $this->belongsTo('App\Models\Enfermera');
    }
    public function servicio(){
        return $this->belongsTo('App\Models\servicio');
    }
}
