<?php

namespace IMSUR;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Auth\Authenticatable;
use DB;

class retencion extends Model
{
    protected $table = 'liquidaciones_descuento';
    protected $fillable = ['cod_liquidacion_descuento',
                           'cod_liquidacion',
                           'descripcion',
                           'porcentaje',
                           'total_descuento',
                           'cod_grupo_liquidacion'];
    /**
    public function scopeProveer ($query, $cod_proveed){
      if($cod_proveed)
      return $query -> where('cod_proveedor', 'LIKE',"%$cod_proveed%");
    } */

    public function liqui_re(){
      return $this->belongsTo('IMSUR\Liquidaciones','cod_liquidacion');
    }


    public function scopeLiquidacion ($query, $cod_liquidacion){
      if($cod_liquidacion)
      return $query -> where('cod_liquidacion','LIKE',"%$cod_liquidacion%");
    }
}
