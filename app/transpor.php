<?php

namespace IMSUR;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Auth\Authenticatable;
use DB;

class transpor extends Model
{
    use Authenticatable;

    protected $table = 'vista_transporte';

    protected$fillable = ['cod_liquidacion','trans_1','transportista','proveedor','fecha_ingreso','fecha_pago','nombre_completo','ci','placa'];

}
