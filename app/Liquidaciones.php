<?php

namespace IMSUR;

use Illuminate\Database\Eloquent\Model;

class Liquidaciones extends Model
{
    protected $table='liquidaciones';
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
}
