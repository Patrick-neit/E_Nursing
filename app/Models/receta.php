<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class receta extends Model
{
    use HasFactory;
    protected $table='recetas';

    protected $fillable=['tipomedi','instrucciones','tipoadmin','servicio_id'];

    public function servicio(){
        return $this->belongsTo(servicio::class,'servicio_id');
    }
    public function medicamento(){
        return $this->hasMany(medicamento::class,'medicamento_id');
    }
}
