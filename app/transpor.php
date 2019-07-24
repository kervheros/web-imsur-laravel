<?php

namespace IMSUR;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Auth\Authenticatable;
use DB;

class transpor extends Model
{

    protected $table = 'vista_transporte';

    protected$fillable = ['cod_liquidacion','trans_1','transportista','proveedor','fecha_ingreso','fecha_pago','nombre_completo','ci','placa'];


    public function scopeLiquidacion ($query, $cod_liquidacion){
      if($cod_liquidacion)
      return $query -> where('cod_liquidacion','LIKE',"%$cod_liquidacion%");
    }

    public function scopeTransporte ($query, $transp){
      if($transp)
      return $query -> where('transportista','LIKE',"%$transp%");
    }

    public function scopePlaca ($query, $n_placa){
      if($n_placa)
      return $query -> where('placa','LIKE',"%$n_placa%");
    }

}
