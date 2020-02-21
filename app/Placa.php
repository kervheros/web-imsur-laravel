<?php

namespace IMSUR;

use Illuminate\Database\Eloquent\Model;

class Placa extends Model
{
    protected $table='placa';
    protected $primaryKey='cod_placa';
    protected $fillable=['cod_placa',
                         'placa'];

    public function placa_t(){
      return $this->hasMany('IMSUR\Transportista','cod_placa');
    }
}
