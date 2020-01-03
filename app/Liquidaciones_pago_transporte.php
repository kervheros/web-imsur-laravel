<?php

namespace IMSUR;

use Illuminate\Database\Eloquent\Model;

class Liquidaciones_pago_transporte extends Model
{
    protected $table='liquidaciones_pago_transporte';
    protected $fillable=['cod_transporte_pagado',
                         'cod_liquidacion',
                         'fecha_pago',
                         'cod_grupo_pago',
                         'usuario',
                         'cod_persona'];
}
