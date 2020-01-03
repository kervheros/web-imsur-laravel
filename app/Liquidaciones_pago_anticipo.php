<?php

namespace IMSUR;

use Illuminate\Database\Eloquent\Model;

class Liquidaciones_pago_anticipo extends Model
{
    protected $table='liquidaciones_pago_anticipo';
    protected $fillable=['cod_anticipo_pago',
                         'cod_liquidacion',
                         'fecha_pago',
                         'monto',
                         'cod_persona',
                         'cod_grupo_anticipo_pago'
                         'usario'];
}
