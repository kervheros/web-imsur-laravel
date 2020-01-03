<?php

namespace IMSUR;

use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    protected $table='proveedores';
    protected $fillable=['cod_proveedor',
                         'proveedor',
                         'cod_cooperativa',
                         'cod_origen'];
}
