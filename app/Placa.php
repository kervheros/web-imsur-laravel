<?php

namespace IMSUR;

use Illuminate\Database\Eloquent\Model;

class Placa extends Model
{
    protected $table='placa';
    protected $fillable=['cod_placa',
                         'placa'];
}
