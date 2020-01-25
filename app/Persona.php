<?php

namespace IMSUR;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
     protected $table='persona';
     //protected $primaryKey = 'cod_persona';
     protected $fillable=['cod_persona',
                          'nombre_completo',
                          'ci',
                          'direccion',
                          'telefono'];

    public function liqui_pe(){
      return $this->hasMany('IMSUR\Liquidaciones','cod_persona');
    }


}
