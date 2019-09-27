<?php

namespace IMSUR;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Auth\Authenticatable;
use DB;

class anticipo extends Model
{
    protected $table = 'vista_anticipos';

    protected $fillable = ['cod_proveedor',
                           'cod_liquidacion',
                           'fecha_ingreso',
                           'fecha_pago',
                           'monto',
                           'proveedor',
                           'nombre_completo',
                           'ci'];

   public function scopeProveer ($query, $cod_proveed){
     if($cod_proveed)
     return $query -> where('cod_proveedor', 'LIKE',"%$cod_proveed%");
   }

   public function scopeLiquidacion ($query, $cod_liquidacion){
     if($cod_liquidacion)
     return $query -> where('cod_liquidacion','LIKE',"%$cod_liquidacion%");
   }


}
