<?php

namespace IMSUR;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Auth\Authenticatable;
use DB;

class transpor extends Model
{
    //forma de asignar clave primaria a una tabla 
    //protected $primaryKey = 'cod_liquidacion';


    protected $table = 'vista_transporte';

    protected$fillable = ['cod_proveedor',
                          'cod_liquidacion',
                          'trans_1',
                          'transportista',
                          'proveedor',
                          'fecha_ingreso',
                          'fecha_pago',
                          'nombre_completo',
                          'ci',
                          'placa'];

    //realiza la busqueda se solo cod_proveedor para cargar en index
    public function scopeProveer ($query, $cod_proveed){
      if($cod_proveed)
      return $query -> where('cod_proveedor', 'LIKE',"%$cod_proveed%");
    }
    /** busqueda por codigo de liquidacion
    public function scopeSearch ($query, $codigo_liqui){
      return $query -> where('cod_liquidacion','LIKE',"%$codigo_liqui%");
    }*/

//  3 busquedas desde la misma vista (FacturasController-show)
    public function scopeLiquidacion ($query, $cod_liquidacion){
      if($cod_liquidacion)
      return $query -> where('cod_liquidacion','LIKE',"%$cod_liquidacion%");
    }
/**
    public function scopeTransporte ($query, $transp){
      if($transp)
      return $query -> where('transportista','LIKE',"%$transp%");
    }

    public function scopePlaca ($query, $n_placa){
      if($n_placa)
      //                       bd             variable de controlador facturas
      return $query -> where('placa','LIKE',"%$n_placa%");
    } */

}
