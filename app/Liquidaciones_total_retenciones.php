<?php

namespace IMSUR;

use Illuminate\Database\Eloquent\Model;

class Liquidaciones_total_retenciones extends Model
{
    protected $table='liquidaciones_total_retenciones';
    protected $primaryKey='cod_liquidacion_total_retenciones';
    protected $fillable=['cod_liquidacion_total_retenciones',
                         'cod_liquidacion',
                         'total_retenciones_ley',
                         'menos_transporte',
                         'menos_prestamos',
                         'menos_anticipos',
                         'menos_regalias',
                         'menos_liquidaciones_adeudadas',
                         'saldo_a_pagar'];

    public function liqui_tr(){
      return $this->belongsTo('IMSUR\Liquidaciones','cod_liquidacion');
    }
}
