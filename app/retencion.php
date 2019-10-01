<?php

namespace IMSUR;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Auth\Authenticatable;
use DB;

class retencion extends Model
{
    protected $table = 'vista_retenciones';
    protected $fillable = ['cod_liquidacion',
                           'descripcion',
                           'porcentaje',
                           'nuevo'];
    /**
    public function scopeProveer ($query, $cod_proveed){
      if($cod_proveed)
      return $query -> where('cod_proveedor', 'LIKE',"%$cod_proveed%");
    } */
    
    public function scopeLiquidacion ($query, $cod_liquidacion){
      if($cod_liquidacion)
      return $query -> where('cod_liquidacion','LIKE',"%$cod_liquidacion%");
    }
}
