<?php

namespace IMSUR;

use Illuminate\Database\Eloquent\Model;

class Li_provee_leyes_mues extends Model
{
    protected $table='li_provee_leyes_mues';
    protected $fillable=['cod_li_provee_leyes_mues',
                         'cod_liquidacion',
                         'cod_muestrero',
                         'tipo'];
}
