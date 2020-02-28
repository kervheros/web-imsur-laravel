<?php

namespace IMSUR;

use Illuminate\Database\Eloquent\Model;

class Liquidaciones extends Model
{
    protected $table='liquidaciones';
    protected $primaryKey = 'cod_liquidacion';
    protected $fillable = ['cod_columna',
                           'cod_liquidacion',
                           'clave_muestra',
                           'fecha_ingreso',
                           'fecha_liquidacion',
                           'cod_proveedor',
                           'particula',
                           'cod_cooperativa',
                           'cod_transportista',
                           'observaciones',
                           'cod_origen',
                           'cheque',
                           'anticipo_',
                           'cheque_',
                           'trans_1',
                           'TMB',
                           'TARA',
                           'HUM',
                           'TMH',
                           'TMS',
                           'IMSUR_ZN',
                           'ZINC',
                           'IMSUR_DM',
                           'PLATA_DM',
                           'IMSUR_PLOMO',
                           'PLOMO',
                           'CLIENTE_ZN',
                           'PRECIO_ZN',
                           'CLIENTE_DM',
                           'PRECIO_AG',
                           'CLIENTE_PLOMO',
                           'PRECIO_PLOMO',
                           'monto',
                           'mas_transporte',
                           'importe_total',
                           'estado',
                           'debe',
                           'cod_grupo_liquidacion',
                           'usuario_ingreso',
                           'usuario_liquidacion',
                           'costo_dolar',
                           'plataforma',
                           'triturado',
                           'pago_transporte',
                           'cod_persona',
                           'devuelto'];

    public function usuario_l(){
                                          //     A             B
      return $this->belongsTo('IMSUR\User','cod_proveedor','cod_prov');
      // A= llave foranea de Liquidaciones, local
      // B= llave primaria de User, externa,  se coloca este parametro
      // porq en el modelo de User asignamos como llave primaria cod_prov
    }

    public function proveedor_p(){
      //return $this->belongsTo('IMSUR\Proveedores','cod_proveedor','cod_proveedor');
      return $this->belongsTo('IMSUR\Proveedores','cod_proveedor');
    }

    public function pago_a(){                                 //la = liquidaciones_pago_anticipo
                                                              //llaveforanea de la
      return $this->hasMany('IMSUR\Liquidaciones_pago_anticipo','cod_liquidacion','cod_liquidacion');
    }

    public function persona_p(){
    return $this->belongsTo('IMSUR\Persona','cod_persona','cod_persona');
    }                                                     //colocar esto si en modelo persona no definimos una primarykey y la dejamos por defecto

    public function scopeProveer ($query, $cod_proveed){
      if($cod_proveed)
      return $query->where('cod_proveedor', 'LIKE',"%$cod_proveed%");
    }

    public function scopeLiquidacion ($query, $cod_liquidacion){
      if($cod_liquidacion)
      return $query->where('cod_liquidacion','LIKE',"%$cod_liquidacion%");
    }



    public function trans_li(){
      return $this->belongsTo('IMSUR\Transportista','cod_transportista','cod_transportista');
    }

    public function pago_t(){
      return $this->hasMany('IMSUR\Liquidaciones_pago_transporte','cod_liquidacion');
    }



    public function total_r(){
      return $this->hasMany('IMSUR\Liquidaciones_total_retenciones','cod_liquidacion');
    }

    public function reten(){
      return $this->hasMany('IMSUR\retencion','cod_liquidacion');
    }

    public function coop(){
      return $this->belongsTo('IMSUR\Cooperativa','cod_cooperativa');
    }

    public function deuda(){
      return $this->hasMany('IMSUR\Liquidacion_deuda','cod_liquidacion');
    }



    public function liqui_lab(){
      return $this->hasMany('IMSUR\Liquidaciones_laboratorio','cod_liquidacion');
    }

    public function muestra_l(){
      return $this->hasMany('IMSUR\Li_provee_leyes_mues','cod_liquidacion');
    }


}
