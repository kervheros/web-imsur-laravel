<?php

namespace IMSUR;

use Illuminate\Database\Eloquent\Model;

class Liquidaciones_laboratorio extends Model
{
    protected $table='liquidaciones_laboratorio';
    protected $fillable=['cod_liquidacion_laboratorio',
                         'cod_liquidacion',
                         'entregado_laboratorio',
                         'fecha_entregado',
                         'usuario_entregado';
                         'leyes_imsur',
                         'fecha_leyes_imsur',
                         'usuario_leyes_imsur'];
}
