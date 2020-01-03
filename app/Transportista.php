<?php

namespace IMSUR;

use Illuminate\Database\Eloquent\Model;

class Transportista extends Model
{
    protected $table='transportista';
    protected $fillable=['cod_transportista',
                         'transportista',
                         'cod_placa'];
}
