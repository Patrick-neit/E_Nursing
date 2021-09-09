<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medicamento extends Model
{
    use HasFactory;
    protected $table='medicamentos';

    protected $fillable=['nombre','cantidad','precio','receta_id'];

    public function receta(){
        return $this->belongsTo('App\Models\receta');
    }
}
