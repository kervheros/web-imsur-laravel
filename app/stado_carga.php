<?php

namespace IMSUR;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Auth\Authenticatable;
use DB;

class stado_carga extends Model
{
    protected $table = 'vista_stado_cargas';

    protected $fillable = ['cod_liquidacion',
                           'cod_proveedor',
                           'proveedor',
                           'tipo',
                           'nuevo'];

   public function scopenom($query, $cod_proveed){
     return $query -> where ('cod_proveedor','like',"$cod_proveed");
   }


   public function scopeLiquidacion ($query, $cod_liquidacion){
     if($cod_liquidacion)
     return $query -> where('cod_liquidacion','LIKE',"%$cod_liquidacion%");
   }
}
