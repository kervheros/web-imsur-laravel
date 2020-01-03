<?php

namespace IMSUR;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
     protected $table='persona';
     protected $fillable=['cod_persona',
                          'nombre_completo',
                          'ci',
                          'direccion',
                          'telefono'];
}
