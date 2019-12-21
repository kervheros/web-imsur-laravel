<?php

namespace IMSUR;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Auth\Authenticatable;
use DB;

class liquidacion extends Model
{
    protected $table='vista_liquidacion';
    protected $fillable=['cod_proveedor',
                         'cod_liquidacion',
                         'cooperativa',
                         'fecha_liquidacion',
                         'proveedor',
                         'fecha_ingreso',
                         'TMS',
                         'ZINC',
                         'PLATA_DM',
                         'PLOMO',
                         'monto',
                         'mas_transporte',
                         'importe_total',
                         'total_retenciones_ley',
                         'menos_anticipos',
                         'trans_1',
                         'menos_prestamos',
                         'menos_liquidaciones_adeudadas',
                         'prestamo',
                         'menos_regalias',
                         'saldo_a_pagar',
                         'nombre_completo',
                         'ci'];
    /**
    public function usuario (){
      return $this->belongsTo(User::class , 'cod_prov');
    }  */

    public function scopeProveer ($query, $cod_proveed){
      if($cod_proveed)
      return $query -> where('cod_proveedor', 'LIKE',"%$cod_proveed%");
    }

    public function scopeLiquidacion ($query, $cod_liquidacion){
      if($cod_liquidacion)
      return $query -> where('cod_liquidacion','LIKE',"%$cod_liquidacion%");
    }
}
