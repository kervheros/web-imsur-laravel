<?php

namespace IMSUR;

use Illuminate\Database\Eloquent\Model;

class Liquidaciones_pago_anticipo extends Model
{
    protected $table='liquidaciones_pago_anticipo';
    //protected $primaryKey = 'cod_anticipo_pago';
    protected $fillable=['cod_anticipo_pago',
                         'cod_liquidacion',
                         'fecha_pago',
                         'monto',
                         'cod_persona',
                         'cod_grupo_anticipo_pago',
                         'usuario'];

    public function liqui_a(){
      return $this->belongsTo('IMSUR\Liquidaciones','cod_liquidacion');
    }

/**
    public function scopeLiquidacion ($query, $cod_liquidacion){
      if($cod_liquidacion)
      return $query->where('cod_liquidacion','LIKE',"%$cod_liquidacion%");
    }*/
}
