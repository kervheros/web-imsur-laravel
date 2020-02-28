<?php

namespace IMSUR;

use Illuminate\Database\Eloquent\Model;

class Liquidacion_deuda extends Model
{
    protected $table='liquidacion_deuda';
    protected $primaryKey='cod_liquidacion_deuda';
    protected $fillable=['cod_liquidacion_deuda',
                         'cod_liquidacion',
                         'prestamo',
                         'aire',
                         'otros'];

    public function liqui_d(){
      return $this->belongsTo('IMSUR\Liquidaciones','cod_liquidacion');
    }
}
