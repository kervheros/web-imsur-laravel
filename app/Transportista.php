<?php

namespace IMSUR;

use Illuminate\Database\Eloquent\Model;

class Transportista extends Model
{
    protected $table='transportista';
    protected $primaryKey = 'cod_transportista';
    protected $fillable=['cod_transportista',
                         'transportista',
                         'cod_placa'];

    public function trans_li(){
      return $this->hasMany('IMSUR\Liquidaciones','cod_transportista_li');
    }
}
