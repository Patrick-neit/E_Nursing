<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $table='personas';

    protected $fillable=['nombre','apellido','fecha_nac','telefono','sexo','estado_civil','direccion'];

    public function user()
    {
        return $this->hasOne(User::class, 'persona_id');
    }

    public function paciente()
    {
        return $this->hasOne(Paciente::class,'persona_id');
    }

    public function enfermera()
    {
        return $this->hasOne(Enfermera::class,'persona_id');
    }
}
