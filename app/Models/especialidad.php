<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class especialidad extends Model
{
    use HasFactory;
    protected $table='especialidades';

    protected $fillable=['nombre','descripcion'];

    public function servicio(){
        return $this->hasMany('App\Models\servicio');
    }
}
