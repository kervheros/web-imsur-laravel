<?php

namespace IMSUR;

use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    protected $table='proveedores';
    protected $primaryKey = 'cod_proveedor';
    protected $fillable=['cod_proveedor',
                         'proveedor',
                         'cod_cooperativa',
                         'cod_origen'];

    public function liqui_p(){
      return $this->hasMany('IMSUR\Liquidaciones','cod_proveedor');
    }
}
